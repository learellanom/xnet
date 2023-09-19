<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('notas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('userId')->references('id')->on('users');
            $table->string('departamento');
            $table->string('descripcion');
            $table->string('clientePersona');
            $table->string('empresa');
            $table->string('telefonoContacto');
            $table->string('estado');
            $table->string('observaciones');
            $table->dateTime('fechaCrea')->nullable();
            $table->dateTime('fechaGuarda')->nullable();
            $table->dateTime('fechaElimina')->nullable();
            $table->dateTime('fechaReactiva')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notas');
    }
};
