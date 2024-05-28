<?php

namespace Tests\Feature\Api\Authentication\Register;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Brick\Math\Exception\MathException;
use Exception;
use Illuminate\Validation\ValidationException;
class RegisterUserValidateTest extends TestCase
{
    public function test_register_user_vaildate_name_error(): void
    {
        $response = $this->postJson('/api/auth/register');
    // $this->expectException(Exception::class);
    //     $this->expectException(ValidationException::class);
    //     $this->expectExceptionMessage("The image field is required.");

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

    public function test_register_user_vaildate_email_error(): void
    {
        $data = [
            'name'        => 'name'
        ];
        $response = $this->postJson('/api/auth/register', $data);

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

    public function test_register_user_vaildate_password_error(): void
    {
        $data = [
            'name'        => 'name',
            'email'       => 'email'
        ];
        $response = $this->postJson('/api/auth/register', $data);

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

    public function test_register_user_vaildate_image_error(): void
    {
        $data = [
            'name'        => 'name',
            'email'       => 'email',
            'password'    => '123456'
        ];
        $response = $this->postJson('/api/auth/register', $data);

        // dd($response);
        echo $response->getContent() ."\n";

        $response->assertStatus(422);

        $response->assertJson(
           [
            "status"      => false,
            "msg"         => "The Image field is required.",
            "data"        => []
           ]
        );
    }
}
