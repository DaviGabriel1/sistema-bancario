<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Accounts;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaction>
 */
class TransactionsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $type = $this->faker->randomElement(["deposit", "withdrawal", "transfer"]);
        return [
            "accounts_id" => Accounts::factory(),
            "type" => $type,
            "amount" => $this->faker->randomFloat(2, 10, 10000),
        ];
    }
}
