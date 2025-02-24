<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $table = 'experiences';
    protected $fillable = ['firm', 'portfolio_id', 'position', 'duration', 'responsibility', 'placement', 'status'];
}
