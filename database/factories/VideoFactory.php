<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class VideoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
       
            $rtngs=["Rated G","Rated PG", "Rated SPG", "Rated E", "Rated T", "Rated M", "Rated A"];
            return[
                'title'=>$this->faker->word(),
                'description'=>$this->faker->sentence(),
                'duration'=>$this->faker->randomDigit(),
                'rating'=>$this->faker->randomElement($rtngs,1)
            ];
    }
}
