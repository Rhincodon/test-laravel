<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Model::unguard();

        $this->call(UsersTableSeeder::class);

        Model::reguard();
    }
}

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->truncate();
        DB::table('users')->insert([
            'name'     => 'admin',
            'email'    => 'admin@ubuntu.local',
            'password' => bcrypt('pass'),
        ]);
    }
}
