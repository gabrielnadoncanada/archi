<?php

namespace Database\Factories\Product;

use App\Models\Product\Post;
use Database\Factories\Concerns\CanCreateImages;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    use CanCreateImages;

    protected $model = Post::class;

    public function definition(): array
    {
        return [
            Post::TITLE => $this->faker->sentence,
            Post::SLUG => $this->faker->unique()->slug,
            Post::DESCRIPTION => $this->faker->sentence,
            Post::PUBLISHED_AT => now(),
            Post::IS_VISIBLE => true,
            Post::IMAGE => $this->createImage(),
            Post::GALLERY => $this->createImages(),
            Post::CREATED_AT => now(),
            Post::UPDATED_AT => now(),
        ];
    }
}
