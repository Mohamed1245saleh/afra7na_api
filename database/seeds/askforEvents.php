<?php

use Illuminate\Database\Seeder;

class askforEvents extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($x = 1 ; $x < 9 ;$x++){
            DB::table("ask_special_events")->insert([
                "event_id" => rand(1,9) ,
                "start_time" => \Carbon\Carbon::now(),
//        created_at
//        updated_at

            ]);
        }

    }
}
