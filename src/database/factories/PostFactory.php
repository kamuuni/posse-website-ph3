<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->realText(20),
            'body' => fake()->realText(300),
            'is_published' => fake()->boolean(80),
            // state('admin') を使うことで、is_admin = true のユーザーが紐付く
            'user_id'      => User::factory()->state(['is_admin' => true]),
        ];
    }
}
