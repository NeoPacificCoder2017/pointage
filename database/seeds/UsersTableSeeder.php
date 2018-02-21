<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'first_name' => 'Administrator',
                'last_name' => 'First',
                'birthday_date' => '20/01/1995',
                'email' => 'administrator@hotmail.com',
                'qr_code_token' => 'https://upload.wikimedia.org/wikipedia/commons/7/78/Qrcode_wikipedia_fr_v2clean.png',
                'card_picture' => 'http://www.littlehearts.ind.in/wp-content/themes/lhs/Birthday/images/adm.png',
                'profile_picture' =>'http://www.littlehearts.ind.in/wp-content/themes/lhs/Birthday/images/adm.png',
                'phone_number' => '87272727',
                'users_type_id' => 1,
                'password' => bcrypt('administrator'),
            ],
            [
                'first_name' => 'Moderator',
                'last_name' => 'First',
                'birthday_date' => '20/01/1995',
                'email' => 'moderator@hotmail.com',
                'qr_code_token' => 'https://upload.wikimedia.org/wikipedia/commons/7/78/Qrcode_wikipedia_fr_v2clean.png',
                'card_picture' => 'http://www.littlehearts.ind.in/wp-content/themes/lhs/Birthday/images/adm.png',
                'profile_picture' =>'http://www.littlehearts.ind.in/wp-content/themes/lhs/Birthday/images/adm.png',
                'phone_number' => '87272727',
                'users_type_id' => 2,
                'password' => bcrypt('moderator'),
            ],
            [
                'first_name' => 'Public',
                'last_name' => 'First',
                'birthday_date' => '20/01/1995',
                'email' => 'public@hotmail.com',
                'qr_code_token' => 'https://upload.wikimedia.org/wikipedia/commons/7/78/Qrcode_wikipedia_fr_v2clean.png',
                'card_picture' => 'http://sguru.org/wp-content/uploads/2017/06/cool-anonymous-profile-pictures-1699946_orig.jpg',
                'profile_picture' =>'http://sguru.org/wp-content/uploads/2017/06/cool-anonymous-profile-pictures-1699946_orig.jpg',
                'phone_number' => '87272727',
                'users_type_id' => 3,
                'password' => bcrypt('public'),
            ],
            [
                'first_name' => 'Supervisor',
                'last_name' => 'First',
                'birthday_date' => '20/01/1995',
                'email' => 'supervisor@hotmail.com',
                'qr_code_token' => 'https://upload.wikimedia.org/wikipedia/commons/7/78/Qrcode_wikipedia_fr_v2clean.png',
                'card_picture' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQd_nySYgvYJrWrRbDDBoo1izr89qHXzS_GujLRyi2JcrDv3QVmrQ',
                'profile_picture' =>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQd_nySYgvYJrWrRbDDBoo1izr89qHXzS_GujLRyi2JcrDv3QVmrQ',
                'phone_number' => '87272727',
                'users_type_id' => 3,
                'password' => bcrypt('supervisor'),
            ],
        ];

        foreach($users as $user):
            User::create($user);
        endforeach;
    
    }
}
