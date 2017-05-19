<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(BateriasdataTableSeeder::class);
        $this->call(CamarasdataTableSeeder::class);
        $this->call(ControlesdataTableSeeder::class);
        $this->call(GpsdataTableSeeder::class);
        $this->call(MarcosdataTableSeeder::class);
        $this->call(MotoresdataTableSeeder::class);
        $this->call(UsersdataTableSeeder::class);
        $this->call(PrecargadosTableSeeder::class);
    }
}
