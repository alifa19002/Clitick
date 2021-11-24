<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_event' => $this->faker->sentence(mt_rand(1, 5)),
            'institusi_penyelenggara' => $this->faker->sentence(mt_rand(2, 4)),
            'tgl_event' => $this->faker->dateTimeThisMonth(),
            'deskripsi_event' => $this->faker->paragraph(),
            'status_event' => $this->faker->word(),
            'slug' => $this->faker->slug(),
            'category_id' => mt_rand(1, 3),
            'user_id' => mt_rand(1, 4),
            'domisili_id' => mt_rand(1, 2)
        ];
    }
}
