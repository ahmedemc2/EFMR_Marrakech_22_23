<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    protected $fillable = ["nom"];

    public function eleves()
    {
        return $this->hasMany(Eleve::class);
    }
}
