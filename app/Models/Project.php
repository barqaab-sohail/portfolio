<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['portfolio_id', 'project_category_id', 'short_name', 'image', 'project_intro', 'placement', 'status'];
}
