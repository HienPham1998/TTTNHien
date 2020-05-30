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
            "username" => "admin2",
            "email" => "admin2@gmail.com",
            "password" => bcrypt('12345678'),
            "role_id" => "1",
        ]);
        DB::table('users')->insert([
            "username" => "admin3",
            "email" => "admin3@gmail.com",
            "password" => bcrypt('12345678'),
            "role_id" => "1",
        ]);
        DB::table('users')->insert([
            "username" => "username01",
            "email" => "user1@gmail.com",
            "password" => bcrypt('12345678'),
            "role_id" => "2",
        ]);
        DB::table('users')->insert([
            "username" => "username02",
            "email" => "user2@gmail.com",
            "password" => bcrypt('12345678'),
            "role_id" => "2",
        ]);
        DB::table('users')->insert([
            "username" => "username03",
            "email" => "user3@gmail.com",
            "password" => bcrypt('12345678'),
            "role_id" => "2",
        ]);
        DB::table('users')->insert([
            "username" => "username04",
            "email" => "user4@gmail.com",
            "password" => bcrypt('12345678'),
            "role_id" => "2",
        ]);
        DB::table('users')->insert([
            "username" => "username05",
            "email" => "user5@gmail.com",
            "password" => bcrypt('12345678'),
            "role_id" => "2",
        ]);
        DB::table('users')->insert([
            "username" => "saler0001",
            "email" => "saler01@gmail.com",
            "password" => bcrypt('12345678'),
            "role_id" => "3",
        ]);
        DB::table('users')->insert([
            "username" => "saler0002",
            "email" => "saler02@gmail.com",
            "password" => bcrypt('12345678'),
            "role_id" => "3",
        ]);
        DB::table('users')->insert([
            "username" => "saler0003",
            "email" => "saler03@gmail.com",
            "password" => bcrypt('12345678'),
            "role_id" => "3",
        ]);
        DB::table('users')->insert([
            "username" => "saler0004",
            "email" => "saler04@gmail.com",
            "password" => bcrypt('12345678'),
            "role_id" => "3",
        ]);
        DB::table('users')->insert([
            "username" => "saler0005",
            "email" => "saler05@gmail.com",
            "password" => bcrypt('12345678'),
            "role_id" => "3",
        ]);
        

    }
}
