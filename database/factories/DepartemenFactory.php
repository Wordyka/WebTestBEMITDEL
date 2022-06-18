<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\bem;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Departemen>
 */
class DepartemenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->sentence(mt_rand(3, 5)),
            'ketua' => $this->faker->name(),
            'wketua' => $this->faker->name(),
            'sekretaris' => $this->faker->name(),
            'bendahara' => $this->faker->name(),
            'tugas' => $this->faker->paragraph(mt_rand(2, 3)),
            'logo' => $this->faker->imageUrl(640, 480, 'transport'),
            'bem_id' => $this->faker->numberBetween(1, bem::count())
        ];
    }
}
