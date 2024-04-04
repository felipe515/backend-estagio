<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Usuario;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dispositivo>
 */
class DispositivoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition() {
        return [
            'nome' => $this->faker->unique()->sentence(),
            'ip' => $this->faker->randomNumber(9),
            'id_usuarios' => Usuario::pluck('id')->random()
        ];
    }
}
