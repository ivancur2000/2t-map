<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Level;
use App\Models\Category;
use App\Models\Story;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class StoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title'=> $this->faker->sentence(),
            'Subtitle'=> $this->faker->sentence(),
            'description'=> $this->faker->paragraph(),
            'status'=> $this->faker->randomElement([Story::BORRADOR,Story::REVISION,Story::PUBLICADO]),
            'user_id'=>User::all()->random()->id,
            'level_id'=>Level::all()->random()->id,
            'category_id'=>Category::all()->random()->id,
        ];
    }
}
