<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectDetail extends Model
{
    use HasFactory;

    /**
     * Get the project that owns the project detail.
     */
    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    /**
     * Get the team that owns the project detail.
     */
    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
