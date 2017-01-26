<?php

use Illuminate\Database\Seeder;
use EduMart\AdminUser;

class AdminUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $user = new AdminUser();
        $user->name ="Peter Oladipo";
        $user->email ="Peter.solnet@gmail.com";
        $user->password=crypt("secret","");
        $user->save();
    }
}
