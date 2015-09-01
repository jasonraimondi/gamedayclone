<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new \App\Role;

        $role->create([
            'name'  =>  'superadmin'
        ]);

        $role->create([
            'name'  =>  'user'
        ]);

    }
}
