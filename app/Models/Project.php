<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['portfolio_id', 'project_category_id', 'short_name', 'image', 'project_intro', 'placement', 'status'];

    /**
     * First image used as the project card thumbnail.
     */
    public function projectImage()
    {
        return $this->hasOneThrough(ProjectImage::class, ProjectDetail::class);
    }

    /**
     * All gallery images attached through the project detail record.
     */
    public function projectImages()
    {
        return $this->hasManyThrough(ProjectImage::class, ProjectDetail::class);
    }

    /**
     * Category used by the portfolio filter controls.
     */
    public function projectCategory()
    {
        return $this->belongsTo(ProjectCategory::class);
    }

    /**
     * Extended information shown on the project detail page.
     */
    public function projectDetail()
    {
        return $this->hasOne(ProjectDetail::class);
    }
}
