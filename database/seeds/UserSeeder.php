<?php

use Gameday\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'role_id'        => 1,
            'school_id'      => 1,
            'first'          => 'Super',
            'last'           => 'Admin',
            'phone'          => '(555) 867-5309',
            'email'          => 'admin@admin.com',
            'paypal'         => 'admin@admin.com',
            'password'       => bcrypt('admin'),
            'verified'       => 1,
            'remember_token' => str_random(10),
        ]);

        User::create([
            'role_id'        => 2,
            'school_id'      => 104,
            'first'          => 'Jason',
            'last'           => 'Raimondi',
            'phone'          => '(954) 703-0436',
            'email'          => 'jason@raimondi.us',
            'paypal'         => 'jason@raimondi.us',
            'password'       => bcrypt('jason'),
            'verified'       => 1,
            'remember_token' => str_random(10),
        ]);

        factory(User::class, 1000)->create();

    }
}
