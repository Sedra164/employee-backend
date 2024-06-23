<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\eduactionJobController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\sectionCompanyController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\skillJobController;
use App\Http\Controllers\UserController;
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
    Route::post('/sections/{id}', [SectionController::class,'update']);
    Route::get('/sections/{id}', [SectionController::class,'show']);
    Route::delete('/sections/{section}', [SectionController::class,'destroy']);
     Route::get('/companies', [CompanyController::class,'index']);
    Route::post('/companies/store', [CompanyController::class,'store']);
    Route::post('/companies/update/{id}', [CompanyController::class,'update']);
    Route::get('/companies/{id}', [CompanyController::class,'show']);
    Route::delete('/companies/{company}', [CompanyController::class,'destroy']);
    Route::get('/jobs', [JobController::class,'index']);
    Route::post('/jobs/store', [JobController::class,'store']);
    Route::get('/jobs/{id}', [JobController::class,'show']);
    Route::delete('/jobs/{job}', [JobController::class,'destroy']);
    Route::get('/getJobs',[JobController::class,'getJobs']);
    Route::get('/sectionCompanies', [sectionCompanyController::class,'index']);
    Route::post('/sectionCompanies/store', [sectionCompanyController::class,'store']);
    Route::get('/sectionCompanies/{jobId}', [sectionCompanyController::class,'show']);
    Route::post('/skills/store', [SkillController::class,'store']);
    Route::delete('/skills/{skill}', [SkillController::class,'destroy']);
    Route::get('/skillJobs', [skillJobController::class,'index']);
    Route::post('/skillJobs/store', [skillJobController::class,'store']);
    Route::post('/educations/store', [EducationController::class,'store']);
    Route::delete('/educations/{education}', [EducationController::class,'destroy']);
    Route::post('/educationJobs/store', [eduactionJobController::class,'store']);

    Route::post('/train', [JobController::class, 'train']);

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
    Route::post('/forms/store', [FormController::class,'store']);
    Route::post('/forms/{id}', [FormController::class,'update']);
    Route::delete('/forms/{form}', [FormController::class,'destroy']);
    Route::post('/educations/store', [EducationController::class,'store']);
    Route::delete('/educations/{education}', [EducationController::class,'destroy']);
    Route::post('/educationJobs/store', [eduactionJobController::class,'store']);
    Route::post('/skills/store', [SkillController::class,'store']);
    Route::delete('/skills/{skill}', [skillJobController::class,'destroy']);
    Route::get('/skillJobs', [skillJobController::class,'index']);
    Route::post('/skillJobs/store', [skillJobController::class,'store']);
    Route::get('/users', [UserController::class,'getProfile']);
    Route::post('/users/update', [UserController::class,'updateProfile']);
    Route::delete('/users/{user}', [UserController::class,'destroy']);

    Route::post('/recommend', [JobController::class, 'recommend']);



});

