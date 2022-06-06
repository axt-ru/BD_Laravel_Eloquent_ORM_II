<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class NewsTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testMain()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function testUserCanBrowseNews()
    {
        $response = $this->call('GET', '/news');
        $response->assertOk();
    }

    public function testUserCanBrowseFeedback()
    {
        $response = $this->call('GET', '/feedback');
        $response->assertOk();
    }

    public function testUserCanBrowseOrder()
    {
        $response = $this->call('GET', '/order');
        $response->assertOk();
    }
}
