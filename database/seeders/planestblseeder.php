<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class planestblseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('planes')->insert([
            
            [
                'plane_name' =>'indigo',
                'seats' =>'100',
                'planelogo'=>'/images/indigo.png'   
            ],
            [
                'plane_name' =>'Airasia',
                'seats' =>'110',
                'planelogo'=>'/images/Airasia.png'   
            ],
            [
                'plane_name' =>'Airindia',
                'seats' =>'110',
                'planelogo'=>'/images/airindia.png'   
            ],
            [
                'plane_name' =>'Akasa',
                'seats' =>'90',
                'planelogo'=>'/images/akasha.png'   
            ],
            [
                'plane_name' =>'GOair',
                'seats' =>'100',
                'planelogo'=>'/images/goair.png'   
            ],
            [
                'plane_name' =>'GOfirst',
                'seats' =>'100',
                'planelogo'=>'/images/gofirst.png'   
            ],
            [
                'plane_name' =>'Spicejet',
                'seats' =>'110',
                'planelogo'=>'/images/spicejet.png'   
            ],
            [
                'plane_name' =>'Truejet',
                'seats' =>'120',
                'planelogo'=>'/images/truejet.png'   
            ],
            [
                'plane_name' =>'Vistara',
                'seats' =>'100',
                'planelogo'=>'/images/vistara.png'   
            ],
        ]);
    }
}
