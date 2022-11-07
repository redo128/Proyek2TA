<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\Resources\Json\JsonResource;
use Tests\TestCase;

class UserTest extends TestCase
{   
    use RefreshDatabase;
    public const URL_TEST = "/login";
    
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function setUp(): void
    {
        parent::setUp();
        $this->user = User::factory()->create();
    }

    public function test_open_login_page()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

    public function test_createUser()
    {
       $user=User::create([
        'email' => 'test@gmail.com',
        'name' => 'test',
        'password' => bcrypt('test'),
    ]);
}
}
