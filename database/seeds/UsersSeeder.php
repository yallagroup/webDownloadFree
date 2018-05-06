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
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('users')->truncate();
        User::create([
            'name'              => 'admin',
            'email'             => 'krinkel@gmail.com',
            'password'          => bcrypt('123456'),
            'role'              => 'admin',
            'is_root_admin'     => true,
            'remember_token'    => bcrypt('secret-key'),
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
