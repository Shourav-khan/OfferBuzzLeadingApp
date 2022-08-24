<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    use HasFactory;

    /**
     * Get the designation that belongs to the user detail.
     */
    public function designation()
    {
        return $this->belongsTo(Designation::class);
    }

    /**
     * Get the user that belongs to the user detail.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the user that belongs to the team.
     */
    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
