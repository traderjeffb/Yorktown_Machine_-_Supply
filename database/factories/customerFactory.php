<?php

namespace Database\Factories;

use App\Models\customer;
use Illuminate\Database\Eloquent\Factories\Factory;

class customerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = customer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'firstName' => $this->faker->Firstname(),
            'lastName' => $this->faker->Lastname(),
            'address'=>$this->faker->streetaddress(),
            'city'=>$this->faker->city(),
            'state'=>$this->faker->stateAbbr(),
            'zipcode'=>$this->faker->randomElement(['47304','47396','47303','47302','47305']),
            'email' => $this->faker->unique()->safeEmail(),
            'customerRating'=>$this->faker->randomElement(['1','2','3','4','5']),
        ];
    }
}
