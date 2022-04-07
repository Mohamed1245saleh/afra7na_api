<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Model\main_category as Category;

class categories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($x = 0 ; $x <48 ; $x++){
            DB::table('main_categories')->insert([
                'title_ar' => Str::random(10),
                'title_en' => Str::random(10),
                'image' => Str::random(7).".png",
//            'password' => bcrypt('secret'),
            ]);
        }


//        'title_ar' => $this->faker->name(),
//        'title_en' => $this->faker->name(),
//        'image' => Str::random(7).".png",
//        'created_at' => now(),
    }
}
