<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            "name" => "Hazeline Matcha Skin Cleanser ",
            "category_id" => "5",

        ]);
        DB::table('products')->insert([
            "name" => "3CE cream",
            "category_id" => "1",

        ]);
        DB::table('products')->insert([
            "name" => " Son 3CE Red Recipe Lip Color",
            "category_id" => "1",

        ]);
        DB::table('products')->insert([
            "name" => "E100 cleanser 50g",
            "category_id" => "5",

        ]);
        DB::table('products')->insert([
            "name" => "Bath & Body Works Deep Cleansing Hand Soap Georgia Peach",
            "category_id" => "6",


        ]);
        DB::table('products')->insert([
            "name" => "Diamonds Blush Eau De Perfum",
            "category_id" => "3",

        ]);
        DB::table('products')->insert([
            "name" => "COVERGIRL LashBlast Volume Mascara Very Black 800",
            "category_id" => "7",


        ]);
        DB::table('products')->insert([
            "name" => "Mountain Falls Hypoallergenic Tear-Free Baby Shampoo",
            "category_id" => "4",


        ]);
        DB::table('products')->insert([
            "name" => "Mountain Falls Hypoallergenic Tear-Free Baby Shampoo",
            "category_id" => "4",


        ]);
    }
}
