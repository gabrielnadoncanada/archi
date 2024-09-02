<?php

namespace Database\Factories\Project;

use App\Models\Project\Post;
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
            Post::CLIENT => $this->faker->company,
            Post::AREA => $this->faker->randomFloat(2, 1, 1000),
            Post::YEAR => $this->faker->year,
        ];
    }
}
