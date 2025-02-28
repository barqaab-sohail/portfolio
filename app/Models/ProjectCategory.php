<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectCategory extends Model
{
    public $timestamps = false;

    protected $fillable = ['name',];

    public function project()
    {
        return $this->hasOne(Project::class);
    }
}
