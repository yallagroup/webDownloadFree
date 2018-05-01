<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        User::create([
            'name'              => 'admin',
            'email'             => 'krinkel@gmail.com',
            'password'          => bcrypt('123456'),
            'role'              => 'admin',
            'is_root_admin'     => true,
            'remember_token'    => bcrypt('secret-key'),
        ]);

    }
}
