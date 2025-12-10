<?php

use App\Models\Curso;
use App\Models\PerfilTutor;
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
        Schema::create('curso_perfil_alumno', function (Blueprint $table) {
            $table->id();

            $table->foreignIdFor(PerfilTutor::class)
            ->constrained()
            ->onDelete('cascade');
            $table->foreignIdFor(Curso::class)
            ->constrained()
            ->onDelete('cascade');

            $table->unique(['perfil_tutor_id', 'curso_id']);

            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('curso_perfil_alumno');
    }
};
