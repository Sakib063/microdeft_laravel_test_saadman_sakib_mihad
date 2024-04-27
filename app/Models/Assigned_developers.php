<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assigned_developers extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'project_id',
    ];

    protected function projects():BelongsTo
    {
        return $this->belongsto(Projects::class);
    }
}
