<?php

namespace Database\Factories\Project;

use App\Models\Project\Category;
use Database\Factories\Concerns\CanCreateImages;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    use CanCreateImages;

    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            Category::TITLE => $this->faker->word,
            Category::SLUG => $this->faker->unique()->slug,
            Category::DESCRIPTION => $this->faker->optional()->sentence,
            Category::IMAGE => $this->createImage(),
            Category::IS_VISIBLE => true,
            Category::CREATED_AT => now(),
            Category::UPDATED_AT => now(),
        ];
    }
}
