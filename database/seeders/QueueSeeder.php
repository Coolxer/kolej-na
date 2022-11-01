<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

use App\Models\Queue;
use App\Models\Customer;

class QueueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Queue::factory()
            ->count(60)
            // ->has(Customer::factory()->count(fake()->randomDigit()))
            ->create();
    }
}
