<?php

use Illuminate\Database\Seeder;

class GpsdataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    DB::table('gps')->insert([
        [
            "nombre"=>"Garmin",
            "modelo"=>"Nuvi A12",
            "imagen"=>"imagenes/gps/gps1.png"
        ],
        [
            "nombre"=>"Buscador",
            "modelo"=>"Tomtan R12",
            "imagen"=>"imagenes/gps/gps2.png"
        ],
        [
            "nombre"=>"Navigator",
            "modelo"=>"Nuvi S10",
            "imagen"=>"imagenes/gps/gps3.png"
        ]
    ]);
    }
}

