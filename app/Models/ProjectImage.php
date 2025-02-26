<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectImage extends Model
{
    protected $fillable = ['project_detail_id', 'image'];

    public function projectDetail()
    {
        return $this->belongsTo(ProjectDetail::class);
    }
}
