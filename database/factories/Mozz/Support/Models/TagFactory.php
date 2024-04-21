<?php

namespace Database\Factories\Mozz\Support\Models;

use Illuminate\Database\Eloquent\Factories\Factory;
use Mozz\Support\Models\Tag;

/**
 * @extends Factory<\Mozz\Support\Models\Tag>
 */
class TagFactory extends Factory
{
    protected $model = Tag::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
        ];
    }
}
