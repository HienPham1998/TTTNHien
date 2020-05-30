<?php

use Illuminate\Database\Seeder;

class SalerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('salers')->insert([
            "firstname" => "Hien",
            "lastname" => "Pham",
            "phone" => "0981778269",
            "shopname" => "LuckyStore",
            "shopaddress" => "Bac Tu Liem, Ha Noi",
            "user_id" => "9",
        ]);
        DB::table('salers')->insert([
            "firstname" => "Dung",
            "lastname" => "Pham",
            "phone" => "0981778269",
            "shopname" => "HighStore",
            "shopaddress" => "Bac Tu Liem, Ha Noi",
            "user_id" => "10",
        ]);
        DB::table('salers')->insert([
            "firstname" => "Dieu",
            "lastname" => "Pham",
            "phone" => "0981778269",
            "shopname" => "MoneyStore",
            "shopaddress" => "Bac Tu Liem, Ha Noi",
            "user_id" => "11",
        ]);
        DB::table('salers')->insert([
            "firstname" => "Linh",
            "lastname" => "Pham",
            "phone" => "0981778269",
            "shopname" => "MoneyStore",
            "shopaddress" => "Bac Tu Liem, Ha Noi",
            "user_id" => "12",
        ]);
        DB::table('salers')->insert([
            "firstname" => "Dung",
            "lastname" => "Duong",
            "phone" => "0981778269",
            "shopname" => "HDStore",
            "shopaddress" => "Bac Tu Liem, Ha Noi",
            "user_id" => "13",
        ]);
    }
}
