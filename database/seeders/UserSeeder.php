<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();

        $user->first_name = 'Łukasz';
        $user->last_name = 'Miłoś';

        $user->email = 'appeczka@gmail.com';

        $user->password = Hash::make('123');

        // $user->remember_token = Str::random(10);
        // $user->email_verified_at = now();

        $user->save();
    }
}
