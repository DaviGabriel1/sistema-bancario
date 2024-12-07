<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Account>
 */
class AccountsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $status = $this->faker->randomElement(["active", "active", "inactive"]);
        return [
            "user_id" => User::factory(),
            "account_number" => $this->faker->numerify('########-##'),
            "balance" => $this->faker->randomFloat(2, 10, 100000),
            "status" => $status
        ];
    }
}
