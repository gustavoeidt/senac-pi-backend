<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produto>
 */
class ProdutoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->name(),
            'imagem' => 'https://picsum.photos/200/300.jpg?random=' . $this->faker->randomNumber(9),
            'preco' => (float)$this->faker->numerify('####.##'),
            'descricao' => $this->faker->paragraph(3, true),
        ];
    }
}
