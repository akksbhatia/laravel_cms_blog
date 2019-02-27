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
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        //reset users table
        DB::table('users')->truncate();

        //create fake users
        DB::table('users')->insert([
           [
               'name' => "Akshay Bhatia",
               'email' => "akksbhatia@gmail.com",
               'password' => bcrypt('secret')
           ],
            [
                'name' => "Amit",
                'email' => "amit@gmail.com",
                'password' => bcrypt('secret')
            ],
            [
                'name' => "Akash",
                'email' => "akash@gmail.com",
                'password' => bcrypt('secret')
            ],



        ]);

    }
}
