<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ExperienceResponsible
 *
 * @property int $id
 * @property int $experience_id
 * @property string|null $comment_en
 * @property string|null $comment_tr
 * @property-read string|null $comment
 * @property int $order
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 *
 * Relationships:
 * @property \App\Models\Experience $experience
 */
class ExperienceResponsible extends Model
{
    /** @use HasFactory<\Database\Factories\ExperienceResponsibleFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'experience_id', 'comment_en', 'comment_tr', 'order'
    ];

    protected $appends = ['comment'];


    /**
     * Get the experience that owns this responsible record.
     */
    public function experience()
    {
        return $this->belongsTo(Experience::class);
    }

    public function getCommentAttribute()
    {
        $lang = session('lang', 'en');
        $column = "comment_{$lang}";
        return $this->$column ?? null;
    }
}
