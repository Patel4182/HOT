<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'admin',

            'email'=>'organtransplant1@gmail.com',

            'password'=>bcrypt('hot'),

            'role'=>'1'
]);
    }
}
