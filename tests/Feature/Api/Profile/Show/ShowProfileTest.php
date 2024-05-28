<?php

namespace Tests\Feature\Api\Profile\Show;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Tymon\JWTAuth\Facades\JWTAuth;

class ShowProfileTest extends TestCase
{
    public function test_show_profile(): void
    {
        $user = $this->createUser();
        $token = JWTAuth::fromUser($user);


        $response = $this->withHeaders([
            'token' => $token,
        ])->getJson(route('profile.show'));

        // dd($response);
        echo $response->getContent() ."\n";

        $response->assertStatus(200);

        $response->assertJson(
           [
            "status"      => true,
            "data"        =>
            [
                "user" =>
                [
                    "name"     => $user->name,
                    'email'    => $user->email
                ]
            ]
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
