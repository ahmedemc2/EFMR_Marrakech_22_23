<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Eleve extends Model
{
    protected $fillable = ['nom', 'prenom', 'club_id'];

    public function club()
    {
        return $this->belongsTo(Club::class);
    }

    public function activites()
    {
        return $this->belongsToMany(Activite::class);
    }
}
