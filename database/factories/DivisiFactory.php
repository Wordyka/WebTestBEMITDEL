<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\departemen;
use App\Models\bem;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\divisi>
 */
class DivisiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->sentence(mt_rand(2, 3)),
            'ketua' => $this->faker->name(),
            'tugas' => $this->faker->paragraph(mt_rand(2, 3)),
            'departemen_id' => $this->faker->numberBetween(1, departemen::count()),
            'bem_id' => $this->faker->numberBetween(1, bem::count()),
        ];
    }
}
