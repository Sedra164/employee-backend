<?php

namespace App\Http\Controllers;

use App\Helpers\ApiResponse;
use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $education=Education::query()->with(['media'])->get();
        return ApiResponse::success($education,200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $education=new Education();
        $education->educationDegree=$request->educationDegree;
        $education->specialization=$request->specialization;
        $education->year=$request->year;
        $education->form()->associate($request->formId);
        $education->save();
        $imageC = new ImageController();
        $image = $imageC->uploadImage($request->image);
        $education->addMedia(storage_path('app\\public\\') . $image)->preservingOriginal()->toMediaCollection('educations');
        return ApiResponse::success($education,200,'Eduaction create successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
