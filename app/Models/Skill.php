<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $fillable = ['portfolio_id', 'skill_name', 'level', 'remarks', 'placement', 'status'];
}
