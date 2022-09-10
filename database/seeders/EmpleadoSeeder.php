<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\empleado;

class EmpleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        empleado::create(['id' => 1, 'nombre' => 'Pedro Pérez', 'email' => 'pperez@example.co', 'sexo' => 'Masculino', 'area_id' => 4, 'boletin' => 1, 'descripcion' => 'Hola mundo']);
        empleado::create(['id' => 2, 'nombre' => 'Amalia Bayona', 'email' => 'abayona@example.co', 'sexo' => 'Femenino', 'area_id' => 5, 'boletin' => 0, 'descripcion' => 'Para contactar a Amalia Bayona, puede escribir al correo electrónico abayona@example.co']);
    }
}
