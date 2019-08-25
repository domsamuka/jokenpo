<?php

namespace Tests\Unit;

use App\Tournament;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TournamentTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function user_can_create_a_tournament()
    {
        $user = factory(User::class)->create();
        $tournament = factory(Tournament::class)->make([
            'user_id' => $user->id
        ]);
        $tournament->save();
        $this->assertEquals(1, Tournament::count());
        $new_tournament = Tournament::find($tournament->id);
        $this->assertSame($user->id, $new_tournament->user->id);
    }
}
