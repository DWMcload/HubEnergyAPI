<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partners extends Model
{
    use HasFactory;

    public function meter_points()
    {
        return $this->belongsToMany(MeterPoints::class);
    }
}
