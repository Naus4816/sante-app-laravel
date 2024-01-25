<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PaysController;
use App\Http\Controllers\EmailVerificationNotificationController;
use App\Http\Controllers\RecommandationController;
use App\Http\Controllers\ActeSanteController;
use App\Http\Controllers\DeplacementController;


// Route pour la connexion
Route::post('/login', [AuthController::class, 'login']);
Route::delete('/login', [AuthController::class, 'logout']);
Route::post('/register', [RegisterController::class, 'register']);
Route::post('/email/resend', [EmailVerificationNotificationController::class, 'resend'])->middleware('auth');
Route::get('/actesante/{countryName}',[ActeSanteController::class, 'showByCountryName']);
Route::get('/recommandations/{countryId}',[RecommandationController::class, 'showByCountryId']);
Route::delete('/recommandations/{recommandationsId}',[RecommandationController::class, 'destroy']);
Route::post('/recommandations',[RecommandationController::class, 'store']);
Route::get('/pays/names',[PaysController::class,'showAllCountriesByName']);
Route::get('/pays/{countryName}',[PaysController::class,'showCountryByEnglishName']);
Route::post('/deplacement',[DeplacementController::class,'store']);


