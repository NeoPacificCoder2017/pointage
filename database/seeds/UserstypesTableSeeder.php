<?php

use Illuminate\Database\Seeder;
use App\Userstype;
class UserstypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userstypes = [
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

        foreach($userstypes as $usertype):
            Userstype::create($usertype);
        endforeach;
    }
}
