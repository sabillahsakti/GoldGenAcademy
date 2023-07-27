<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RecommendationController extends Controller
{
    public function submit(Request $request)
    {
        $request->validate([
            'recommendationInput' => 'required|string|max:255',
        ]);

        $value = (string)$request->input('recommendationInput'); // Convert to string

        // Make an API call with the value from the input
        $response = Http::get('https://api-goldgen.koyeb.app/predik/' . urlencode($value));
        $data = $response->json();

        // Process the API response data here
        // You can return a view with the data or do something else with it
        return view('recommendation', ['data' => $data]);
    }

}
