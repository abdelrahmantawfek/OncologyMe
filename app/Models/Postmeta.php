<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postmeta extends Model
{
    use HasFactory;
    
    public $fillable = [
        'post_id',
        'meta_key',
        'meta_value',
    ];

    public function posts()
    {
        return $this->belongsTo(Post::class);
    }
}
