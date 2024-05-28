<?php

namespace Tests\Feature\Dashboard\Country\CountryStore;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Admin;
use App\Models\Country;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Illuminate\Support\Facades\Event;

use App\Events\CreateCountryEvent;

class CountryStoreTest extends TestCase
{
    use RefreshDatabase;

    public function test_country_store(): void
    {
        Event::fake();
        $data =  [
            'ar' => [
                'name' => 'name'
            ],
            'en' => [
                'name' => 'roz'
            ]
         ];
        $this->refreshApplicationWithLocale('en');
        $admin    =  Admin::factory()->create();
        $response = $this->actingAs($admin)
        ->post(LaravelLocalization::localizeURL(
            route(
                'dashboard.countries.store')
        ), $data);
        $response->assertStatus(302)->assertRedirect(route("dashboard.countries.index"));
        // $this->assertDatabaseHas('countries', [
        //     'code' => 'EG',
        // ]);

        // Assert: Check the translations were created
        $this->assertDatabaseHas('country_translations', [
            'locale' => 'en',
            'name' => 'roz',
        ]);

        $this->assertDatabaseHas('country_translations', [
            'locale' => 'ar',
            'name' => 'name',
        ]);
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
