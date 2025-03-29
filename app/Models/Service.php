<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['portfolio_id', 'name', 'icon', 'placement', 'status', 'intro'];
}