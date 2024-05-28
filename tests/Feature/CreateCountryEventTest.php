<?php

namespace Tests\Feature;

use App\Events\CreateCountryEvent;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Event;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Tests\TestCase;

class CreateCountryEventTest extends TestCase
{

    public function test_create_country_event(): void
    {

        $this->refreshApplicationWithLocale('en');
        Event::fake();

        $url = LaravelLocalization::localizeURL(route('country-create-event'));
        $data =  [
            'ar' => [
                'name' => 'name'
            ],
            'en' => [
                'name' => 'roz'
            ]
         ];
        $response = $this->post($url, $data);
        Event::assertDispatched(CreateCountryEvent::class, function($e) use($data){
            return $e->countrty->name == $data['en']['name'];
        });

    }
}
