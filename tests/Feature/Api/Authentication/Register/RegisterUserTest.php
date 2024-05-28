<?php

namespace Tests\Feature\Api\Authentication\Register;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Exception;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\UploadedFile;

class RegisterUserTest extends TestCase
{
    // use RefreshDatabase;
    public function test_register_user(): void
    {
        $data = [
            'name'        => 'name',
            'email'       => 'email',
            'password'    => '123456',
            'image'       => UploadedFile::fake()->create('roz.png')
        ];
        $response = $this->postJson('/api/auth/register', $data);

        // dd($response);
        echo $response->getContent() ."\n";

        $response->assertStatus(201)
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

}
