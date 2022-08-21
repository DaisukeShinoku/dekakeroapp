<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Place;

class PlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Place::create([
            'place_id' => 1,
            'name' => '新宿駅',
        ]);
        Place::create([
            'place_id' => 2,
            'name' => '横浜駅',
        ]);
        Place::create([
            'place_id' => 3,
            'name' => '藤沢駅',
        ]);
        Place::create([
            'place_id' => 4,
            'name' => '秩父駅',
        ]);
        Place::create([
            'place_id' => 5,
            'name' => '千葉駅',
        ]);
    }
}
