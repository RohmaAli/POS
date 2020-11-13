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
        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
        // Output: 54esmdr0qf
        $password = substr(str_shuffle($permitted_chars), 0, 6);
        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@pos.com',
            'password' => bcrypt('password')
        ]);
        $user->assignRole('super_admin');
    }
}
