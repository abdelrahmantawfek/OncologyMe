<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    use HasFactory;

    protected $fillable = [
        'tagline',
        'about',
        'short_description',
        'location',
        'email',
        'phone',
        'map_link',
        'fb',
        'youtube',
        'linkedin',
        'feedback',
    ];

    public static $rules = [
        'tagline' => 'required',
        'about' => 'required',
        'short_description' => '',
        'location' => 'required',
        'email' => 'required|email',
        'phone' => 'required',
        'map_link' => 'required|url',
        'fb' => 'required|url',
        'youtube' => 'required|url',
        'linkedin' => 'required|url',
        'feedback' => 'required|url',
    ];

}
