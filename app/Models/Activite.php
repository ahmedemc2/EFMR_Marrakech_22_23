<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activite extends Model
{
    public function eleves()
    {
        return $this->belongsToMany(Eleve::class);
    }
}
