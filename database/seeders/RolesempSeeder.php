<?php

namespace Database\Seeders;
use App\Models\rolesemp;

use Illuminate\Database\Seeder;

class RolesempSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        rolesemp::create(['id' => 1, 'nombre' => 'Desarrollador']);
        rolesemp::create(['id' => 2, 'nombre' => 'Analista']);
        rolesemp::create(['id' => 3, 'nombre' => 'Tester']);
        rolesemp::create(['id' => 4, 'nombre' => 'Diseñador']);
        rolesemp::create(['id' => 5, 'nombre' => 'Profesional PMO']);
        rolesemp::create(['id' => 6, 'nombre' => 'Profesional de servicios']);
        rolesemp::create(['id' => 7, 'nombre' => 'Auxiliar administrativo']);
        rolesemp::create(['id' => 8, 'nombre' => 'Codirector']);
    }
}
