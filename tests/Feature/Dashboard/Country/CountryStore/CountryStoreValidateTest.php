<?php

namespace Tests\Feature\Dashboard\Country\CountryStore;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Admin;
use App\Models\Country;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Exception;
use Illuminate\Validation\ValidationException;

class CountryStoreValidateTest extends TestCase
{
    use RefreshDatabase;
    public function test_country_store_validate(): void
    {
        $data =  [
            'ar' => [
                'name' => 'name'
                ]
            ];
        $this->refreshApplicationWithLocale('en');
        $admin    =  Admin::factory()->create();
        $response = $this->actingAs($admin)
        ->post(LaravelLocalization::localizeURL(
            route(
                'dashboard.countries.store', $data)
        ));

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
        $response = $this
        ->post(LaravelLocalization::localizeURL(route('dashboard.countries.store', ['hhh' => 'jhj'])));
        $response->assertRedirect("login");
        // $response->assertStatus(200)
        // ->assertOk() // Use assertOk() to assert a 200 status code
        // ->assertSuccessful(); // Use assertSuccessful() to assert a 2xx status code


    }
}
