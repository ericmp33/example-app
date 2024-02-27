<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Form extends Model
{
    public function responses(): HasMany
    {
        return $this->hasMany(Response::class);
    }
}
