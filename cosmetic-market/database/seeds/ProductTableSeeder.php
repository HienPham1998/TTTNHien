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
            "discount" => "3",
            "unit_price" => "4",
            "quantity" => "100",
            "image" => "../client/assets/image/Hazeline-matcha.jpg",
            "ingredient" => "test ingre",
            "manufacturing_date" => "17/5/2020",
            "expiry_date" => "20/05/2022",
            "saler_id" => "1",
        ]);
        DB::table('products')->insert([
            "name" => "3CE cream",
            "category_id" => "1",
            "saler_id" => "1",
            "discount" => "10",
            "unit_price" => "11",
            "quantity" => "200",
            "image" => "../client/assets/image/3CEcream.jpg",
            "description" => "this BB cream forms a translucent glowing layer for baby-like healthy skin",
            "ingredient" => "test ingre",
            "manufacturing_date" => "17/5/2020",
            "expiry_date" => "20/05/2023",

        ]);
        DB::table('products')->insert([
            "name" => " Son 3CE Red Recipe Lip Color",
            "category_id" => "1",
            "saler_id" => "1",
            "discount" => "2",
            "saler_id" => "1",
            "unit_price" => "15",
            "quantity" => "20",
            "image" => "../client/assets/image/3CERed.png",
            "description" => " Red Recipe Lip Color - Red Complete lipstick series comes from 3CE brand. The lipstick palette stretches from pure red to orange red and deep red.",
            "ingredient" => "test ingre",
            "manufacturing_date" => "17/5/2020",
            "expiry_date" => "20/05/2020",

        ]);
        DB::table('products')->insert([
            "name" => "E100 cleanser 50g",
            "category_id" => "5",
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
        DB::table('products')->insert([
            "name" => "Bath & Body Works Deep Cleansing Hand Soap Georgia Peach",
            "category_id" => "6",
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
        DB::table('products')->insert([
            "name" => "Diamonds Blush Eau De Perfum",
            "category_id" => "3",
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
        DB::table('products')->insert([
            "name" => "COVERGIRL LashBlast Volume Mascara Very Black 800",
            "category_id" => "7",
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
        DB::table('products')->insert([
            "name" => "Mountain Falls Hypoallergenic Tear-Free Baby Shampoo",
            "category_id" => "4",
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
        DB::table('products')->insert([
            "name" => "Mountain Falls Hypoallergenic Tear-Free Baby Shampoo",
            "category_id" => "4",
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
        DB::table('products')->insert([
            "name" => "Blotted Lip",
            "category_id" => "1",
            "saler_id" => "1",
            "discount" => "20",
            "unit_price" => "5.5",
            "quantity" => "200",
            "image" => "../client/assets/image/lip1.jpg",
            "description" => "Blotted Lip Sheer matte lipstick that creates the perfect popsicle pout! Formula is lightweight, matte and buildable for light to medium coverage.",
            "ingredient" => "Vegan, cruelty free",
            "manufacturing_date" => "30/5/2020",
            "expiry_date" => "30/05/2021",
        ]);
        DB::table('products')->insert([
            "name" => "Lippie Stix",
            "category_id" => "1",
            "saler_id" => "1",
            "discount" => "20",
            "unit_price" => "5.5",
            "quantity" => "200",
            "image" => "../client/assets/image/lip2.jpg",
            "description" => "Lippie Stix Formula contains Vitamin E, Mango, Avocado, and Shea butter for added comfort and moisture. None of our Lippie formulas contain any nasty ingredients like Parabens or Sulfates.",
            "ingredient" => "Vegan, cruelty free",
            "manufacturing_date" => "30/5/2020",
            "expiry_date" => "31/05/2021",
        ]);
        DB::table('products')->insert([
            "name" => "B Glossy Lip Gloss",
            "category_id" => "1",
            "saler_id" => "1",
            "discount" => "10",
            "unit_price" => "10.5",
            "quantity" => "200",
            "image" => "../client/assets/image/lip3.jpg",
            "description" => "Intensify your natural lip color with Sally B's B Glossy Lip Gloss",
            "ingredient" => "EWG Verified,purpicks",
            "manufacturing_date" => "30/5/2020",
            "expiry_date" => "31/05/2021",
        ]);
        DB::table('products')->insert([
            "name" => "Lip Gloss",
            "category_id" => "1",
            "saler_id" => "1",
            "discount" => "10",
            "unit_price" => "11.5",
            "quantity" => "200",
            "image" => "../client/assets/image/lip4.jpg",
            "description" => "For fuller healthier lips! Long lasting colour! This colour is a good choice for any skin tone. It can be made lighter by wiping some off after application.Please note that our Vitamin E is extracted from non-GMO soy bean oil and therefore is gluten-free.",
            "ingredient" => "Gluten Free,Chemical Free, Vegan, CertClean, purpicks",
            "manufacturing_date" => "30/5/2020",
            "expiry_date" => "31/05/2021",
        ]);
        DB::table('products')->insert([
            "name" => "Amalia",
            "category_id" => "1",
            "saler_id" => "1",
            "discount" => "12",
            "unit_price" => "9.5",
            "quantity" => "200",
            "image" => "../client/assets/image/lip5.jpg",
            "description" => "named after my beautiful mum, delicately pink that displays sophistication.",
            "ingredient" => "purpicks",
            "manufacturing_date" => "30/5/2020",
            "expiry_date" => "31/05/2021",
        ]);
        DB::table('products')->insert([
            "name" => "Multi Purpose Powder - Blush & Eye",
            "category_id" => "7",
            "saler_id" => "1",
            "discount" => "12",
            "unit_price" => "10.5",
            "quantity" => "200",
            "image" => "../client/assets/image/makeup1.jpg",
            "description" => "named after my beautiful mum, delicately pink that displays sophistication.",
            "ingredient" => "purpicks",
            "manufacturing_date" => "30/5/2020",
            "expiry_date" => "31/05/2021",
        ]);
        DB::table('products')->insert([
            "name" => "Mineral Blush",
            "category_id" => "7",
            "saler_id" => "1",
            "discount" => "12",
            "unit_price" => "5.5",
            "quantity" => "200",
            "image" => "../client/assets/image/makeup2.jpg",
            "description" => "Formulated to reduce the appearance of pores while creating a long-lasting natural finish.",
            "ingredient" => "purpicks",
            "manufacturing_date" => "30/5/2020",
            "expiry_date" => "31/05/2021",
        ]);
        DB::table('products')->insert([
            "name" => "Creme to Powder Blush",
            "category_id" => "7",
            "saler_id" => "1",
            "discount" => "12",
            "unit_price" => "5.5",
            "quantity" => "200",
            "image" => "../client/assets/image/makeup3.png",
            "description" => "A cream to powder blush made with all natural ingredients that applies like a soft cream",
            "ingredient" => "Organic,USDA Organic,purpicks",
            "manufacturing_date" => "30/5/2020",
            "expiry_date" => "31/05/2021",
        ]);
        DB::table('products')->insert([
            "name" => "Bronzer - loose",
            "category_id" => "2",
            "saler_id" => "2",
            "discount" => "5",
            "unit_price" => "10.2",
            "quantity" => "200",
            "image" => "../client/assets/image/facing1.jpg",
            "description" => "Caribbean is a multi-purpose shade that is suitable for medium-tan skin tones.",
            "ingredient" => "Gluten Free,Vegan,purpicks",
            "manufacturing_date" => "30/5/2020",
            "expiry_date" => "31/05/2021",
        ]);
        DB::table('products')->insert([
            "name" => "Matte Bronzer",
            "category_id" => "2",
            "saler_id" => "2",
            "discount" => "5",
            "unit_price" => "11.5",
            "quantity" => "200",
            "image" => "../client/assets/image/facing3.jpg",
            "description" => "Brighten up your complexion! The radiant shimmer of this illuminator diffuses light so your skin looks vibrant and refreshed while adding a subtle glow. Available in 5 radiant colors.",
            "ingredient" => "bronzers",
            "manufacturing_date" => "30/5/2020",
            "expiry_date" => "31/05/2021",
        ]);
        DB::table('products')->insert([
            "name" => "Bleu De Franch",
            "category_id" => "3",
            "saler_id" => "2",
            "discount" => "2",
            "unit_price" => "25.5",
            "quantity" => "200",
            "image" => "../client/assets/image/perfume1.jpg",
            "description" => "Perfume Franch",
            "ingredient" => "perfume",
            "manufacturing_date" => "30/5/2020",
            "expiry_date" => "31/05/2021",
        ]);
        DB::table('products')->insert([
            "name" => "N'5 Chanel",
            "category_id" => "3",
            "saler_id" => "2",
            "discount" => "2",
            "unit_price" => "35.5",
            "quantity" => "200",
            "image" => "../client/assets/image/perfume2.jpg",
            "description" => "Perfume Franch",
            "ingredient" => "perfume",
            "manufacturing_date" => "30/5/2020",
            "expiry_date" => "31/05/2021",
        ]);
        DB::table('products')->insert([
            "name" => "Miss Franch Beaute",
            "category_id" => "3",
            "saler_id" => "2",
            "discount" => "2",
            "unit_price" => "30.5",
            "quantity" => "200",
            "image" => "../client/assets/image/perfume3.jpg",
            "description" => "Perfume Franch",
            "ingredient" => "perfume",
            "manufacturing_date" => "30/5/2020",
            "expiry_date" => "31/05/2021",
        ]);
        DB::table('products')->insert([
            "name" => "Rejoice",
            "category_id" => "4",
            "saler_id" => "2",
            "discount" => "2",
            "unit_price" => "10.5",
            "quantity" => "200",
            "image" => "../client/assets/image/shampoo1.jpg",
            "description" => "Shampoo",
            "ingredient" => "Shampoo",
            "manufacturing_date" => "30/5/2020",
            "expiry_date" => "31/05/2021",
        ]);
        DB::table('products')->insert([
            "name" => "Sunsil ",
            "category_id" => "4",
            "saler_id" => "2",
            "discount" => "2",
            "unit_price" => "12.5",
            "quantity" => "200",
            "image" => "../client/assets/image/shampoo2.jpg",
            "description" => "Shampoo",
            "ingredient" => "Shampoo",
            "manufacturing_date" => "30/5/2020",
            "expiry_date" => "31/05/2021",
        ]);
        DB::table('products')->insert([
            "name" => "Clear",
            "category_id" => "4",
            "saler_id" => "2",
            "discount" => "2",
            "unit_price" => "7.5",
            "quantity" => "200",
            "image" => "../client/assets/image/shampoo3.jpg",
            "description" => "Shampoo",
            "ingredient" => "Shampoo",
            "manufacturing_date" => "30/5/2020",
            "expiry_date" => "31/05/2021",
        ]);
        DB::table('products')->insert([
            "name" => "Cetaphil",
            "category_id" => "5",
            "saler_id" => "3",
            "discount" => "2",
            "unit_price" => "5.5",
            "quantity" => "200",
            "image" => "../client/assets/image/cleanser1.jpg",
            "description" => "Cleanser",
            "ingredient" => "Cleanser",
            "manufacturing_date" => "30/5/2020",
            "expiry_date" => "31/05/2021",
        ]);
        DB::table('products')->insert([
            "name" => "CeraVe",
            "category_id" => "5",
            "saler_id" => "3",
            "discount" => "2",
            "unit_price" => "10.5",
            "quantity" => "200",
            "image" => "../client/assets/image/cleanser2.jpg",
            "description" => "Cleanser",
            "ingredient" => "Cleanser",
            "manufacturing_date" => "30/5/2020",
            "expiry_date" => "31/05/2021",
        ]);
        DB::table('products')->insert([
            "name" => "Ordinary",
            "category_id" => "5",
            "saler_id" => "3",
            "discount" => "2",
            "unit_price" => "9.5",
            "quantity" => "200",
            "image" => "../client/assets/image/cleanser3.jpg",
            "description" => "Cleanser",
            "ingredient" => "Cleanser",
            "manufacturing_date" => "30/5/2020",
            "expiry_date" => "31/05/2021",
        ]);
        DB::table('products')->insert([
            "name" => "Discover California Beach",
            "category_id" => "6",
            "saler_id" => "3",
            "discount" => "2",
            "unit_price" => "12.5",
            "quantity" => "200",
            "image" => "../client/assets/image/shower1.Jpeg",
            "description" => "Shower Gel",
            "ingredient" => "Shower Gel",
            "manufacturing_date" => "30/5/2020",
            "expiry_date" => "31/05/2021",
        ]);
        DB::table('products')->insert([
            "name" => "Strawberry",
            "category_id" => "6",
            "saler_id" => "3",
            "discount" => "2",
            "unit_price" => "11.5",
            "quantity" => "200",
            "image" => "../client/assets/image/shower2.jpg",
            "description" => "Shower Gel",
            "ingredient" => "Shower Gel",
            "manufacturing_date" => "30/5/2020",
            "expiry_date" => "31/05/2021",
        ]);
        DB::table('products')->insert([
            "name" => "Pearberry",
            "category_id" => "6",
            "saler_id" => "3",
            "discount" => "2",
            "unit_price" => "15.5",
            "quantity" => "200",
            "image" => "../client/assets/image/shower3.jpg",
            "description" => "Shower Gel",
            "ingredient" => "Shower Gel",
            "manufacturing_date" => "30/5/2020",
            "expiry_date" => "31/05/2021",
        ]);
    }
}
