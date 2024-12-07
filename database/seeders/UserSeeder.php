<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Accounts;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@email.com',
            'role' => 2, //admin role = 2, user role = 1
            'password' => "123",
            'remember_token' => "abcdefghij"
        ]);

        User::factory()
        ->count(10) // Cria 10 usuários
        ->has(
            Accounts::factory()
                ->count(2) // Cada usuário tem 2 contas
                ->hasTransactions(10), // Cada conta tem 10 transações
            'accounts'
        )
        ->create();
    }
}
