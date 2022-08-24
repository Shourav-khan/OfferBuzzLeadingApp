<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Get the companies that owns the project.
     */
    public function companies()
    {
        return $this->belongsToMany(Company::class);
    }

    /**
     * Get the teams that owns the project.
     */
    public function teams()
    {
        return $this->belongsToMany(Team::class);
    }

    /**
     * Get the territories that owns the project.
     */
    public function territories()
    {
        return $this->belongsToMany(Territory::class);
    }

    /**
     * Get the project comments that owns the project.
     */
    public function projectComments()
    {
        return $this->hasMany(ProjectComment::class);
    }

    /**
     * Get the user that owns the project.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the project details that owns the project.
     */
    public function projectDetails()
    {
        return $this->hasMany(ProjectDetail::class);
    }

    /**
     * Get the project targets that owns the project.
     */
    public function projectTargets()
    {
        return $this->hasMany(ProjectTarget::class);
    }

    /**
     * Get the leads that owns the project.
     */
    public function leads()
    {
        return $this->hasMany(Lead::class);
    }
}
