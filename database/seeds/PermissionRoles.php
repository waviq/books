<?php

use Illuminate\Database\Seeder;

class PermissionRoles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            'id'                =>  1,
            'name'              =>  'crud_user',
            'display_name'      =>  'CRUD User',
            'description'       =>  'can CRUD User',
        ]);
        DB::table('permissions')->insert([
            'id'                =>  2,
            'name'              =>  'crud_book',
            'display_name'      =>  'CRUD Book',
            'description'       =>  'can CRUD Book',
        ]);
        DB::table('permissions')->insert([
            'id'                =>  3,
            'name'              =>  'create_book',
            'display_name'      =>  'Create Book',
            'description'       =>  'can Create Book',
        ]);

        DB::table('permission_role')->insert([
            'permission_id'     =>  1,
            'role_id'           =>  1,
        ]);
        DB::table('permission_role')->insert([
            'permission_id'     =>  2,
            'role_id'           =>  1,
        ]);
        DB::table('permission_role')->insert([
            'permission_id'     =>  2,
            'role_id'           =>  2,
        ]);
        DB::table('permission_role')->insert([
            'permission_id'     =>  3,
            'role_id'           =>  1,
        ]);
        DB::table('permission_role')->insert([
            'permission_id'     =>  3,
            'role_id'           =>  3,
        ]);
    }
}
