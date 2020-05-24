<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('categories')->insert([
            "name" => "lipstick",
            "category_type_id" => "5",
        ]);
        DB::table('categories')->insert([
            "name" => "facingfoam",
            "category_type_id" => "3",
        ]);
        DB::table('categories')->insert([
            "name" => "perfume",
            "category_type_id" => "1",
        ]);
        DB::table('categories')->insert([
            "name" => "shampoo",
            "category_type_id" => "2",
        ]);
        DB::table('categories')->insert([
            "name" => "cleanser",
            "category_type_id" => "3",
        ]);
        DB::table('categories')->insert([
            "name" => "shower gel",
            "category_type_id" => "1",
        ]);
        DB::table('categories')->insert([
            "name" => "make up",
            "category_type_id" => "1",
        ]);
    }
}
