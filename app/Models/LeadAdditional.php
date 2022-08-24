<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeadAdditional extends Model
{
    use HasFactory;

    /**
     * Get the lead that owns to the lead additional.
     */
    public function lead()
    {
        return $this->belongsTo(Lead::class);
    }
}
