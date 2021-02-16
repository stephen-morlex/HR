<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    public $guarded = [];
    use HasFactory;
    /**
     * Get the parent documentable model
     */
    public function documentable()
    {
        return $this->morphTo();
    }
}
