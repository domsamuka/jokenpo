<?php

namespace Tests\Unit;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;



class UserTest extends TestCase
{
    use RefreshDatabase;
    /**
     * @test
     */
    public function it_creates_user()
    {
        // Create 3 users
        $users = factory(User::class, 3)->create();
        $this->assertEquals(3, User::count());
    }
    /**
     * @test
     */
    public function regular_user_cant_see_admin_area()
    {
        // Create 1 users
        $user = factory(User::class)->create();
        $response = $this->actingAs($user)->get(route('admin_dashboard'));
        $response->assertRedirect(route('home'));
    }
    /**
     * @test
     */
    public function admin_user_can_see_admin_area()
    {
        // Create 1 admin user
        $user = factory(User::class)->create([
            'admin' => 1,
        ]);
        $this->assertTrue((bool) $user->isAdmin());
        $response = $this->actingAs($user)->get(route('admin_dashboard'));
        $response->assertStatus(200);
    }
}
