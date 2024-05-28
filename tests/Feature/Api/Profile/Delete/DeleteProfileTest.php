<?php

namespace Tests\Feature\Api\Profile\Delete;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Tymon\JWTAuth\Facades\JWTAuth;

class DeleteProfileTest extends TestCase
{
    public function test_delete_profile(): void
    {
        $users_count_before = User::count();
        $user = $this->createUser();

        $token = JWTAuth::fromUser($user);
        $response = $this->withHeaders([
            'token' => $token,
        ])->deleteJson('/api/profile/delete');
        // dd($response);
        echo $response->getContent() ."\n";

        $response->assertStatus(200);
        $this->assertDatabaseMissing('users', $user->toArray());
        $users_count_after  = User::count();

        $this->assertEquals($users_count_after, $users_count_before);

        $response->assertJson(
           [
            "status"      => true
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
