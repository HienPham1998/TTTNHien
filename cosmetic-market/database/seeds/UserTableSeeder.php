<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            "username" => "admin1",
            "email" => "admin@gmail.com",
            "password" => bcrypt('12345678'),
            "role_id" => "1",
        ]);
        DB::table('users')->insert([
            "username" => "user1",
            "email" => "user1@gmail.com",
            "password" => bcrypt('12345678'),
            "role_id" => "3",
        ]);
        DB::table('users')->insert([
            "username" => "user2",
            "email" => "user2@gmail.com",
            "password" => bcrypt('12345678'),
            "role_id" => "3",
        ]);
        DB::table('users')->insert([
            "username" => "user3",
            "email" => "user3@gmail.com",
            "password" => bcrypt('12345678'),
            "role_id" => "3",
        ]);
        DB::table('users')->insert([
            "username" => "user4",
            "email" => "user4@gmail.com",
            "password" => bcrypt('12345678'),
            "role_id" => "3",
        ]);
        DB::table('users')->insert([
            "username" => "user5",
            "email" => "user5@gmail.com",
            "password" => bcrypt('12345678'),
            "role_id" => "3",
        ]);
        DB::table('users')->insert([
            "username" => "user6",
            "email" => "user6@gmail.com",
            "password" => bcrypt('12345678'),
            "role_id" => "3",
        ]);
        DB::table('users')->insert([
            "username" => "user7",
            "email" => "user7@gmail.com",
            "password" => bcrypt('12345678'),
            "role_id" => "3",
        ]);

    }
}
