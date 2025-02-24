<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    protected $table = 'trainings';
    protected $fillable = ['name', 'portfolio_id', 'duration', 'institution', 'introduction', 'placement', 'status'];
}
