<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price',
        'category_id',
        'image_url', // Corrected field name
        'user_id', // Add this
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
