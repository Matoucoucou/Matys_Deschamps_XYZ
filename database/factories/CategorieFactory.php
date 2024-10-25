<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Validation\Rules\Unique;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Categorie>
 */
class CategorieFactory extends Factory
{
    protected $categories = [
        'Soul',
        'Ambient',
        'Pop',
        'Rap',
        'Funk',
        'Rock',
        'Reggae / Dub',
        'Techno',
        'Electro',
    ];
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        
        return [
            'name'=>array_pop($this->categories),
        ];
    }
}
