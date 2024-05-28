<?php

namespace Tests\Feature\Dashboard\Country;

use App\Models\Admin;
use App\Models\Country;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class CountryDeleteTest extends TestCase
{
    public function test_country_delete(): void
    {
        $countries_count_before = Country::count();
        $country = Country::factory()->create();
        $this->refreshApplicationWithLocale('en');
        $admin   =  Admin::factory()->create();
        $response = $this->actingAs($admin)
        ->delete(LaravelLocalization::localizeURL('dashboard/countries/'. $country->id));
        $this->assertDatabaseMissing('countries', $country->toArray());
        $countries_count_after  = Country::count();
        $this->assertEquals($countries_count_after, $countries_count_before);
        $response->assertStatus(302)->assertRedirect(route("dashboard.countries.index"));

    }

    public function testRedirectRouteNotAuth(): void
    {
        $this->refreshApplicationWithLocale('en');
        $response = $this->delete(LaravelLocalization::
        localizeURL(route('dashboard.countries.destroy', 5)));
        $response->assertRedirect("login");
        // $response->assertStatus(200)
        // ->assertOk() // Use assertOk() to assert a 200 status code
        // ->assertSuccessful(); // Use assertSuccessful() to assert a 2xx status code


    }
}
