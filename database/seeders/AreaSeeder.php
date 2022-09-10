<?php

namespace Database\Seeders;
use App\Models\area;

use Illuminate\Database\Seeder;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
   {
       
     
    area::create(['id' => 1, 'nombre' => 'Administrativa y Financiera']);
    area::create(['id' => 2, 'nombre' => 'Ingeniería']);
    area::create(['id' => 3, 'nombre' => 'Desarrollo de Negocio']);
    area::create(['id' => 4, 'nombre' => 'Proyectos']);
    area::create(['id' => 5, 'nombre' => 'Servicios']);
    area::create(['id' => 6, 'nombre' => 'Calidad']);
     
       
        
    }
}
