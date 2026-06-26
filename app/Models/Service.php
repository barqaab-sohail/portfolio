<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['portfolio_id', 'name', 'icon', 'placement', 'status', 'intro'];

    /**
     * Portfolio profile that owns this service.
     */
    public function portfolio()
    {
        return $this->belongsTo(Portfolio::class);
    }
}
