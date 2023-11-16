<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class placesseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('places')->insert([
            
            [
                'place' =>'Kochi',
            ],
            [
                'place' =>'Bangalore',
            ],
            [
                'place' =>'Hyderabad', 
            ],
            [
                'place' =>'Goa',
            ],
            [
                'place' =>'Chennai',
            ],
            [
                'place' =>'Kanyakumari',
            ],
            [
                'place' =>'Rajasthan',
            ],
            [
                'place' =>'Himachal pradesh',
            ],
            [
                'place' =>'Punjab',
            ],
            [
                'place' =>'Maharashtra',  
            ],
            [
                'place' =>'Delhi', 
            ],
           
        ]);
    }
}
