<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
        'name',
        'slug-room',
        'price',
        'description',
        'image_path'
    ];

    public function facility() {
        return $this->belongsToMany(
            Facility::class,
            'room_facilities',
            'room_id',
            'facility_id');
    }
}
