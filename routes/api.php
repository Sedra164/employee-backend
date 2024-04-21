<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\sectionCompanyController;
use App\Http\Controllers\SectionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();

});
Route::group(['prefix' => 'admin'], function () {
    Route::post('/login', [AuthController::class, 'loginAdmin']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/sections', [SectionController::class,'index']);
    Route::post('/sections/store', [SectionController::class,'store']);
    Route::delete('/sections/delete/{id}', [SectionController::class,'destroy']);
     Route::get('/companies', [CompanyController::class,'index']);
    Route::post('/companies/store', [CompanyController::class,'store']);
    Route::delete('/companies/{id}', [CompanyController::class,'destroy']);
    Route::get('/jobs', [JobController::class,'index']);
    Route::post('/jobs/store', [JobController::class,'store']);
    Route::delete('/jobs/{id}', [JobController::class,'destroy']);
    Route::get('/sectionCompanies', [sectionCompanyController::class,'index']);
    Route::post('/sectionCompanies/store', [sectionCompanyController::class,'store']);
});

Route::group(['prefix' => 'user'], function () {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/verify', [AuthController::class, 'verifyEmail']);
    Route::post('/resend', [AuthController::class, 'resendOtp']);
    Route::post('/forgetPassword', [AuthController::class, 'forgetPassword']);
    Route::post('/resetPassword', [AuthController::class, 'resetPassword']);
    Route::get('/sections', [SectionController::class,'index']);
    Route::get('/companies', [CompanyController::class,'index']);
    Route::get('/jobs', [JobController::class,'index']);
    Route::get('/sectionCompanies', [sectionCompanyController::class,'index']);
});

