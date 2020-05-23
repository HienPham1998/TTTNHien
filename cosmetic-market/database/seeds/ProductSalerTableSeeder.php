<?php

use Illuminate\Database\Seeder;

class ProductSalerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_saler')->insert([
            "product_id" => "1",
            "saler_id"=>"1",
        ]);
        DB::table('product_saler')->insert([
            "product_id" => "2",
            "saler_id"=>"1",
        ]);
        DB::table('product_saler')->insert([
            "product_id" => "3",
            "saler_id"=>"1",
        ]);
        DB::table('product_saler')->insert([
            "product_id" => "4",
            "saler_id"=>"1",
        ]);
        DB::table('product_saler')->insert([
            "product_id" => "5",
            "saler_id"=>"1",
        ]);
        DB::table('product_saler')->insert([
            "product_id" => "6",
            "saler_id"=>"2",
        ]);
        DB::table('product_saler')->insert([
            "product_id" => "7",
            "saler_id"=>"2",
        ]);
        DB::table('product_saler')->insert([
            "product_id" => "8",
            "saler_id"=>"2",
        ]);
        DB::table('product_saler')->insert([
            "product_id" => "9",
            "saler_id"=>"2",
        ]);
        DB::table('product_saler')->insert([
            "product_id" => "1",
            "saler_id"=>"3",
        ]);
        DB::table('product_saler')->insert([
            "product_id" => "4",
            "saler_id"=>"3",
        ]);
        DB::table('product_saler')->insert([
            "product_id" => "8",
            "saler_id"=>"3",
        ]);
        DB::table('product_saler')->insert([
            "product_id" => "9",
            "saler_id"=>"3",
        ]);
        DB::table('product_saler')->insert([
            "product_id" => "6",
            "saler_id"=>"4",
        ]);
        DB::table('product_saler')->insert([
            "product_id" => "8",
            "saler_id"=>"4",
        ]);
    }
}
