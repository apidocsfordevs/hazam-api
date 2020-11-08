<?php

namespace Database\Factories;

use App\Models\Artiste;
use App\Models\Track;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TrackFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Track::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'duration_in_seconds' => rand(150, 500),
            'searches_count' => rand(1300, 274000),
        ];
    }
}
