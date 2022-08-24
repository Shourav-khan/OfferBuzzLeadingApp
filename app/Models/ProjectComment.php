<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectComment extends Model
{
    use HasFactory;

    /**
     * Get the project that belongs to the project comment.
     */
    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    /**
     * Get the user that belongs to the project comment.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
