<?php

use Illuminate\Database\Seeder;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $school = new \App\School;

        $school->create([
            'conference_id'   => 1,
            'name' => 'University of Florida'
        ]);

        $school->create([
            'conference_id'   => 1,
            'name' => 'University of Georgia'
        ]);

        $school->create([
            'conference_id'   => 1,
            'name' => 'University of Kentucky'
        ]);

        $school->create([
            'conference_id'   => 1,
            'name' => 'University of Missouri'
        ]);

        $school->create([
            'conference_id'   => 1,
            'name' => 'University of South Carolina'
        ]);

        $school->create([
            'conference_id'   => 1,
            'name' => 'University of Tennessee'
        ]);

        $school->create([
            'conference_id'   => 1,
            'name' => 'Vanderbilt University'
        ]);

        $school->create([
            'conference_id'   => 1,
            'name' => 'University of Alabama'
        ]);

        $school->create([
            'conference_id'   => 1,
            'name' => 'University of Arkansas'
        ]);

        $school->create([
            'conference_id'   => 1,
            'name' => 'Auburn University'
        ]);

        $school->create([
            'conference_id'   => 1,
            'name' => 'Louisiana State University'
        ]);

        $school->create([
            'conference_id'   => 1,
            'name' => 'University of Mississippi'
        ]);

        $school->create([
            'conference_id'   => 1,
            'name' => 'Mississippi State University'
        ]);

        $school->create([
            'conference_id'   => 1,
            'name' => 'Texas A&M University'
        ]);



        
        $school->create([
            'conference_id' => 2,
            'name' => 'Boston College'
        ]);

        $school->create([
            'conference_id' => 2,
            'name' => 'Clemson University'
        ]);

        $school->create([
            'conference_id' => 2,
            'name' => 'Duke University'
        ]);

        $school->create([
            'conference_id' => 2,
            'name' => 'Florida State University'
        ]);

        $school->create([
            'conference_id' => 2,
            'name' => 'Georgia Institute of Technology'
        ]);

        $school->create([
            'conference_id' => 2,
            'name' => 'North Carolina State University'
        ]);

        $school->create([
            'conference_id' => 2,
            'name' => 'Syracuse University'
        ]);

        $school->create([
            'conference_id' => 2,
            'name' => 'University of Louisville'
        ]);

        $school->create([
            'conference_id' => 2,
            'name' => 'University of Miami'
        ]);

        $school->create([
            'conference_id' => 2,
            'name' => 'University of North Carolina'
        ]);

        $school->create([
            'conference_id' => 2,
            'name' => 'University of Notre Dame'
        ]);

        $school->create([
            'conference_id' => 2,
            'name' => 'University of Pittsburg'
        ]);

        $school->create([
            'conference_id' => 2,
            'name' => 'University of Virginia'
        ]);

        $school->create([
            'conference_id' => 2,
            'name' => 'Virginia Polytechnic Institute'
        ]);

        $school->create([
            'conference_id' => 2,
            'name' => 'Wake Forest University'
        ]);


    }
}
