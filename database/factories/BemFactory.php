<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\bem>
 */
class BemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama' => 'Badan Eksekutif Mahasiswa Institut Teknologi Del',
            'ketua' => $this->faker->name(),
            'wketua' => $this->faker->name(),
            'sekretaris1' => $this->faker->name(),
            'sekretaris2' => $this->faker->name(),
            'bendahara1' => $this->faker->name(),
            'bendahara2' => $this->faker->name(),
            'visi' => $this->faker->paragraph(mt_rand(2, 3)),
            'misi' => $this->faker->paragraph(mt_rand(7, 8)),
            'logo' => $this->faker->imageUrl(640, 480, 'transport')
        ];
    }
}
