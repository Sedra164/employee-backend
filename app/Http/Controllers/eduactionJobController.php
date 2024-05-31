<?php

namespace App\Http\Controllers;

use App\Helpers\ApiResponse;
use App\Models\educationJob;
use Illuminate\Http\Request;

class eduactionJobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $educationJob=educationJob::all();
        return ApiResponse::success($educationJob,200);
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
        $educationJob=new educationJob();
        $educationJob->education()->associate($request->educationId);
        $educationJob->job()->associate($request->jobId);
        $educationJob->save();
        return ApiResponse::success($educationJob,200);
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
