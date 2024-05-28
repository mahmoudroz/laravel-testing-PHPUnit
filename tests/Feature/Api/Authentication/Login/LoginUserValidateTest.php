<?php

namespace Tests\Feature\Api\Authentication\Login;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginUserValidateTest extends TestCase
{
    public function test_login_user_vaildate_name_error(): void
    {
        $response = $this->postJson('/api/auth/login');

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

    public function test_login_user_vaildate_password_error(): void
    {
        $data = [
            'email'        => 'email'
        ];
        $response = $this->postJson('/api/auth/login', $data);

        // dd($response);
        echo $response->getContent() ."\n";

        $response->assertStatus(422);

        $response->assertJson(
           [
            "status"      => false,
            "msg"         => "The Password field is required.",
            "data"        => []
           ]
        );
    }

    public function test_login_user_vaildate_information_error(): void
    {
        $data = [
            'email'        => 'email',
            'password'     => 'password'
        ];
        $response = $this->postJson('/api/auth/login', $data);

        // dd($response);
        echo $response->getContent() ."\n";

        $response->assertStatus(404);

        $response->assertJson(
           [
            "status"      => false,
            "msg"         => "Information Error",
            "data"        => []
           ]
        );
    }
}
