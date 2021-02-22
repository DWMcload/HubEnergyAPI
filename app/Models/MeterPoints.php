<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MeterPoints extends Model
{
    use HasFactory;

    public function partner()
    {
        return $this->belongsToMany(Partners::class);
    }

    public function getCommission()
    {
        return $this->consumption * $this->uplift;
    }
}
