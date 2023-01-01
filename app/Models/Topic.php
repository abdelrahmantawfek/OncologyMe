<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;

    public $table = 'topics';
    
    public $fillable = [
        'title',
        'slug',
        'is_main',
        'is_parent',
        'parent_id',
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
        'is_parent' => 'boolean',
        'parent_name' => 'string',
        'parent_id' => 'integer',
        'is_main' => 'boolean',
        'meta_title' => 'string',
        'meta_desc' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required|string',
        'slug' => 'nullable',
        'is_parent' => 'boolean|required',
        'parent_id' => 'integer|nullable',
        'parent_name' => 'nullable',
        'is_main' => 'boolean|nullable',
        'meta_title' => 'string|nullable',
        'meta_desc' => 'string|nullable'
    ];


    public function posts()
    {
        return $this->belongsToMany(Post::class)->orderBy('created_at', 'DESC');
    }

}
