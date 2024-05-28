<?php

namespace Tests\Feature\Api\Authentication\Logout;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\Feature\Api\Authentication\Register\RegisterUserTest;
use Tests\TestCase;
use Tymon\JWTAuth\Facades\JWTAuth;

class LogoutUserTest extends TestCase
{
    // use RefreshDatabase;

    protected $token;

    public function test_logout_user(): void
    {
        $user = $this->createUser();
        $token = JWTAuth::fromUser($user);


        $response = $this->withHeaders([
            'token' => $token,
        ])->getJson('/api/auth/logout');

        // dd($response);
        echo $response->getContent() ."\n";

        $response->assertStatus(200);

        $response->assertJson(
           [
            "status"      => true,
            "data"        => []
           ]
        );
    }

    public function createUser(){
       return  $user = User::create([
            'name'      => 'name',
            'email'     => 'a@gmail.com',
            'password'  => '123456',
            'status'    => 1,
            'image'     => '1.png'
        ]);
    }
}
