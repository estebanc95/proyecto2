<?php

use Illuminate\Database\Seeder;

class ModelosalmacenadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('modelos_almacenados')->insert([

            [
                'id_usuario'=>'1',
                'nombre'=>'test',
                'id_motor'=>'2',
                'id_marco'=>'3',
                'id_control'=>'2',
                'id_bateria'=>'2',
                'id_camara'=>'2',
                'id_gps'=>'2'
            ]

        ]);
    }
}
