<?php

use Illuminate\Database\Seeder;

class UsersdataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                "name"=>"homero",
                "email"=>"homerosimpsons@springfield.com",
                "password"=>bcrypt('simpsons'),
            ],
            [
            "name"=>"bart",
            "email"=>"bartsimpsons@springfield.com",
            "password"=>bcrypt('simpsons'),
        ],
            [
            "name"=>"lisa",
            "email"=>"lisasimpsons@springfield.com",
            "password"=>bcrypt('simpsons'),
        ]
        ]);
    }
}
