<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LoginTest extends TestCase
{
    /**
     * @test
     */
    public function check_if_login_link_exists_on_homepage()
    {
        $response = $this->get('/');
        $response->assertSeeText('Login');
        $response->assertSee(route('login'));
    }
    /**
     * @test
     */
    public function check_if_login_route_is_working()
    {
        $response = $this->get(route('login'));
        $response->assertStatus(200);
    }
}
