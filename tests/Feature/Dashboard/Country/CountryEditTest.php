<?php

namespace Tests\Feature\Dashboard\Country;

use App\Models\Admin;
use App\Models\Country;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class CountryEditTest extends TestCase
{
    public function test_country_edit(): void
    {
        $this->refreshApplicationWithLocale('en');
        $admin   =  Admin::factory()->create();
        $country = Country::factory()->create();
        $response = $this->actingAs($admin)
        ->get(LaravelLocalization::localizeURL(
            'dashboard/countries/'. $country->id .'/edit'));
        if ($response->getStatusCode() !== 200) {
            dump($response->getContent());
        }
        // dd($response->getContent());

        $response->assertSee('لا حول ولا قوة الا بالله العلي العظيم');
        $response->assertStatus(200);
        $response->assertViewIs('dashboard.countries.edit');
        $response->assertViewHas('row', $country);
        $response->assertSee($country->name);

    }

    public function testRedirectRouteNotAuth(): void
    {
        $this->refreshApplicationWithLocale('en');
        $response = $this->get(LaravelLocalization::
        localizeURL(route('dashboard.countries.edit', 5)));

        // dd($response);
        $response->assertRedirect("login");
        // $response->assertStatus(200)
        // ->assertOk() // Use assertOk() to assert a 200 status code
        // ->assertSuccessful(); // Use assertSuccessful() to assert a 2xx status code


    }
}
