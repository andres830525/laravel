<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\empleado;
use App\Models\rolesemp;

class CreateEmpleadoRolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleado_rols', function (Blueprint $table) {
            $table->foreignIdFor(empleado::class);
            $table->foreignIdFor(rolesemp::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleado_rols');
    }
}
