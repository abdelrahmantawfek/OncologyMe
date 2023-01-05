<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Section extends Model
{
    use HasFactory;

    public $fillable = [
        'page_id',
        'content',
        'layout',
    ];


    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */

    protected $casts = [
        'page_id' => 'integer',
        // 'content' => 'text',
    ];

    /**
     * Validation rules
     *
     * @var array
     */

    public static $rules = [
        'content' => 'required',
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    public function page(): BelongsTo
    {
        return $this->belongsTo(Page::class);
    }

    public function images(): HasMany
    {
        return $this->hasMany(SectionImage::class);
    }
}
