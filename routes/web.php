<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SurveyController;
use App\Http\Controllers\HasilSurveyController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hasilSurvey', [HasilSurveyController::class,'hasilSurvey']);
Route::get('/surveyWa/{no_mr}', [SurveyController::class,'surveyWa']);

Route::resource('survey', SurveyController::class);