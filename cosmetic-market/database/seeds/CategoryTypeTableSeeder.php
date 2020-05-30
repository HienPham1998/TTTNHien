<?php

use Illuminate\Database\Seeder;

class CategoryTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_types')->insert([
            "name" => "bodycare",
        ]);
        DB::table('category_types')->insert([
            "name" => "haircare",
        ]);
        DB::table('category_types')->insert([
            "name" => "facecare",
        ]);
        DB::table('category_types')->insert([
            "name" => "lipcare",
        ]);
    }
}
