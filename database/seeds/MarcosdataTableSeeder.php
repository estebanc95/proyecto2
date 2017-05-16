<?php

use Illuminate\Database\Seeder;

class MarcosdataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('marcos')->insert([
            [
                "modelo"=>"X1",
                "marca"=>"Serie X",
                "color"=>"rojo",
                "material"=>"fibra de carbono",
                "numeroHelices"=>4,
                "imagen"=>"imagenes/marcos/marco1.png"
            ],
            [
                "modelo"=>"X2",
                "marca"=>"Serie X",
                "color"=>"rojo",
                "material"=>"fibra de carbono",
                "numeroHelices"=>4,
                "imagen"=>"imagenes/marcos/marco2.png"
            ],
            [
                "modelo"=>"X3",
                "marca"=>"Serie X",
                "color"=>"negro",
                "material"=>"Plastico",
                "numeroHelices"=>3,
                "imagen"=>"imagenes/marcos/marco3.png"
            ],
            [
                "modelo"=>"X4",
                "marca"=>"Serie X",
                "color"=>"blanco",
                "material"=>"Aluminio",
                "numeroHelices"=>6,
                "imagen"=>"imagenes/marcos/marco4.png"
            ],
            [
                "modelo"=>"Y3",
                "marca"=>"Serie Y",
                "color"=>"azul",
                "material"=>"plastico",
                "numeroHelices"=>6,
                "imagen"=>"imagenes/marcos/marco5.png"
            ]
        ]);
    }
}
