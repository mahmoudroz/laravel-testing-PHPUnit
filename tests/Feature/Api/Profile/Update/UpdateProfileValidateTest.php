<?php

namespace Tests\Feature\Api\Profile\Update;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Tymon\JWTAuth\Facades\JWTAuth;

class UpdateProfileValidateTest extends TestCase
{
    public function test_update_profile_vaildate_name_error(): void
    {
        $user = $this->createUser();
        $token = JWTAuth::fromUser($user);


        $response = $this->withHeaders([
            'token' => $token,
        ])->putJson('/api/profile/update');

        // dd($response);
        echo $response->getContent() ."\n";

        $response->assertStatus(422);

        $response->assertJson(
           [
            "status"      => false,
            "msg"         => "The Name field is required.",
            "data"        => []
           ]
        );
    }

    public function test_update_profile_vaildate_email_error(): void
    {
        $user = $this->createUser();
        $token = JWTAuth::fromUser($user);

        $data = [
            'name'        => 'name'
        ];
        $response = $this->withHeaders([
            'token' => $token,
        ])->putJson('/api/profile/update', $data);
        // dd($response);
        echo $response->getContent() ."\n";

        $response->assertStatus(422);

        $response->assertJson(
           [
            "status"      => false,
            "msg"         => "The Email field is required.",
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
