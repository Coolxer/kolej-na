<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use App\Models\Queue;
use App\Models\Customer;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::factory()
        //     ->count(30)
        //     ->has(
        //         Queue::factory()
        //             ->count(fake()->randomDigit())
        //             ->has(Customer::factory()->count(fake()->randomDigit())),
        //     )
        //     ->create();

        User::factory()
            ->count(15)
            ->create();
    }
}
