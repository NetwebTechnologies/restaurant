<?php

namespace Netweb\CommonServices\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ServiceImages extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'service_type',
        'service_id',
        'image',
        'path',
    ];

    public function getImageUrlAttribute() {
        return asset('storage/uploads/'.$this->path.'/'.$this->image);
    }
}
