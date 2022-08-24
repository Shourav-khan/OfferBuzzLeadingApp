<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeadComment extends Model
{
    use HasFactory;

    /**
     * Get the lead that owns to the lead comment.
     */
    public function lead()
    {
        return $this->belongsTo(Lead::class);
    }

    /**
     * Get the user that owns to the lead comment.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
