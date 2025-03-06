<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Skill
 *
 * @property int $id
 * @property int $user_id
 * @property string $skill
 * @property string|null $level
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 *
 * Relationships:
 * @property \App\Models\User $user
 */
class Skill extends Model
{
    /** @use HasFactory<\Database\Factories\SkillFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id', 'skill', 'level'
    ];

    /**
     * Get the user that owns this skill.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
