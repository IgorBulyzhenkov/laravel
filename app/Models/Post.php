<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    protected $attributes = [

    ];

//    public function rubric(): BelongsTo
//    {
//        return $this->belongsTo(Rubric::class);
//    }

    public function rubric(): BelongsTo
    {
        return $this->belongsTo(Rubric::class);
    }
}
