<?php

namespace Database\Factories;

use App\Models\Navigation;
use App\Models\Page;
use Database\Factories\Concerns\CanCreateImages;
use Illuminate\Database\Eloquent\Factories\Factory;

class PageFactory extends Factory
{
    use CanCreateImages;

    protected $model = Page::class;

    public function definition(): array
    {
        return [
            Page::TITLE => $this->faker->sentence,
            Page::SLUG => $this->faker->unique()->slug,
            Page::DESCRIPTION => $this->faker->sentence,
            Page::IS_VISIBLE => true,
            Page::PUBLISHED_AT => now(),
            Page::IMAGE => $this->createImage(),
            Page::CREATED_AT => now(),
            Page::UPDATED_AT => now(),
        ];
    }
}
