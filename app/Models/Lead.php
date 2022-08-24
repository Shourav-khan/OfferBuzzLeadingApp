<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;

    /**
     * Get the lead comments that owns the lead.
     */
    public function leadComments()
    {
        return $this->hasMany(LeadComment::class);
    }

    /**
     * Get the lead additionals that owns the lead.
     */
    public function leadAdditionals()
    {
        return $this->hasMany(LeadAdditional::class);
    }

    /**
     * Get the user that owns the lead.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the project that owns the lead.
     */
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
