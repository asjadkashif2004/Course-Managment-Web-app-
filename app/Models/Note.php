<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Note extends Model
{
    protected $fillable = ['user_id', 'title', 'content'];

    // Relation: Note belongs to a user
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
