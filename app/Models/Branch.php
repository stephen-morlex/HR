<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Branch extends Model
{
    protected $fillable = ['name', 'slug'];
    use HasFactory;
    use HasSlug;
    //  Search helper method

    public static function search($query)
    {
        return empty($query) ? static::query()
            : static::where('name', 'like', '%' . $query . '%');
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
    public function departments()
    {
        return $this->hasMany(Department::class);
    }
    public function policies()
    {
        return $this->hasMany(Policy::class);
    }
    public function employees()
    {
        return $this->hasMany(Employee::class);
    }


    /** Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
