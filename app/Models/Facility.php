<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    protected $fillable = [
        'facility_name',
    ];

    public function room() {
        return $this->belongsToMany(
            Room::class,
            'room_facilities',
            'facility_id',
            'room_id'
        );
    }
}
