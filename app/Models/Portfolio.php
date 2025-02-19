<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $fillable = ['name', 'date_of_birth', 'phone', 'city', 'email', 'introduction'];
}
