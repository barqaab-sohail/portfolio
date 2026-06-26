<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    // Contact form submissions are stored in the legacy singular table name.
    protected $table = 'contact_us';

    protected $fillable = ['name', 'email', 'subject', 'message'];
}
