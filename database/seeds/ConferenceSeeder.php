<?php

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
        $conference = new \App\Conference;

        $conference->create([
            'name'  =>  'American Athletic Conference',
            'nick'  =>  'The American'
        ]);

        $conference->create([
            'name'  =>  'Atlantic Coast Conference',
            'nick'  =>  'ACC'
        ]);

        $conference->create([
            'name'  =>  'Big Ten Conference',
            'nick'  =>  'Big Ten'
        ]);

        $conference->create([
            'name'  =>  'Big 12 Conference',
            'nick'  =>  'Big 12'
        ]);

        $conference->create([
            'name'  =>  'Conference USA',
            'nick'  =>  'C-USA'
        ]);

        $conference->create([
            'name'  =>  'Division I FBS Independents',
            'nick'  =>  'Ind.'
        ]);

        $conference->create([
            'name'  =>  'Mid-American Conference',
            'nick'  =>  'MAC'
        ]);

        $conference->create([
            'name'  =>  'Mountain West Conference',
            'nick'  =>  'MW'
        ]);

        $conference->create([
            'name'  =>  'Pacific-12 Conference',
            'nick'  =>  'Pac-12'
        ]);

        $conference->create([
            'name'  =>  'Southeastern Conference',
            'nick'  =>  'SEC'
        ]);

        $conference->create([
            'name'  =>  'Sun Belt Conference',
            'nick'  =>  'Sun Belt'
        ]);

    }
}
