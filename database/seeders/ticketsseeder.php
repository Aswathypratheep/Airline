<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class ticketsseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tickets')->insert([
            
            [
                'flightno' =>'10011',
                'plane_id' =>'1',
                'from'=>'2',
                'to' =>'5',
                'arrival' =>'02:12:00',
                'departure' =>'01:12:00',
                'date' =>'2023-11-23',
                'remainingseats' =>'100',
                'price' =>'12000',
                'airport_a' => "cochin international airport",
                'airport_d' => "chennai airport",
            ],
            [
                'flightno' =>'10012',
                'plane_id' =>'2',
                'from'=>'6',
                'to' =>'5',
                'arrival' =>'11:30:00',
                'departure' =>'01:12:00',
                'date' =>'2023-11-26',
                'remainingseats' =>'80',
                'price' =>'10000',
                'airport_a' => "cochin international airport",
                'airport_d' => "patiala airport",
            ],
            [
                'flightno' =>'10013',
                'plane_id' =>'3',
                'from'=>'2',
                'to' =>'8',
                'arrival' =>'8:10:00',
                'departure' =>'06:30:00',
                'date' =>'2023-11-25',
                'remainingseats' =>'50',
                'price' =>'18000',
                'airport_a' => "coochin international airport",
                'airport_d' => "dabolim airport",
            ],
            [
                'flightno' =>'10014',
                'plane_id' =>'4',
                'from'=>'1',
                'to' =>'3',
                'arrival' =>'02:12:00',
                'departure' =>'02:12:00',
                'date' =>'2023-11-27',
                'remainingseats' =>'100',
                'price' =>'12000',
                'airport_a' => "coochin international airport",
                'airport_d' => "trivandrum airport",
            ],
            [
                'flightno' =>'10015',
                'plane_id' =>'6',
                'from'=>'2',
                'to' =>'5',
                'arrival' =>'02:12:00',
                'departure' =>'01:12:00',
                'date' =>'2023-11-23',
                'remainingseats' =>'100',
                'price' =>'9000',
                'airport_a' => "kochin",
                'airport_d' => "chennai airport",
            ],
            [
                'flightno' =>'10017',
                'plane_id' =>'9',
                'from'=>'1',
                'to' =>'5',
                'arrival' =>'09:00:00',
                'departure' =>'07:00:00',
                'date' =>'2023-11-29',
                'remainingseats' =>'100',
                'price' =>'11000',
                'airport_a' => "kempegowda",
                'airport_d' => "chennai airport",
            ],
            [
                'flightno' =>'10018',
                'plane_id' =>'5',
                'from'=>'3',
                'to' =>'8',
                'arrival' =>'06:10:00',
                'departure' =>'03:30:00',
                'date' =>'2023-11-30',
                'remainingseats' =>'10',
                'price' =>'6000',
                'airport_a' => "kochin",
                'airport_d' => "chennai airport",
            ],
            [
                'flightno' =>'10019',
                'plane_id' =>'7',
                'from'=>'6',
                'to' =>'1',
                'arrival' =>'11:30:00',
                'departure' =>'09:50:00',
                'date' =>'2023-11-30',
                'remainingseats' =>'60',
                'price' =>'8000',
                'airport_a' => "kochin",
                'airport_d' => "chennai airport",
            ],
            [
                'flightno' =>'10020',
                'plane_id' =>'8',
                'from'=>'8',
                'to' =>'1',
                'arrival' =>'07:00:00',
                'departure' =>'05:50:00',
                'date' =>'2023-11-30',
                'remainingseats' =>'100',
                'price' =>'9000',
                'airport_a' => "kochin",
                'airport_d' => "chennai airport",
            ],
        ]);  
    }
}
