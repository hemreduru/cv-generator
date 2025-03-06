<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $two_factor_secret
 * @property string|null $two_factor_recovery_codes
 * @property \Illuminate\Support\Carbon|null $two_factor_confirmed_at
 * @property string|null $remember_token
 * @property int|null $current_team_id
 * @property string|null $profile_photo_path
 * @property int|null $role_id
 * @property string|null $gender
 * @property \Illuminate\Support\Carbon|null $birth_date
 * @property string|null $occupation
 * @property string|null $nationality
 * @property string|null $location
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 *
 * Relationships:
 * @property \App\Models\Role $role
 * @property \App\Models\Contact $contact
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\Education[] $educations
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\Experience[] $experiences
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\Skill[] $skills
 */

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, SoftDeletes;

    protected $fillable = [
        'name', 'email', 'password',
        'two_factor_secret', 'two_factor_recovery_codes', 'two_factor_confirmed_at',
        'current_team_id', 'profile_photo_path', 'role_id', 'gender', 'birth_date', 'occupation', 'nationality', 'location'
    ];

    protected $hidden = [
        'password', 'remember_token', 'two_factor_secret', 'two_factor_recovery_codes',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'two_factor_confirmed_at' => 'datetime',
        'birth_date' => 'date',
    ];


    /**
     * Role relationship.
     */
    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    /**
     * Contact relationship (one-to-one).
     */
    public function contact()
    {
        return $this->hasOne(Contact::class);
    }

    /**
     * Educations relationship (one-to-many).
     */
    public function educations()
    {
        return $this->hasMany(Education::class);
    }

    /**
     * Experiences relationship (one-to-many).
     */
    public function experiences()
    {
        return $this->hasMany(Experience::class);
    }

    /**
     * Skills relationship (one-to-many).
     */
    public function skills()
    {
        return $this->hasMany(Skill::class);
    }
}
