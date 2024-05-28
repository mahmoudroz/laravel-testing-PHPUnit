<?php

namespace Tests\Feature\Api\Authentication\Logout;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LogoutUserValidateTest extends TestCase
{
    public function test_logout_user_vaildate_unauthorized(): void
    {
        $response = $this->getJson('/api/auth/logout');

        // dd($response);
        echo $response->getContent() ."\n";

        $response->assertStatus(401);

        $response->assertJson(
           [
            "status"      => false,
            "data"        => []
           ]
        );
    }
}
