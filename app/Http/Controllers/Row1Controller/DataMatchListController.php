<?php

namespace App\Http\Controllers\Row1controller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
class DataMatchListController extends Controller
{
    public function showDataMatchList()
    {
        $baseUrl = env('API_BASE_URL');
        $loading = true; // Initially, we set loading to true
        $formList = [];  // Empty array to hold formList

        // Create a Guzzle HTTP client
        $client = new Client();

        try {
            // Make the API call
            $response = $client->get("$baseUrl/job/Form1BySat1"); // Replace with actual API URL

            if ($response->getStatusCode() == 200) {
                // API call was successful, get the response data
                $jsonString = $response->getBody()->getContents();
                $formList = json_decode($jsonString); // Convert JSON response to PHP array/object

                $loading = false; // Set loading to false as data is loaded
            } else {
                // If the response is not successful, handle the error
                $loading = false;
                $errorMessage = $response->getBody()->getContents();
                Log::error('API Error: ' . $errorMessage);
                return Redirect::back()->withErrors(['error' => $errorMessage]);
            }
        } catch (\Exception $e) {
            // Log any errors
            Log::error('Error fetching formList: ' . $e->getMessage());

            // Handle the error by continuing with an empty formList and loading set to false
            $loading = false;
        }

        // Pass formList and loading to the view
        return view('Row1.DataMatchList', compact('formList', 'loading'));
    }
}
