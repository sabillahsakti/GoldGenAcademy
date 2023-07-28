<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;

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

        // Extract the values from the API response
        $alternatives = [];
        foreach ($data as $key => $valueArray) {
            if (isset($valueArray[0])) {
                $alternatives[] = $valueArray[0];
            }
        }

        // Use the extracted values in your query
        $results = DB::table('courses')
            ->join('fields', 'courses.field_id', '=', 'fields.id')
            ->select('courses.name', 'courses.price', 'courses.image', 'fields.name AS field')
            ->whereIn('fields.name', $alternatives)
            ->get();
        // Pass the results to the view
        return view('recommendation', ['results' => $results]);
    }

}
