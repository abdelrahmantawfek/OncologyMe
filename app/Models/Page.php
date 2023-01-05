<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Page extends Model
{
    use HasFactory;

    public $table = 'pages';

    public $fillable = [
        'name',
        'slug',
        'page_title',
        'content',
        'meta_title',
        'meta_desc',
        // 'banner_title',
        // 'banner_desc',
        // 'banner_img',
        // 'url',
        'is_main',
        'status'
    ];

    /**
     * Get all of the sections for the Page
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sections(): HasMany
    {
        return $this->hasMany(Section::class);
    }
}
