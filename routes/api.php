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
use App\Http\Controllers\UserController;



// Login
Route::post('/login', [AuthController::class, 'login']);
//Register
Route::post('/register', [RegisterController::class, 'register']);
//Email
Route::post('/email/resend', [EmailVerificationNotificationController::class, 'resend'])->middleware('auth');
//Actes de santé
Route::get('/actesante/{countryName}',[ActeSanteController::class, 'showByCountryName']);
Route::get('/actesante',[ActeSanteController::class, 'show']);
Route::get('/actesantes/{actesanteId}',[ActeSanteController::class, 'showActeSanteById']);
Route::delete('/actesante/{actesanteId}',[ActeSanteController::class, 'destroy']);
Route::post('/actesante',[ActeSanteController::class, 'store']);
Route::patch('/actesante/{actesanteId}',[ActeSanteController::class, 'update']);
//Recommandations
Route::get('/recommandations',[RecommandationController::class, 'show']);
Route::get('/recommandations/{countryId}',[RecommandationController::class, 'showByCountryId']);
Route::get('/recommandation/{recommandationsId}',[RecommandationController::class, 'showRecommandationById']);
Route::post('/recommandations',[RecommandationController::class, 'store']);
Route::delete('/recommandations/{recommandationsId}',[RecommandationController::class, 'destroy']);
Route::patch('/recommandations/{recommandationsId}',[RecommandationController::class, 'update']);
//Pays
Route::get('/pays/names',[PaysController::class,'showAllCountriesByName']);
Route::get('/pays/{countryName}',[PaysController::class,'showCountryByEnglishName']);
Route::get('/paysid/{paysId}',[PaysController::class, 'showPaysById']);
Route::post('/pays',[PaysController::class, 'store']);
Route::get('/pays',[PaysController::class, 'show']);
Route::delete('/pays/{paysId}',[PaysController::class, 'destroy']);
Route::patch('/pays/{paysId}',[PaysController::class, 'update']);
//Deplacement
Route::get('/deplacement',[DeplacementController::class, 'showAll']);
Route::get('/deplacement/{deplacementId}',[DeplacementController::class, 'showDeplacementById']);
Route::post('/deplacement',[DeplacementController::class, 'store']);
Route::patch('/deplacement/{deplacementId}',[DeplacementController::class, 'update']);
Route::delete('/deplacement/{deplacementId}',[DeplacementController::class, 'destroy']);
//User
Route::get('/user',[UserController::class, 'showAll']);
Route::get('/user/{userId}',[UserController::class, 'showUserById']);
Route::post('/user',[UserController::class, 'store']);
Route::patch('/user/{userId}',[UserController::class, 'update']);
Route::delete('/user/{userId}',[UserController::class, 'destroy']);





