<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->delete();

        $users = array([
            'id' => 1,
            'fname' => 'Hasan',
            'lname' => 'Siddiqui',
            'email' => 'muhammadhasansiddiqui@gmail.com',
            'password'=> bcrypt('123456'),
            'phone' => '001234567890',
            'gender' => 'male',
            'profile_picture' => '',
            'dob' => '1991-10-10',
            'total_points' => 0
        ],
        [
            'id' => 2,
            'fname' => 'Asees',
            'lname' => 'Siddiqui',
            'email' => 'muhammadaseessiddiqui@gmail.com',
            'password'=> bcrypt('123456'),
            'phone' => '001234567890',
            'gender' => 'male',
            'profile_picture' => '',
            'dob' => '1993-12-28',
            'total_points' => 0
        ]);

        DB::table('users')->insert($users);
    }
}
