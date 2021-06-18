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
        DB::table('Products')->insert([
            [

                'name'=>'Samsung Galaxy S21 Ultra',
                'price'=>'1700',
                'category'=>'Telephone',
                'dercription'=>'Ram 4 Go Rom 256 Go 5.4 pouce 2340 x 1080 pixels red color',
                'gallery'=>'https://www.mytrendyphone.eu/images/Samsung-Galaxy-S21-Ultra-5G-128GB-Phantom-Black-8806090887505-15012021-01-p.jpg'

            ]
        ]);
    }
}
