<?php

namespace Database\Factories;

use App\Models\Navigation;
use App\Models\Service\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class NavigationFactory extends Factory
{

    protected $model = Navigation::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = preg_replace('/\./', '', $this->faker->sentence(3));

        return [
            Navigation::TITLE => $title,
            Navigation::HANDLE => Str::slug($title),
        ];
    }
}
