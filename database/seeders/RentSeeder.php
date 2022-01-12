<?php

namespace Database\Seeders;

use App\Models\RentPlace;
use Illuminate\Database\Seeder;

class RentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $locations = [
            [
                'place_type'=>0,
                'place_name'=>'Uttara - 10',
            ],
            [
                'place_type'=>0,
                'place_name'=>'House Building',
            ],
            [
                'place_type'=>0,
                'place_name'=>'Jamjam',
            ],
            [
                'place_type'=>1,
                'place_name'=>'Madhupur',
            ],
            [
                'place_type'=>1,
                'place_name'=>'Tangail',
            ],
            [
                'place_type'=>1,
                'place_name'=>'Manikganj',
            ],
        ];
        RentPlace::insert($locations);

    }
}
