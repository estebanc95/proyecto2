<?php

use Illuminate\Database\Seeder;

class MotoresdataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('motores')->insert([

            [
                "modelo"=>"XYZ12",
                "revoluciones"=>"1400",
                "voltaje"=>"128",
                "imagen"=>"imagenes/motores/motor1.png"
            ],
            [
                "modelo"=>"RX7",
                "revoluciones"=>1100,
                "voltaje"=>90,
                "imagen"=>"imagenes/motores/motor2.png"
            ],
            [

                "modelo"=>"JF12",
                "revoluciones"=>800,
                "voltaje"=>60,
                "imagen"=>"imagenes/motores/motor3.png"
            ],
            [
                "modelo"=>"R200",
                "revoluciones"=>2600,
                "voltaje"=>80,
                "imagen"=>"imagenes/motores/motor4.png"
            ],
            [

                "modelo"=>"YZ150",
                "revoluciones"=>1500,
                "voltaje"=>35,
                "imagen"=>"imagenes/motores/motor5.png"
            ]
        ]);
    }
}
