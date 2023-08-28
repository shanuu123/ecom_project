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
           [ 'name'=>'sekonda',
            'price'=>'100',
            'category'=>'watch',
            'discription'=>"smatwatch with beautiful color full updated version",
            'gallery'=>"https://m.media-amazon.com/images/I/61i-nJPhQ5L._AC_SX679_.jpg"
        ],
        [
            'name'=>'seiko 5',
            'price'=>'600',
            'category'=>'watch',
            'discription'=>"a smarTwatch with full automatic version",
            'gallery'=>"https://m.media-amazon.com/images/I/81eTple18kL._AC_SY879_.jpg"
        ],
        [
            'name'=>'smartwatch',
            'price'=>'600',
            'category'=>'watch',
            'discription'=>"a smart watch with black color and full updated version ",
            'gallery'=>"https://m.media-amazon.com/images/I/81WCB2gcg6L._AC_SX522_.jpg"
        ],
        [
            'name'=>'timezone',
            'price'=>'100',
            'category'=>'watch',
            'discription'=>"beautiful watch with blue display and silver color",
            'gallery'=>"https://m.media-amazon.com/images/I/81+zpC+E6kL._AC_SX679_.jpg"
        ]
    ]);
        
    }
}
