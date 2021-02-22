<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Partners;
use App\Models\MeterPoints;

class UnitTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(true);
    }

    public function test_partners_can_be_instantiated()
    {
        $this->assertInstanceOf(Partners::class, new Partners());
    }

    public function test_meter_points_can_be_instantiated()
    {
        $this->assertInstanceOf(MeterPoints::class, new MeterPoints());
    }

    public function test_comission_can_be_calculated()
    {
        $meter_point = new MeterPoints();
        $meter_point->consumption = 100;
        $meter_point->uplift = 10;
        $this->assertEquals($meter_point->getCommission(), 1000);
    }
}
