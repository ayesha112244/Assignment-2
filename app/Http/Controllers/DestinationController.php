<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\Country;

class DestinationController extends Controller
{
    // Destinations main page
    public function index()
    {
        $destinations = Destination::with('countries')->get();

        return view('destinations.index', compact('destinations'));
    }

    // Country detail page
    public function show(Country $country)
    {
        $country->load('itineraries');

        return view('destinations.show', compact('country'));
    }
}
