<?php

use Illuminate\Database\Seeder;

class CamarasdataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('camaras')->insert([
            [
                "modelo"=>"ASD25",
                "marca"=>"Nikon",
                "megapixeles"=>300,
                "imagen"=>"imagenes/camaras/sony.png"
            ],
            [
                "modelo"=>"Hero 5",
                "marca"=>"GoPro",
                "megapixeles"=>1080,
                "imagen"=>"imagenes/camaras/gopro.png"
            ]   
        ]);
    }
}

