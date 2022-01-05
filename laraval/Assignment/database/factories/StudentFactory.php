<?php

namespace Database\Factories;
use Carbon\Carbon;
use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'city' => $this->faker->randomElements(['Yangon','Mandalay']),
            'dateOfJoin' => Carbon::now(),
            'department' =>$this->faker->randomElements(['IT','Marketing']),
            'created_at' => Carbon::now(),
            'updated_at' =>Carbon::now(),
        ];
    }
}