<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Designation extends Model
{
    use HasFactory;

    /**
     * Get the user details that owns the designation.
     */
    public function userDetails()
    {
        return $this->hasMany(UserDetail::class);
    }
}
