<?php

use Illuminate\Database\Seeder;
use Basico\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $user = new User();
        $user->name = 'Carlos Alberto';
        $user->email = 'carlos@gmail.com';
        $user->password = bcrypt(123456);
        $user->save();

        factory(User::class, 20)->create();

    }
}
