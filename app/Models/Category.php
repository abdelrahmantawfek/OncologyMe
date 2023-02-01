<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'slug',
        'is_main',
        // 'is_parent',
        // 'parent_id',
        'meta_title',
        'meta_desc',
        'post_type',
        'featured_image',
    ];

   /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */

    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
    ];

     /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'slug' => 'nullable|unique:categories',
        'featured_image' => 'nullable',
        'is_main' => 'integer',
        'meta_title' => 'nullable',
        'slug' => 'nullable',
        'meta_desc' => 'nullable',
        'post_type' => 'nullable',
    ];

    public function posts()
    {
        return $this->belongsToMany(Post::class)->orderBy('title');
    }
}
