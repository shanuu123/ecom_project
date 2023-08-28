<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\facades\DB;
use Illuminate\support\facades\Hash;

class Adminuserseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('adminusers')->insert(
         
        [
            'name'=>'kamil rogalinski',
            'email'=>'kamilrogalinski@khan.com',
            'password'=>Hash::make('13570')
        ]
          );
    }
}
