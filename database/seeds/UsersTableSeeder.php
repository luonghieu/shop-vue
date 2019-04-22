<?php

use App\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [];
        $password = app('hash')->make('secret');
        for ($i = 1; $i <= 5; $i++) {
            $users[] = [
                'name' => 'User_' . $i,
                'email' => 'User_' . $i . '@gmail.com',
                'password' => $password,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ];
        }
        User::insert($users);
    }
}
