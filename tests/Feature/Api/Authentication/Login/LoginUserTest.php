<?php

namespace Tests\Feature\Api\Authentication\Login;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class LoginUserTest extends TestCase
{
    public function testLoginUser(): void
    {
        $user = User::factory()->create([
            'email'      => 'email',
            'password'   => Hash::make(123456)
        ]);
        $data = [
            'email'        => 'email',
            'password'     => '123456'
        ];
        $response = $this->postJson('/api/auth/login', $data);

        // dd($response);
        echo $response->getContent() ."\n";

        $response->assertOk()
                 ->assertJson(
            [
             "status"      => true,
             "msg"         => "success"
            ]
         );
         // $response->assertStatus(200)
        // ->assertOk() // Use assertOk() to assert a 200 status code
        // ->assertSuccessful(); // Use assertSuccessful() to assert a 2xx status code

    }
    // OR

    // public function test_login_user(): void
    // {
    //     $data = [
    //         'email'        => 'email',
    //         'password'     => '123456'
    //     ];
    //     $response = $this->postJson('/api/auth/login', $data);

    //     // dd($response);
    //     echo $response->getContent() ."\n";

    //     $response->assertOk()
    //              ->assertJson(
    //         [
    //          "status"      => true,
    //          "msg"         => "success"
    //         ]
    //      );
    //      // $response->assertStatus(200)
    //     // ->assertOk() // Use assertOk() to assert a 200 status code
    //     // ->assertSuccessful(); // Use assertSuccessful() to assert a 2xx status code

    // }
}
