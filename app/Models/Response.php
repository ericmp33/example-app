<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Response extends Model
{
    public function form(): BelongsTo
    {
        return $this->belongsTo(Form::class);
    }
}
