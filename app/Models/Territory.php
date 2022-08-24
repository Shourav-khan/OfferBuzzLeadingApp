<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Territory extends Model
{
    use HasFactory;

    /**
     * Get the projects that belongs to the territory.
     */
    public function projects()
    {
        return $this->belongsToMany(Project::class);
    }

    /**
     * Get the project that belongs to the territory.
     */
    public function teams()
    {
        return $this->hasMany(Team::class);
    }
}
