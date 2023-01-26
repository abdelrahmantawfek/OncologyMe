<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    use HasFactory;

    public $fillable = [
        'title',
        'slug',
        'excerpt',
        'content',
        'author',
        'meta_title',
        'meta_desc',
    ];

       /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'slug' => 'string',
        'excerpt' => 'string',
        'content' => 'string',
        'author' => 'string',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'author' => 'string',
        'title' => 'string',
        'slug' => 'nullable|unique:posts',
        'excerpt' => 'string',
        'content' => 'text',
    ];

    public function postmeta()
    {
        return $this->hasMany(Postmeta::class);
    }

    public function topics()
    {
        return $this->belongsToMany(Topic::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    

}
