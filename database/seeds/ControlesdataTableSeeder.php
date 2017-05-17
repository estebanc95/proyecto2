<?php

use Illuminate\Database\Seeder;

class ControlesdataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('controles')->insert([
        [
            "modelo"=>"Movil1",
            "plataforma"=>"Android",
            "frecuencia"=>144,
            "imagen"=>"imagenes/receptores/mando2.png"
        ],
        [
            "modelo"=>"Sin Movil",
            "plataforma"=>"Tradicional",
            "frecuencia"=>24,
            "imagen"=>"imagenes/receptores/mando1.png"
        ],
        [
            "modelo"=>"Ipad3000",
            "plataforma"=>"Remoto con pantalla integrada",
            "frecuencia"=>24,
            "imagen"=>"imagenes/receptores/mando3.png"
        ],
        [
            "modelo"=>"Antena",
            "plataforma"=>"Tradicional",
            "frecuencia"=>24,
            "imagen"=>"imagenes/receptores/mando4.png"
        ]
     ]);
    }
}