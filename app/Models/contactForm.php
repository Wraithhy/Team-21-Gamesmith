<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contactForm extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'phone', 'email', 'cEmail', 'contactPref', 'message'];

}