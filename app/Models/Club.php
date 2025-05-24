<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    public function eleves()
    {
        return $this->hasMany(Eleve::class);
    }
}
