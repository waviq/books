<?php

use Illuminate\Database\Seeder;

class UserRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id'            =>  1,
            'name'          =>  'Waviq subhi',
            'email'         =>  'waviq.subkhi@gmail.com',
            'username'      =>  'admin',
            'password'      =>  bcrypt('admin'),
        ]);

        DB::table('roles')->insert([
            'id'                =>  1,
            'name'              =>  'super_admin',
            'display_name'      =>  'Super Admin',
            'description'       =>  'CRUD User, CRUD Book',
        ]);
        DB::table('roles')->insert([
            'id'                =>  2,
            'name'              =>  'admin',
            'display_name'      =>  'Admin',
            'description'       =>  'CRUD Book',
        ]);
        DB::table('roles')->insert([
            'id'                =>  3,
            'name'              =>  'user',
            'display_name'      =>  'User',
            'description'       =>  'Create Book',
        ]);
        DB::table('role_user')->insert([
            'user_id'           =>  1,
            'role_id'           =>  1,
        ]);

    }
}
