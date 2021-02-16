<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Policy extends Model
{

    public $fillable = ['name', 'description', 'branch_id', 'attachment'];
    use HasFactory, HasSlug;

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }
    public static function search($query)
    {
        return empty($query) ? static::query()
            : static::where('name', 'like', '%' . $query . '%')->with('branch');
    }

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

    /**
     * Get all of the post's comments.
     */
    public function document()
    {
        return $this->morphOne(Document::class, 'documentable');
    }
}
