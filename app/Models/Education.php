<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $table = 'educations';
    protected $fillable = ['degree_name', 'portfolio_id', 'duration', 'institution', 'education_intro', 'placement', 'status'];
}
