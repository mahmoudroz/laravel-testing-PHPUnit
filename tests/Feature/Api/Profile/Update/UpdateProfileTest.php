<?php

namespace Tests\Feature\Api\Profile\Update;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Tymon\JWTAuth\Facades\JWTAuth;

class UpdateProfileTest extends TestCase
{
    public function test_update_profile(): void
    {
        $user = $this->createUser();
        $token = JWTAuth::fromUser($user);

        $data = [
            'name'        => 'mahmoud',
            'email'       => 'mahmoud@gmail.com'
        ];
        $response = $this->withHeaders([
            'token' => $token,
        ])->putJson('/api/profile/update', $data);
        // dd($response);
        echo $response->getContent() ."\n";

        $response->assertStatus(200);
        $this->assertDatabaseHas('users', [
            "name"  =>  $data['name'],
            "email" =>  $data['email'],

        ]);
        //OR
        $this->assertDatabaseHas('users', $data);

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
