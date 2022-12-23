<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name' => 'Oppo mobile ',
                'price' => '40000',
                'category' => 'smartphone',
                'description' => '8gb ram and 62gb rom',
                'gallery' => 'https://assetscdn1.paytm.com/images/catalog/product/M/MO/MOBOPPO-A52-6-GFUTU6297453D253c/1592019058170_0..png'
            ],
            [
                'name' => 'Panasounic Tv',
                'price' => '40000',
                'category' => 'Tv',
                'description' => 'Smart Tv',
                'gallery' => 'https://www.lg.com/in/images/mobile-phones/md06155757/gallery/Platinum_07-110-v3.jpg'
            ],
            [
                'name' => 'Sony',
                'price' => 't0000',
                'category' => 'Tv',
                'description' => 'Tv with much more features',
                'gallery' => 'https://www.lg.com/in/images/mobile-phones/md06155757/gallery/Platinum_07-110-v3.jpg'
            ],

            [
                'name' => 'LG Fridge',
                'price' => '30000',
                'category' => 'Fridge',
                'description' => 'Refrigirator',
                'gallery' => 'https://www.lg.com/in/images/mobile-phones/md06155757/gallery/Platinum_07-110-v3.jpg'
            ]
        ]);
    }
}