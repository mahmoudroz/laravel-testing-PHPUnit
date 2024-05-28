<?php

namespace App\Http\Controllers;

use App\Events\CreateCountryEvent;
use App\Models\Country;
use Illuminate\Http\Request;

class CreateCountryEventController extends Controller
{
    public function index(Request $request){
        $country = Country::create($request->all());
         event(new CreateCountryEvent($country));
         return $country;
    }

}
