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
            "category_id" => "4",
            "saler_id" => "2",
            "sale" => "3",
            "price" => "4",
            "quantity" => "100",
            "image" => "../client/assets/image/Hazeline-matcha.jpg",
        ]);
        DB::table('products')->insert([
            "name" => "3CE cream",
            "category_id" => "4",
            "saler_id" => "2",
            "sale" => "10",
            "price" => "11",
            "quantity" => "200",
            "image" => "../client/assets/image/3CEcream.jpg",
            "description" => "this BB cream forms a translucent glowing layer for baby-like healthy skin",
        ]);
        DB::table('products')->insert([
            "name" => " Son 3CE Red Recipe Lip Color",
            "category_id" => "1",
            "saler_id" => "2",
            "sale" => "0",
            "price" => "15",
            "quantity" => "20",
            "image" => "../client/assets/image/3CERed.png",
            "description" => " Red Recipe Lip Color - Red Complete lipstick series comes from 3CE brand. The lipstick palette stretches from pure red to orange red and deep red.",
        ]);
        DB::table('products')->insert([
            "name" => "E100 cleanser 50g",
            "category_id" => "1",
            "saler_id" => "2",
            "sale" => "2",
            "price" => "2.2",
            "quantity" => "140",
            "image" => "../client/assets/image/e100nghe.jpg",
            "description" => "
            Turmeric E100 50g facial cleanser is specially formulated from saffron essence and Triclosan bactericidal effect to whiten, clean acne and remove dead cells.",
        ]);
        DB::table('products')->insert([
            "name" => "Bath & Body Works Deep Cleansing Hand Soap Georgia Peach",
            "category_id" => "2",
            "saler_id" => "2",
            "sale" => "0",
            "price" => "50",
            "quantity" => "300",
            "image" => "../client/assets/image/bath-and-body.png",
            "description" => "Specially formulated with skin-renewing microspheres to effectively cleanse and exfoliate.Enriched with nourishing Aloe and protective Vitamin E",

        ]);
        DB::table('products')->insert([
            "name" => "Diamonds Blush Eau De Perfum",
            "category_id" => "5",
            "saler_id" => "2",
            "sale" => "50",
            "price" => "100",
            "quantity" => "300",
            "image" => "../client/assets/image/diamond_perfum.jpg",
            "description" => "JAFRA Diamonds fragrance. Diamonds Blush is a chic, cheerful scent with a flirty, fruity side, an undeniably unique fragrance created by the renowned perfumer, Marion Costero",

        ]);
        DB::table('products')->insert([
            "name" => "COVERGIRL LashBlast Volume Mascara Very Black 800",
            "category_id" => "1",
            "saler_id" => "2",
            "sale" => "30",
            "price" => "18",
            "quantity" => "20",
            "image" => "../client/assets/image/covergirl_mascara.jpg",
            "description" => "JAFRA Diamonds fragrance. Diamonds Blush is a chic, cheerful scent with a flirty, fruity side, an undeniably unique fragrance created by the renowned perfumer, Marion Costero",

        ]);
        DB::table('products')->insert([
            "name" => "Mountain Falls Hypoallergenic Tear-Free Baby Shampoo",
            "category_id" => "3",
            "saler_id" => "2",
            "sale" => "20",
            "price" => "30",
            "quantity" => "200",
            "image" => "../client/assets/image/baby_shampoo.jpg",
            "description" => "Mountain Falls Hypoallergenic Tear-Free Baby Shampoo, with Natural Lavender and Chamomile, 15 Fluid Ounce ",

        ]);
        DB::table('products')->insert([
            "name" => "Mountain Falls Hypoallergenic Tear-Free Baby Shampoo",
            "category_id" => "3",
            "saler_id" => "2",
            "sale" => "20",
            "price" => "30",
            "quantity" => "200",
            "image" => "../client/assets/image/baby_shampoo.jpg",
            "description" => "Mountain Falls Hypoallergenic Tear-Free Baby Shampoo, with Natural Lavender and Chamomile, 15 Fluid Ounce ",

        ]);
    }
}
