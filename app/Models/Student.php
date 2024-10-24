<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Student extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = [];

    public function user():BelongsTo{
        return $this->belongsTo(User::class);
    }

    public function group():BelongsTo{
        return $this->belongsTo(Group::class);
    }
}
