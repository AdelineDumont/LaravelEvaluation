<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
  
    public function name()
    {
        return $this->belongsTo(Name::class);
    }

    public function designer()
    {
        return $this->belongsToMany(Name::class);
    }
}