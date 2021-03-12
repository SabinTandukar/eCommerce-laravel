<?php

namespace Database\Seeders;

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
            'name' => 'LG mobile',
            'price' => '500',
            'description' => 'A smartphone with 12Gb ram.',
            'category' => 'moblie',
            'gallery' => 'https://www.lg.com/in/images/mobile-phones/md07517838/LMG910EMW-Aurora-Silver-Thumb-350-v.jpg'
            ],
            [
            'name' => 'LG Television',
            'price' => '250',
            'description' => 'A QHD tv.',
            'category' => 'tv',
            'gallery' => 'https://www.lg.com/us/images/TV/features/nanocallTV-icon.png'
            ],
            [
            'name' => 'LG fridge',
            'price' => '700',
            'description' => 'A fridge with great cooler',
            'category' => 'moblie',
            'gallery' => 'https://www.lg.com/in/images/refrigerators/md07525697/GL-N292BRGY-Refrigerators-Front-View-350.jpg'
            ],
            [
            'name' => 'Sams mobile',
            'price' => '1000',
            'description' => 'A smartphone with 120Hz refresh display.',
            'category' => 'moblie',
            'gallery' => 'https://images.samsung.com/is/image/samsung/p6pim/in/galaxy-s21/gallery/in-galaxy-s21-5g-g991-371114-371114-sm-g991bzvdinu-thumb-368339377?$160_160_PNG$'
            ]
        ]);
    }
}
