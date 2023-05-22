<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
    protected $model = Post::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->realText(50),
            'slug' => $this->faker->slug,
            'thumbnail' => $this->faker->imageUrl(),
            'body' => $this->faker->paragraphs(3, true),
            'url' => $this->faker->url,
            'published' => $this->faker->boolean,
        ];
    }
}
