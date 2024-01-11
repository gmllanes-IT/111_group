<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(ServiceCategory::class, 'category_id');
    }

    public function relatedServices()
    {
        return $this->belongsToMany(Service::class, 'related_services', 'service_id', 'related_service_id');
    }
}
