<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonalinfoController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\LeadershipController;


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
//personal info routes
Route::get('create-personalinfo',[PersonalinfoController::class,'create']);
Route::get('store-personalinfo',[PersonalinfoController::class,'store']);
Route::get('index-personalinfo',[PersonalinfoController::class,'index']);
Route::get('destroy-personalinfo/{personalinfo}',[PersonalinfoController::class,'destroy']);
Route::get('edit-personalinfo/{personalinfo}',[PersonalinfoController::class,'edit']);
Route::get('update-personalinfo/{personalinfo}',[PersonalinfoController::class,'update']);

//education routes
Route::get('create-education',[EducationController::class,'create']);
Route::get('store-education',[EducationController::class,'store']);
Route::get('index-education',[EducationController::class,'index']);
Route::get('destroy-education/{education}',[EducationController::class,'destroy']);
Route::get('edit-education/{education}',[EducationController::class,'edit']);
Route::get('update-education/{education}',[EducationController::class,'update']);

//skills routes
Route::get('create-skills',[SkillsController::class,'create']);
Route::get('store-skills',[SkillsController::class,'store']);
Route::get('index-skills',[SkillsController::class,'index']);
Route::get('destroy-skills/{skills}',[SkillsController::class,'destroy']);
Route::get('edit-skills/{skills}',[SkillsController::class,'edit']);
Route::get('update-skills/{skills}',[SkillsController::class,'update']);

//work experience routes
Route::get('create-work',[WorkController::class,'create']);
Route::get('store-work',[WorkController::class,'store']);
Route::get('index-work',[WorkController::class,'index']);
Route::get('destroy-work/{work}',[WorkController::class,'destroy']);
Route::get('edit-work/{work}',[WorkController::class,'edit']);
Route::get('update-work/{work}',[WorkController::class,'update']);

//leadership activities routes
Route::get('create-leadership',[LeadershipController::class,'create']);
Route::get('store-leadership',[LeadershipController::class,'store']);
Route::get('index-leadership',[LeadershipController::class,'index']);
Route::get('destroy-leadership/{leadership}',[leadershipController::class,'destroy']);
Route::get('edit-leadership/{leadership}',[leadershipController::class,'edit']);
Route::get('update-leadership/{leadership}',[leadershipController::class,'update']);