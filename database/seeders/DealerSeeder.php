<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Dealer;

class DealerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dealer = new Dealer();

        $dealer->first_name = 'Łukasz';
        $dealer->last_name = 'Miłoś';
        $dealer->company = 'Appeczka';

        $dealer->email = 'appeczka@gmail.com';
        $dealer->password = '123';

        // $dealer->remember_token = Str::random(10);
        // $dealer->email_verified_at = now();

        $dealer->save();
    }
}
