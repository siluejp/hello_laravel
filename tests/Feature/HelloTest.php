<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\User;
use App\Person;

//use Illuminate\Foundation\Testing\WithFaker;
//use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class HelloTest extends TestCase
{
    use DatabaseMigrations;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testHello()
    {
        $this->assertTrue(true);

        $response = $this->get('/');
        $response->assertStatus(200);

        $response = $this->get('/hello');
        $response->assertStatus(200);
        
        $user = factory(User::class)->create();
        $response = $this->actingAs($user)->get('/hello');
        $response->assertStatus(200);

        $response = $this->get('/no_route');
        $response->assertStatus(404);

        factory(User::class)->create([
            'name' => 'AAA',
            'email' => 'BBB@CCC.COM',
            'password' => '12345',
        ]);
        factory(User::class, 10)->create();

        $this->assertDatabaseHas('users', [
            'name' => 'AAA',
            'email' => 'BBB@CCC.COM',
            'password' => '12345',
        ]);

        factory(Person::class, 10)->create([
            'name' => 'hoge',
            'mail' => 'YYY@ZZZ.COM',
            'age' => 20,
        ]);
        factory(Person::class, 10)->create();
        $this->assertDatabaseHas('people', [
            'name' => 'hoge',
            'mail' => 'YYY@ZZZ.COM',
            'age' => 20,
        ]);
    }
}
