<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'place',
        'url',
        'desktop_img',
        'mob_img',
    ];

    protected $casts = [
      
    ];

    public static $rules = [
        'title' => 'required',
        'place' => 'required',
        'url' => 'required',
        'desktop_img' => 'required',
        'mob_img' => 'required',
    ];
}
