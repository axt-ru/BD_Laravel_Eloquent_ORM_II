<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MyFirstTest extends TestCase
{
     /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    public function test_forTestBasic() {
        $response = $this->get('/');
        $response -> assertStatus(200);
        $response -> assertSeeText('Главная');
        $response -> assertViewIs('index');

    }
}
