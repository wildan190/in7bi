<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_name',
        'subtitle',
        'description',
        'service_category_id',
    ];

    // Relasi ke ServiceCategory
    public function category()
    {
        return $this->belongsTo(ServiceCategory::class, 'service_category_id');
    }
}
