<?php

use Illuminate\Database\Seeder;
use App\Role;
class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'name'=>'Admin',
            ],
            [
                'name'=>'Moderator',
            ],
            [
                'name'=>'Public',
            ],
            [
                'name'=>'Supervisor',
            ],
        ];

        foreach($roles as $role):
            Role::create($role);
        endforeach;
    }
}
