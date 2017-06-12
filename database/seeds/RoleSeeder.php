<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role;
        $role->name = 'Student';
        $role->description = 'Student Clearance Eligibility';
        $role->save();

        $role = new Role;
        $role->name = 'CO';
        $role->description='Handles Clearance for Students';
        $role->save();

        $role= new Role;
        $role->name='SA';
        $role->description='Super Administrator';
        $role->save();
    }


}
