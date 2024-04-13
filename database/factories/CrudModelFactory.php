<?php

namespace Database\Factories;

use App\Models\CrudModel;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;

class CrudModelFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CrudModel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
       
        return [
            'name' => $this->faker->name,
            'salary' => $this->faker->numberBetween(1000, 5000),
            'emp_id' => $this->faker->unique()->randomNumber(),
            //'img' => $this->faker->imageUrl() // Or provide a default image URL or path
            'email' => $this->faker->unique()->safeEmail,
        ];
    }
}
