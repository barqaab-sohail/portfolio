<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Expert extends Model
{
    protected $fillable = ['name', 'portfolio_id', 'placement', 'status'];

    /**
     * Portfolio profile that owns this typed hero expertise label.
     */
    public function portfolio()
    {
        return $this->belongsTo(Portfolio::class);
    }
}
