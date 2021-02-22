<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Partners;
use App\Models\MeterPoints;

class MeterController extends Controller
{
    public function getSumCommissions(Partners $partner)
    {
        $meter_points = $partner->meter_points;
        $sum = 0;
        /* @var $meter_point MeterPoints */
        foreach ($meter_points as $meter_point)
        {
            $sum += $meter_point->getCommission();
        }
        return $sum;
    }

    public function getMeterPointCommission(Partners $partner, MeterPoints $meter_point)
    {
        if($meter_point->partner[0]->id != $partner->id) {
            return response('Please make sure you query the correct Partner and Meter point.', 422);
        }
        return $meter_point->getCommission();
    }
}
