<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Get the projects that owns the user.
     */
    public function projects()
    {
        return $this->hasMany(Project::class);
    }

    /**
     * Get the projects that owns the user.
     */
    public function userDetail()
    {
        return $this->hasOne(UserDetail::class);
    }

    /**
     * Get the leads that owns the user.
     */
    public function leads()
    {
        return $this->hasMany(Lead::class);
    }

    /**
     * Get the lead comments that owns the user.
     */
    public function leadComments()
    {
        return $this->hasMany(LeadComment::class);
    }

    /**
     * Get the project comments that owns the user.
     */
    public function projectComments()
    {
        return $this->hasMany(ProjectComment::class);
    }
}
