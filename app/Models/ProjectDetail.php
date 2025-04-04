<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectDetail extends Model
{
    protected $fillable = ['project_id', 'client', 'project_date', 'project_url', 'heading', 'introduction'];
}
