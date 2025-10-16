<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Participant extends Model
{
    protected $fillable = ['name','email','event_id'];

    public function event(): BelongsTo
    {
        return $this->belongsTo(Event::class);
    }
}
