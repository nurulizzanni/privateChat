<?php

use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        factory(User::class)->create(
            [
            'email'=>'izzanniroshlei@gmail.com',
            'name'=>'izzanni'
            ]
        );
        factory(User::class)->create(
            [
            'email'=>'aina@gmail.com',
            'name'=>'aina'
            ]
        );
        factory(User::class)->create(
            [
            'email'=>'sab@gmail.com',
            'name'=>'sab'
            ]
        );
    }
}
