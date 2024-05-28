<?php

namespace Tests\Feature\Dashboard\Country\CountryUpdate;

use App\Models\Admin;
use App\Models\Country;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class CountryUpdateValidateTest extends TestCase
{
    use RefreshDatabase;
    public function test_country_update_validate(): void
    {
        $data =  [
            'ar' => [
                'name' => 'name5'
                ]
            ];
        $this->refreshApplicationWithLocale('en');
        $admin    =  Admin::factory()->create();
        $country  =  Country::factory()->create();
        $url = LaravelLocalization::localizeURL("dashboard/countries/{$country->id}");

        $response = $this->actingAs($admin)->put($url, $data);
        $response->assertStatus(302);
        $response->assertSessionHasErrors(['en.name']);
        $response->assertSessionDoesntHaveErrors(['ar.name']);
        // $response->assertSessionHasErrors([
        //     'name' => 'Please enter your name.',
        //     'email' => 'Please enter a valid email address.',
        // ]);
    }

    public function testRedirectRouteNotAuth(): void
    {
        $this->refreshApplicationWithLocale('en');
        $country  =  Country::factory()->create();

        $url = LaravelLocalization::localizeURL("dashboard/countries/{$country->id}");
        $response = $this->put($url, ['hhh' => 'jhj']);
        $response->assertRedirect("login");
        // $response->assertStatus(200)
        // ->assertOk() // Use assertOk() to assert a 200 status code
        // ->assertSuccessful(); // Use assertSuccessful() to assert a 2xx status code


    }
}
