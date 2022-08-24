<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Get the businesses that owns the company.
     */
    public function businesses()
    {
        return $this->belongsToMany(Business::class);
    }

    /**
     * Get the projects that owns the company.
     */
    public function projects()
    {
        return $this->belongsToMany(Project::class);
    }
}
