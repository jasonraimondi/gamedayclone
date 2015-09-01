<?php

use Gameday\Conference;
use Illuminate\Database\Seeder;

class ConferenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Conference::create([
            'name'  =>  'American Athletic Conference',
            'nick'  =>  'The American'
        ]);

        Conference::create([
            'name'  =>  'Atlantic Coast Conference',
            'nick'  =>  'ACC'
        ]);

        Conference::create([
            'name'  =>  'Big Ten Conference',
            'nick'  =>  'Big Ten'
        ]);

        Conference::create([
            'name'  =>  'Big 12 Conference',
            'nick'  =>  'Big 12'
        ]);

        Conference::create([
            'name'  =>  'Conference USA',
            'nick'  =>  'C-USA'
        ]);

        Conference::create([
            'name'  =>  'Division I FBS Independents',
            'nick'  =>  'Ind.'
        ]);

        Conference::create([
            'name'  =>  'Mid-American Conference',
            'nick'  =>  'MAC'
        ]);

        Conference::create([
            'name'  =>  'Mountain West Conference',
            'nick'  =>  'MW'
        ]);

        Conference::create([
            'name'  =>  'Pacific-12 Conference',
            'nick'  =>  'Pac-12'
        ]);

        Conference::create([
            'name'  =>  'Southeastern Conference',
            'nick'  =>  'SEC'
        ]);

        Conference::create([
            'name'  =>  'Sun Belt Conference',
            'nick'  =>  'Sun Belt'
        ]);

    }
}
