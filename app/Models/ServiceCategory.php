<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Service;

class ServiceCategory extends Model
{
    // Add 'description' and 'image' if needed for future enhancements
    protected $fillable = [
        'name',
        'description', // optional
        'image'        // optional
    ];

    // One category has many services
    public function services()
    {
        return $this->hasMany(Service::class, 'category_id');
    }
}
