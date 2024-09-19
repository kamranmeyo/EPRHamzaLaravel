<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function showCards()
    {
        $baseUrl = env('API_BASE_URL');



        // Call the API
        $response = Http::get("$baseUrl/job/AllFormsCount");
        // Define all possible statuses with a default value of 0
        $statuses = [
            'status1' => 0, 'status2' => 0, 'status3' => 0, 'status4' => 0, 'status5' => 0,
            'status6' => 0, 'status7' => 0, 'status8' => 0, 'status9' => 0, 'status10' => 0,
            'status11' => 0, 'status12' => 0, 'status13' => 0, 'status14' => 0, 'status15' => 0,
            'status16' => 0, 'status17' => 0, 'status18' => 0, 'status19' => 0, 'status20' => 0,
            'status21' => 0, 'status22' => 0, 'status23' => 0, 'status24' => 0, 'status25' => 0,
            'status26' => 0, 'status27' => 0, 'status28' => 0, 'status29' => 0, 'status30' => 0,
            'status31' => 0, 'status32' => 0, 'status33' => 0, 'status34' => 0, 'status35' => 0,
            'status36' => 0, 'status37' => 0, 'status38' => 0, 'status39' => 0, 'status40' => 0,
            'status41' => 0, 'status42' => 0, 'status43' => 0, 'status44' => 0,
        ];
    
        
        if ($response->successful()) {
            $data = $response->json();
            // Merge the response data with the default statuses
            $statuses = array_merge($statuses, $data);
        }
    
        // Pass the data to the view
        return view('dashboard', $statuses);
    }
    
}
