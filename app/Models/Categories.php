<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $fillable = ["content"];

    // public function post(): BelongsTo
    // {
    //     return $this->belongsTo(Post::class);
    // }
}
