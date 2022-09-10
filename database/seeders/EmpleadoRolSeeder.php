<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\empleado_rol;


class EmpleadoRolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        empleado_rol::create(['empleado_id' => 1, 'rolesemp_id' => 4]);
        empleado_rol::create(['empleado_id' => 2, 'rolesemp_id' => 2]);
        empleado_rol::create(['empleado_id' => 1, 'rolesemp_id' => 5]);
        empleado_rol::create(['empleado_id' => 2, 'rolesemp_id' => 3]);
        
    }
}
