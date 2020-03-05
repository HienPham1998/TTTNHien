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
            "name" => "lipstick"
        ]);
        DB::table('categories')->insert([
            "name" => "facingfoam"
        ]);
        DB::table('categories')->insert([
            "name" => "perfume"
        ]);
        DB::table('categories')->insert([
            "name" => "shampoo"
        ]);
    }
}
