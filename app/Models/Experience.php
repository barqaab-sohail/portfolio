<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $table = 'experiences';
    protected $fillable = ['firm', 'portfolio_id', 'position', 'duration', 'responsibility', 'placement', 'status'];

    /**
     * Portfolio profile that owns this experience entry.
     */
    public function portfolio()
    {
        return $this->belongsTo(Portfolio::class);
    }
}
