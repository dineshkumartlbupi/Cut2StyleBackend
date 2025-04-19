<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ServiceCategory;

class Service extends Model
{
    // Add 'image' to fillable for mass assignment
    protected $fillable = [
        'category_id',
        'name',
        'description',
        'price',
        'image'
    ];

    // Define relationship to service category
    public function category()
    {
        return $this->belongsTo(ServiceCategory::class, 'category_id');
    }
}
