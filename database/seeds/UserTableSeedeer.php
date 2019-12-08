<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'              => 'Mr. Admin',
            'email'             => 'admin@gmail.com',
            'mobile'            => '01744444444',
            'role_id'           => 1,
            'password'          => bcrypt('12345678'),
            'email_verified_at' => today(),
        ]);
    }
}
