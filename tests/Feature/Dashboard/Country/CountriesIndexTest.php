<?php

namespace Tests\Feature\Dashboard\Country;

use App\Models\Admin;
use App\Models\Country;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Tests\TestCase;

class CountriesIndexTest extends TestCase
{
    // use RefreshDatabase;



    public function test_countries_index(): void
    {
        $countries = Country::factory(5)->create();
        $this->refreshApplicationWithLocale('en');
        $admin   =  Admin::factory()->create();
        $response = $this->actingAs($admin)
        ->get(LaravelLocalization::localizeURL('dashboard/countries?search=' . $countries[0]->name));
        if ($response->getStatusCode() !== 200) {
            dump($response->getContent());
        }
        // dd($response->getContent());

        $response->assertSee('لا حول ولا قوة الا بالله العلي العظيم');
        $response->assertStatus(200);
        $response->assertViewIs('dashboard.countries.index');
        $response->assertViewHas('rows');
        $response->assertSee($countries[0]->name);

    }

    public function testRedirectRouteNotAuth(): void
    {
        $this->refreshApplicationWithLocale('en');
        $response = $this->get(LaravelLocalization::
        localizeURL(route('dashboard.countries.index')));

        // $response = $this->get();

        // dd($response);
        $response->assertRedirect("login");
        // $response->assertStatus(200)
        // ->assertOk() // Use assertOk() to assert a 200 status code
        // ->assertSuccessful(); // Use assertSuccessful() to assert a 2xx status code


    }
}
