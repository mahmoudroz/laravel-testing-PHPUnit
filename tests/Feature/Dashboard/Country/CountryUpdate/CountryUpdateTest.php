<?php

namespace Tests\Feature\Dashboard\Country\CountryUpdate;

use App\Models\Admin;
use App\Models\Country;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class CountryUpdateTest extends TestCase
{
    use RefreshDatabase;
    public function test_country_update(): void
    {
        $data =  [
            'ar' => [
                'name' => 'name5'
            ],
            'en' => [
                'name'  => 'name999'
            ]
            ];
        $this->refreshApplicationWithLocale('en');
        $admin    =  Admin::factory()->create();
        $country  =  Country::factory()->create();
        $url = LaravelLocalization::localizeURL("dashboard/countries/{$country->id}");

        $response = $this->actingAs($admin)->put($url, $data);
        $response->assertStatus(302)->assertRedirect(route("dashboard.countries.index"));

        $this->assertDatabaseHas('countries', [
            'id' => $country->id,
        ]);

        // Assert: Check the translations were created
        $this->assertDatabaseHas('country_translations', [
            'country_id' => $country->id,
            'locale'     => 'en',
            'name'       => 'name999',
        ]);

        $this->assertDatabaseHas('country_translations', [
            'country_id' => $country->id,
            'locale'     => 'ar',
            'name'       => 'name5',
        ]);
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
