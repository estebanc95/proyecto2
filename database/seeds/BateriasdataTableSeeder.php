<?php

use Illuminate\Database\Seeder;

class BateriasdataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('baterias')->insert([
            [
                "modelo"=>"SuperBateri1",
                "voltaje"=>128,
                "duracion"=>2,
                "tipo"=>"litio",
                "imagen"=>"imagenes/baterias/bateria1.png"
            ],
            [
                "modelo"=>"SuperBateri2",
                "voltaje"=>1400,
                "duracion"=>4,
                "tipo"=>"lipo",
                "imagen"=>"imagenes/baterias/bateria2.png"
            ],
            [
                "modelo"=>"SuperBateri3",
                "voltaje"=>110,
                "duracion"=>3,
                "tipo"=>"lipo",
                "imagen"=>"imagenes/baterias/bateria3.png"
            ],
            [
                "modelo"=>"SuperBateri4",
                "voltaje"=>220,
                "duracion"=>8,
                "tipo"=>"lipo",
                "imagen"=>"imagenes/baterias/bateria4.png"
            ],
            [
                "modelo"=>"Superbateri5",
                "voltaje"=>220,
                "duracion"=>6,
                "tipo"=>"litio",
                "imagen"=>"imagenes/baterias/bateria5.png"
            ]
        ]);
    }
}

