<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Get the projects that owns the team.
     */
    public function projects()
    {
        return $this->belongsToMany(Project::class);
    }

    /**
     * Get the project details that owns the team.
     */
    public function projectDetails()
    {
        return $this->hasMany(ProjectDetail::class);
    }

    /**
     * Get the project details that owns the team.
     */
    public function projectTargets()
    {
        return $this->hasMany(ProjectTarget::class);
    }

    /**
     * Get the user details that owns the team.
     */
    public function userDetails()
    {
        return $this->hasMany(UserDetail::class);
    }

    /**
     * Get the territory that belongs to the team.
     */
    public function territory()
    {
        return $this->belongsTo(Territory::class);
    }
}
