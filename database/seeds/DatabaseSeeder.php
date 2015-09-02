<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(ConferenceSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(SchoolSeeder::class);
        $this->call(GameSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(TicketSeeder::class);

        Model::reguard();
    }
}
