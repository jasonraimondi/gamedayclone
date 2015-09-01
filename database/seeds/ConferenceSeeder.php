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
            'name'  =>  'SEC'
        ]);

        $conference->create([
            'name'  =>  'ACC'
        ]);

    }
}
