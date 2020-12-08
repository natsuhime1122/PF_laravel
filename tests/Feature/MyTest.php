<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\User;

class MyTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testExample2()
    {
        $response = $this->get('/posts/index');

        $response->assertStatus(302);
    }

    public function testExample3()
    {
      $user = factory(User::class)->create();
      $response = $this->actingAs($user)
      ->get('/posts/index');
      //OK, but incomplete, skipped, or risky tests!
      //Tests: 5, Assertions: 4, Risky: 1.
      $response->assertStatus(200);
      //OK (5 tests, 5 assertions)
    }
}
