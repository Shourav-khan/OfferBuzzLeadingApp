<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    use HasFactory;

    /**
     * Get the companies for the business.
     */
    public function companies()
    {
        return $this->belongsToMany(Company::class);
    }
}
