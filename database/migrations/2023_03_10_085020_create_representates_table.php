<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('representates', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('alumno_id')->constrained('alumnos')->onUpdate('cascade')->onDelete('cascade');
            $table->string('nombre_madre')->nullable();
            $table->string('rut_madre')->nullable();
            $table->string('telefono_madre')->nullable();
            $table->string('escolaridad_madre')->nullable();
            $table->string('nombre_padre')->nullable();
            $table->string('rut_padre')->nullable();
            $table->string('telefono_padre')->nullable();
            $table->string('escolaridad_padre')->nullable();
            $table->string('nombre_apoderado')->nullable();
            $table->string('rut_apoderado')->nullable();
            $table->string('telefono_casa_apoderado')->nullable();
            $table->string('telefono_trabajo_apoderado')->nullable();
            $table->string('correo_apoderado')->nullable();
            $table->string('vive_con')->nullable();
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
        Schema::dropIfExists('representates');
    }
};
