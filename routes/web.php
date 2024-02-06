<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// // web.php

use App\Http\Controllers\CandidateController;

Route::middleware(['access.token'])->group(function () {
    Route::get('/', [CandidateController::class, 'index']);
    Route::get('/referoo', [CandidateController::class, 'index']);
    Route::get('/candidate-listing', [CandidateController::class, 'index']);
    Route::get('/candidate/{id}', [CandidateController::class, 'show']);
});

Route::get('/referoo', function (Request $request) {
    $request->session()->put('state', $state = Str::random(40));

    return redirect("https://api.sandbox.referoo.com.au/oauth/authorize/?client_id=ref_key_64f13d25076af297939781&redirect_uri=http://localhost&scope=write+read&response_type=code");
});

Route::get('/', function (Request $request) {
    if (!$request->session()->has('access_token')) {
        $response = Http::asForm()->post('https://api.sandbox.referoo.com.au/oauth/token', [
            'grant_type' => 'authorization_code',
            'client_id' => 'ref_key_64f13d25076af297939781',
            'client_secret' => 'ref_sec_Dg7k09phs2bfRy2nklluRTfz2w2g9mLvLiZ2UbtGs83EHGM7DCtFxA',
            'redirect_uri' => 'http://localhost',
            'code' => $request->code,
        ]);
        $value=$response->json();
        $request->session()->put('access_token', $value['access_token']);
        return redirect('candidate-listing');
    } else {
        return redirect('candidate-listing?page='.$request->page);
    }
    
});

