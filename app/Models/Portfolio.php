<?php

namespace App\Models;

use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $fillable = ['name', 'date_of_birth', 'phone', 'city', 'email', 'introduction'];

    public function age()
    {
        return Carbon::parse($this->attributes['date_of_birth'])->age;
    }
}
