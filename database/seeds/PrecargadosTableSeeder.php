<?php

use Illuminate\Database\Seeder;

class PrecargadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('precargados')->insert([

            [
                "id_motor"=>"2",
                "id_marco"=>"4",
                "id_control"=>"1",
                "id_bateria"=>"1",
                "id_camara"=>"2",
                "id_gps"=>"2",
            ],

            [
                "id_motor"=>"1",
                "id_marco"=>"3",
                "id_control"=>"3",
                "id_bateria"=>"2",
                "id_camara"=>"1",
                "id_gps"=>"2",
            ]

        ]);

    }
}
