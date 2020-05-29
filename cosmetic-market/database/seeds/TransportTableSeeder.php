<?php

use Illuminate\Database\Seeder;

class TransportTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('transport_units')->insert([
            "name" => "J&T Express",
            "price" => "1.5",
        ]);
        DB::table('transport_units')->insert([
            "name" => "Giao hàng nhanh",
            "price" => "1.8",
        ]);
        DB::table('transport_units')->insert([
            "name" => "Giao hàng tiết kiệm",
            "price" => "2",
        ]);
        DB::table('transport_units')->insert([
            "name" => "Ninja Van",
            "price" => "1.3",
        ]);
    }
}
