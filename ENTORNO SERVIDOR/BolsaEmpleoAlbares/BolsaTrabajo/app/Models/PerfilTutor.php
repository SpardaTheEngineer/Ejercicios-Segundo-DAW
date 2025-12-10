<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerfilTutor extends Model
{
    /** @use HasFactory<\Database\Factories\PerfilTutorFactory> */
    use HasFactory;

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function curso() {
        return $this->belongsTo(PerfilTutor::class);
    }


}
