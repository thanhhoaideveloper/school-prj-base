<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SiteSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'logo',
        'favicon',
        'footer_logo',
        'email',
        'phone'
    ];
}
