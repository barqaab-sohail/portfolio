<?php

namespace App\Models;

use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $fillable = [
        'name',
        'job_title',
        'date_of_birth',
        'phone',
        'city',
        'email',
        'introduction',
        'picture',
        'web',
        'degree',
        'freelance_status',
        'banner',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'linkedin_url',
        'github_url',
        'facebook_url',
        'instagram_url',
        'whatsapp_url',
    ];

    /**
     * Calculate the displayed age from the stored birth date.
     */
    public function age()
    {
        if (empty($this->attributes['date_of_birth'])) {
            return null;
        }

        return Carbon::parse($this->attributes['date_of_birth'])->age;
    }
}
