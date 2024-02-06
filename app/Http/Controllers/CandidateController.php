<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Pagination\Paginator;

class CandidateController extends Controller
{
    public function index(Request $request)
    {

        $candidateListing = $this->makeApiRequest($request, 'candidates');
        $perPage = $request->input('per_page', 10); 
        $page = $request->input('page', 1); 

        $paginator = new Paginator($candidateListing, $perPage, $page);

        $paginatedData = $paginator->items();
         
        return view('candidate-listing', [
            'candidates' => $paginatedData,
            'paginator' => $paginator,
        ]);

    }

    public function show(Request $request, $id)
    {
 
        $candidateDetails = $this->makeApiRequest($request, 'candidate/' . $id);
        $refreeDetails = $this->makeApiRequest($request, 'candidate/' . $id.'/referees');
        return view('candidate-details', ['candidate' => $candidateDetails, 'refreeDetails' => $refreeDetails]);
    }

    private function makeApiRequest(Request $request, $endpoint, $method = 'get', $data = [])
    {
        $accessToken = $request->session()->get('access_token');

        $headers = [
            'Authorization' => 'Bearer ' . $accessToken,
            'Accept' => 'application/json',
        ];

        $url = 'https://api.sandbox.referoo.com.au/oauth2/' . $endpoint;

        if ($method === 'get') {
            $response = Http::withHeaders($headers)->get($url,$data);
        } elseif ($method === 'post') {
            $response = Http::withHeaders($headers)->post($url, $data);
        }

        return $response->json();
    }

}
