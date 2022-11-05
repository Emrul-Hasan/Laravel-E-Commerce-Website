<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Testimonial>
 */
class TestimonialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = $this->faker->name;

        return [
            'client_name' => $name,
            'client_name_slug' => Str::slug($name),
            'client_designation' => $this->faker->jobTitle.','.' '.$this->faker->company,
            'client_message' => $this->faker->paragraph(),
        ];
    }
}
