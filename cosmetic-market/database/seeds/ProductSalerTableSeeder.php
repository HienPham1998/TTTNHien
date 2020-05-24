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
            "saler_id" => "1",
            "discount" => "3",
            "unit_price" => "4",
            "quantity" => "100",
            "image" => "../client/assets/image/Hazeline-matcha.jpg",
            "ingredient" => "test ingre",
            "manufacturing_date" => "17/5/2020",
            "expiry_date" => "20/05/2020",
        ]);
        DB::table('product_saler')->insert([
            "product_id" => "2",
            "saler_id" => "1",
            "discount" => "10",
            "unit_price" => "11",
            "quantity" => "200",
            "image" => "../client/assets/image/3CEcream.jpg",
            "description" => "this BB cream forms a translucent glowing layer for baby-like healthy skin",
            "ingredient" => "test ingre",
            "manufacturing_date" => "17/5/2020",
            "expiry_date" => "20/05/2020",
        ]);
        DB::table('product_saler')->insert([
            "product_id" => "3",
            "saler_id" => "1",
            "discount" => "0",
            "unit_price" => "15",
            "quantity" => "20",
            "image" => "../client/assets/image/3CERed.png",
            "description" => " Red Recipe Lip Color - Red Complete lipstick series comes from 3CE brand. The lipstick palette stretches from pure red to orange red and deep red.",
            "ingredient" => "test ingre",
            "manufacturing_date" => "17/5/2020",
            "expiry_date" => "20/05/2020",
        ]);
        DB::table('product_saler')->insert([
            "product_id" => "4",
            "saler_id" => "1",
            "discount" => "2",
            "unit_price" => "2.2",
            "quantity" => "140",
            "image" => "../client/assets/image/e100nghe.jpg",
            "description" => "
            Turmeric E100 50g facial cleanser is specially formulated from saffron essence and Triclosan bactericidal effect to whiten, clean acne and remove dead cells.",
            "ingredient" => "test ingre",
            "manufacturing_date" => "17/5/2020",
            "expiry_date" => "20/05/2020",
        ]);
        DB::table('product_saler')->insert([
            "product_id" => "5",
            "saler_id" => "1",
            "discount" => "0",
            "unit_price" => "50",
            "quantity" => "300",
            "image" => "../client/assets/image/bath-and-body.png",
            "description" => "Specially formulated with skin-renewing microspheres to effectively cleanse and exfoliate.Enriched with nourishing Aloe and protective Vitamin E",
            "ingredient" => "test ingre",
            "manufacturing_date" => "17/5/2020",
            "expiry_date" => "20/05/2020",
        ]);
        DB::table('product_saler')->insert([
            "product_id" => "6",
            "saler_id" => "2",
            "discount" => "50",
            "unit_price" => "100",
            "quantity" => "300",
            "image" => "../client/assets/image/diamond_perfum.jpg",
            "description" => "JAFRA Diamonds fragrance. Diamonds Blush is a chic, cheerful scent with a flirty, fruity side, an undeniably unique fragrance created by the renowned perfumer, Marion Costero",
            "ingredient" => "test ingre",
            "manufacturing_date" => "17/5/2020",
            "expiry_date" => "20/05/2020",

        ]);
        DB::table('product_saler')->insert([
            "product_id" => "7",
            "saler_id" => "2",
            "discount" => "30",
            "unit_price" => "18",
            "quantity" => "20",
            "image" => "../client/assets/image/covergirl_mascara.jpg",
            "description" => "JAFRA Diamonds fragrance. Diamonds Blush is a chic, cheerful scent with a flirty, fruity side, an undeniably unique fragrance created by the renowned perfumer, Marion Costero",
            "ingredient" => "test ingre",
            "manufacturing_date" => "17/5/2020",
            "expiry_date" => "20/05/2020",
        ]);
        DB::table('product_saler')->insert([
            "product_id" => "8",
            "saler_id" => "2",
            "discount" => "20",
            "unit_price" => "30",
            "quantity" => "200",
            "image" => "../client/assets/image/baby_shampoo.jpg",
            "description" => "Mountain Falls Hypoallergenic Tear-Free Baby Shampoo, with Natural Lavender and Chamomile, 15 Fluid Ounce ",
            "ingredient" => "test ingre",
            "manufacturing_date" => "17/5/2020",
            "expiry_date" => "20/05/2020",
        ]);
        DB::table('product_saler')->insert([
            "product_id" => "9",
            "saler_id" => "2",
            "discount" => "20",
            "unit_price" => "30",
            "quantity" => "200",
            "image" => "../client/assets/image/baby_shampoo.jpg",
            "description" => "Mountain Falls Hypoallergenic Tear-Free Baby Shampoo, with Natural Lavender and Chamomile, 15 Fluid Ounce ",
            "ingredient" => "test ingre",
            "manufacturing_date" => "17/5/2020",
            "expiry_date" => "20/05/2020",
        ]);
        DB::table('product_saler')->insert([
            "product_id" => "1",
            "saler_id" => "3",
            "discount" => "3",
            "unit_price" => "4",
            "quantity" => "100",
            "image" => "../client/assets/image/Hazeline-matcha.jpg",
            "ingredient" => "test ingre",
            "manufacturing_date" => "17/5/2020",
            "expiry_date" => "20/05/2020",
        ]);
        DB::table('product_saler')->insert([
            "product_id" => "4",
            "saler_id" => "3",
            "discount" => "2",
            "unit_price" => "2.2",
            "quantity" => "140",
            "image" => "../client/assets/image/e100nghe.jpg",
            "description" => "
            Turmeric E100 50g facial cleanser is specially formulated from saffron essence and Triclosan bactericidal effect to whiten, clean acne and remove dead cells.",
            "ingredient" => "test ingre",
            "manufacturing_date" => "17/5/2020",
            "expiry_date" => "20/05/2020",
        ]);
        DB::table('product_saler')->insert([
            "product_id" => "8",
            "saler_id" => "3",
            "discount" => "20",
            "unit_price" => "30",
            "quantity" => "200",
            "image" => "../client/assets/image/baby_shampoo.jpg",
            "description" => "Mountain Falls Hypoallergenic Tear-Free Baby Shampoo, with Natural Lavender and Chamomile, 15 Fluid Ounce ",
            "ingredient" => "test ingre",
            "manufacturing_date" => "17/5/2020",
            "expiry_date" => "20/05/2020",
        ]);
        DB::table('product_saler')->insert([
            "product_id" => "9",
            "saler_id" => "3",
            "discount" => "20",
            "unit_price" => "30",
            "quantity" => "200",
            "image" => "../client/assets/image/baby_shampoo.jpg",
            "description" => "Mountain Falls Hypoallergenic Tear-Free Baby Shampoo, with Natural Lavender and Chamomile, 15 Fluid Ounce ",
            "ingredient" => "test ingre",
            "manufacturing_date" => "17/5/2020",
            "expiry_date" => "20/05/2020",
        ]);
        DB::table('product_saler')->insert([
            "product_id" => "6",
            "saler_id" => "4",
            "discount" => "50",
            "unit_price" => "100",
            "quantity" => "300",
            "image" => "../client/assets/image/diamond_perfum.jpg",
            "description" => "JAFRA Diamonds fragrance. Diamonds Blush is a chic, cheerful scent with a flirty, fruity side, an undeniably unique fragrance created by the renowned perfumer, Marion Costero",
            "ingredient" => "test ingre",
            "manufacturing_date" => "17/5/2020",
            "expiry_date" => "20/05/2020",
        ]);
        DB::table('product_saler')->insert([
            "product_id" => "8",
            "saler_id" => "4",
            "discount" => "20",
            "unit_price" => "30",
            "quantity" => "200",
            "image" => "../client/assets/image/baby_shampoo.jpg",
            "description" => "Mountain Falls Hypoallergenic Tear-Free Baby Shampoo, with Natural Lavender and Chamomile, 15 Fluid Ounce ",
            "ingredient" => "test ingre",
            "manufacturing_date" => "17/5/2020",
            "expiry_date" => "20/05/2020",
        ]);
    }
}
