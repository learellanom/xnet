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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum('departamento', ['Atencion al Cliente', 'Recursos Humanos', 'Comercial','Limpieza','Planta de Reciclaje'])->nullable()->default('Atencion al CLiente');
            $table->enum('rol', ['Jefe', 'Responsable de Equipo', 'Empleado'])->nullable()->default('Empleado');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
