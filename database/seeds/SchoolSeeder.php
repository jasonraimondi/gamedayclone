<?php

use Gameday\School;
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

        $theAmerican = [
            'University of Central Florida',
            'University of Cincinnati',
            'University of Connecticut',
            'East Carolina University',
            'University of Houston',
            'University of Memphis',
            'University of South Florida',
            'Southern Methodist University',
            'Temple University',
            'Tulane University',
            'University of Tulsa'
        ];

        $ACC = [
            'Boston College',
            'Clemson University',
            'Duke University',
            'Florida State University',
            'Georgia Institute of Technology',
            'North Carolina State University',
            'Syracuse University',
            'University of Louisville',
            'University of Miami',
            'University of North Carolina',
            'University of Notre Dame',
            'University of Pittsburg',
            'University of Virginia',
            'Virginia Polytechnic Institute',
            'Wake Forest University'
        ];

        $bigTen = [
            'University of Illinois at Urbana–Champaign',
            'Indiana University',
            'University of Iowa',
            'University of Maryland',
            'University of Michigan',
            'Michigan State University',
            'University of Minnesota',
            'University of Nebraska–Lincoln',
            'Northwestern University',
            'The Ohio State University',
            'Pennsylvania State University',
            'Purdue University',
            'Rutgers University',
            'University of Wisconsin–Madison'
        ];

        $bigTwelve = [
            'Baylor University',
            'Iowa State University',
            'University of Kansas',
            'Kansas State University',
            'University of Oklahoma',
            'Oklahoma State University',
            'University of Texas at Austin',
            'Texas Christian University',
            'Texas Tech University',
            'West Virginia University'
        ];

        $CUSA = [
            'University of Alabama at Birmingham',
            'Florida Atlantic University',
            'Florida International University',
            'Louisiana Tech University',
            'Marshall University',
            'Middle Tennessee State University',
            'University of North Carolina at Charlotte',
            'University of North Texas',
            'Old Dominion University',
            'Rice University',
            'University of Southern Mississippi',
            'University of Texas at El Paso',
            'University of Texas at San Antonio',
            'Western Kentucky University'
        ];

        $Ind = [
            'United States Military Academy',
            'United States Naval Academy',
            'University of Notre Dame',
            'Brigham Young University'
        ];

        $MAC = [
            'University of Akron',
            'Bowling Green State University',
            'The State University of New York at Buffalo',
            'Kent State University',
            'Miami University',
            'Ohio University',
            'Ball State University',
            'Central Michigan University',
            'Eastern Michigan University',
            'Northern Illinois University',
            'University of Toledo',
            'Western Michigan University'
        ];

        $MW = [
            'United States Air Force Academy',
            'Boise State University',
            'California State University, Fresno',
            'Colorado State University',
            'University of Nevada, Reno',
            'University of Nevada, Las Vegas',
            'University of New Mexico',
            'San Diego State University',
            'San Jose State University',
            'Utah State University',
            'University of Wyoming'
        ];

        $pacTwelve = [
            'University of Arizona',
            'Arizona State University',
            'University of California, Berkeley',
            'University of California, Los Angeles',
            'University of Colorado Boulder',
            'University of Oregon',
            'Oregon State University',
            'University of Southern California',
            'Stanford University',
            'University of Utah',
            'University of Washington',
            'Washington State University'
        ];

        $SEC = [
            'University of Florida',
            'University of Georgia',
            'University of Kentucky',
            'University of Missouri',
            'University of South Carolina',
            'University of Tennessee',
            'Vanderbilt University',
            'University of Alabama',
            'University of Arkansas',
            'Auburn University',
            'Louisiana State University',
            'University of Mississippi',
            'Mississippi State University',
            'Texas A&M University'
        ];

        $sunBelt = [
            'Appalachian State University',
            'Arkansas State University',
            'University of Arkansas at Little Rock',
            'Georgia Southern University',
            'Georgia State University',
            'University of Louisiana at Lafayette',
            'University of Louisiana at Monroe',
            'University of South Alabama',
            'Texas State University',
            'University of Texas at Arlington',
            'Troy University'
        ];

        foreach ($theAmerican as $school) {
            School::create([
                'conference_id' => 1,
                'name'          => $school
            ]);
        }

        foreach ($ACC as $school) {
            School::create([
                'conference_id' => 2,
                'name'          => $school
            ]);
        }


        foreach ($bigTen as $school) {
            School::create([
                'conference_id' => 3,
                'name'          => $school
            ]);
        }

        foreach ($bigTwelve as $school) {
            School::create([
                'conference_id' => 4,
                'name'          => $school
            ]);
        }

        foreach ($CUSA as $school) {
            School::create([
                'conference_id' => 5,
                'name'          => $school
            ]);
        }

        foreach ($Ind as $school) {
            School::create([
                'conference_id' => 6,
                'name'          => $school
            ]);
        }

        foreach ($MAC as $school) {
            School::create([
                'conference_id' => 7,
                'name'          => $school
            ]);
        }

        foreach ($MW as $school) {
            School::create([
                'conference_id' => 8,
                'name'          => $school
            ]);
        }

        foreach ($pacTwelve as $school) {
            School::create([
                'conference_id' => 9,
                'name'          => $school
            ]);
        }

        foreach ($SEC as $school) {
            School::create([
                'conference_id' => 10,
                'name'          => $school
            ]);
        }

        foreach ($sunBelt as $school) {
            School::create([
                'conference_id' => 11,
                'name'          => $school
            ]);
        }

    }
}
