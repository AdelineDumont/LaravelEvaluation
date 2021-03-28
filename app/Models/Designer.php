<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Designer extends Model
{
    public function name()
    {
        return $this->belongsTo(Name::class);
    }

}