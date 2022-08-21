<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Favorite;

class FavoriteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Favorite::create([
            'user_id' => 1,
            'course_id' => 101,
        ]);
        Favorite::create([
            'user_id' => 1,
            'course_id' => 202,
        ]);
        Favorite::create([
            'user_id' => 1,
            'course_id' => 303,
        ]);
    }
}
