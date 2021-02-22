<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ResponeTest extends TestCase
{
    public function testInvalidRoute()
    {
        $response = $this->get('/api/v1/commission');

        $response->assertStatus(404);
    }

    public function testSum()
    {
        $response = $this->get('/api/v1/commission/1');

        $response->assertStatus(200);
    }

    public function testCommission()
    {
        $response = $this->get('/api/v1/commission/1/1');

        $response->assertStatus(200);
    }

    public function testInvalidData()
    {
        $response = $this->get('/api/v1/commission/1/3');

        $response->assertStatus(422);
    }

}
