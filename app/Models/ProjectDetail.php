<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectDetail extends Model
{
    protected $fillable = ['project_id', 'client', 'project_date', 'project_url', 'heading', 'introduction'];

    /**
     * Parent project for this detailed case-study content.
     */
    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    /**
     * Gallery images displayed on the project detail page.
     */
    public function projectImages()
    {
        return $this->hasMany(ProjectImage::class);
    }
}
