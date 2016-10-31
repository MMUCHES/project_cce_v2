<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new \App\Role();
        $admin->name         = 'admin';
        $admin->display_name = 'User Administrator'; // optional
        $admin->description  = 'User is allowed to manage and edit other users'; // optional
        $admin->save();


        $userAdmin = new \App\User();
        $userAdmin->name = "Administrator User";
        $userAdmin->email = "admin@test.dev";
        $userAdmin->username = "admin";
        $userAdmin->password = \Hash::make("admin");

        $userAdmin->save();

        $userAdmin->roles()->attach($admin->id); // id only

    }
}
