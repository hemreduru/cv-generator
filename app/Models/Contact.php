<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Contact
 *
 * @property int $id
 * @property int $user_id
 * @property string|null $facebook
 * @property string|null $twitter
 * @property string|null $linkedin
 * @property string|null $github
 * @property string|null $phone
 * @property string|null $other_en
 * @property string|null $other_tr
 * @property-read string|null $other
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 *
 * Relationships:
 * @property \App\Models\User $user
 */

class Contact extends Model
{
    /** @use HasFactory<\Database\Factories\ContactFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id', 'facebook', 'twitter', 'linkedin', 'github', 'phone', 'other_en', 'other_tr'
    ];

    protected $appends = ['other'];

    /**
     * Get the user that owns the contact.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getOtherAttribute()
    {
        $lang = session('lang', 'en');
        $column = "other_{$lang}";

        return $this->$column ?? null;
    }

}
