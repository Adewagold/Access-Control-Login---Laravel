<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_student = Role::where('name','Student')->first();
        $role_CO = Role::where('name','CO')->first();
        $role_SA= Role::where('name','SA')->first();

        $user = new User;
        $user->name = 'Adewale Adeleye';
        $user->email='adewagold@gmail.com';
        $user->password = bcrypt('Adewale');
        $user->save();
        $user->roles()->attach($role_student);

        $user = new User;
        $user->name = 'Adewuyi Simeon';
        $user->email='simeonlead@gmail.com';
        $user->password = bcrypt('simeon');
        $user->save();
        $user->roles()->attach($role_CO);

        $user = new User;
        $user->name = 'Alagboofe Jumokey';
        $user->email='jummy@gmail.com';
        $user->password = bcrypt('jummy');
        $user->save();
        $user->roles()->attach($role_SA);
    }
}
