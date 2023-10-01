<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\facades\DB;

class Productseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('Products')->insert([
           [ 'name'=>'Dusk',
            'price'=>'415',
            'category'=>'glasses',
            'discription'=>"App-enabled tint changing smart sunglasses with built-in audio",
            'gallery'=>"https://ampere.shop/cdn/shop/products/Dusk-Blackframewithdarktint_polarizedlenses_550x.jpg?v=1683788487"
        ],
        [
            'name'=>'MTO P3 CLASSIC',
            'price'=>'169',
            'category'=>'glasses',
            'discription'=>"These are our mum's favourite sunglasses. Based on the P3, a Hollywood icon from the 1950s, the MTO is a modern classic for men and women.",
            'gallery'=>"https://sg.rocketeyewear.com/cdn/shop/products/05b_Mahogany_Tortoise_Clear_Front.jpg?v=1670324002&width=1200"
        ]
    ]);
        
    }
}
