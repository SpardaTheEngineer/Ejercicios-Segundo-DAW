<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerfilAlumno extends Model
{
    /** @use HasFactory<\Database\Factories\PerfilAlumnoFactory> */
    use HasFactory;

    public function perfilTutor() {
        return $this->belongsTo(PerfilTutor::class);
    }

    public function alumnos() {
        return $this->belongsToMany(PerfilAlumno::class);
    }

}
