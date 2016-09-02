<?php

use Illuminate\Database\Seeder;

use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->user = 'admin';
        $user->name = 'Félix';
        $user->address = 'Reu';
        $user->phone = '54527899';
        $user->email = 'pfmata01@gmail.com';
        $user->password = '12345678';
        $user->id_user_type = 1;
        $user->save();

        $user = new User;
        $user->user = 'default';
        $user->name = 'Pepe';
        $user->address = 'Reu';
        $user->phone = '54527899';
        $user->email = 'pepe01@gmail.com';
        $user->password = '12345678';
        $user->id_user_type = 2;
        $user->save();
    }
}
