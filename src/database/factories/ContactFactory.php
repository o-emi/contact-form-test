<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
    return [
        'category_id' => Category::inRandomOrder()->first()->id ?? 1,
        'first_name'  => $this->faker->firstName(),
        'last_name'   => $this->faker->lastName(),
        'gender'      => $this->faker->numberBetween(0,1),
// safeEmail→メールアドレスのテキストをランダムに返す
        'email'       => $this->faker->unique()->safeEmail(),
        'tel'         => $this->faker->phoneNumber(),
        'address'     => $this->faker->address(),
        'building'    => $this->faker->optional()->secondaryAddress(),
        'detail'      => $this->faker->realText(50),
    ];
    }
}
