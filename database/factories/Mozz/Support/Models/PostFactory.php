<?php

namespace Database\Factories\Mozz\Support\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Mozz\Support\Models\Post;

/**
 * @extends Factory<\Mozz\Support\Models\Post>
 */
class PostFactory extends Factory
{
    protected $model = Post::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user = User::query()->inRandomOrder()->first();

        return [
            'user_id' => $user->id,
            'title' => $this->faker->sentence(),
            'photo' => $this->faker->sentence(),
            'is_visible' => $this->faker->boolean(),
        ];
    }
}
