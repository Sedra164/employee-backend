<?php

namespace App\Http\Controllers;

use App\Helpers\ApiResponse;
use App\Http\Resources\SectionCompanyResource;
use App\Http\Resources\SectionResource;
use App\Models\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $section = Section::query()->with(['media'])->get();
        return response()->json(['success' => true, 'data' => $section], 200);
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
        $section = new Section();
        $section->name = $request->name;
        $section->save();
        $imageC = new ImageController();
        $image = $imageC->uploadImage($request->image);
        $section->addMedia(storage_path('app\\public\\') . $image)->preservingOriginal()->toMediaCollection('sections');

        return response()->json(['success' => true, 'message' => 'section created', 'data' => $section], 201);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $section = Section::query()->where('id', $id)->with(['media'])->get();
        if ($section->isEmpty())
            return ApiResponse::error(404, 'Not Found');
        return ApiResponse::success(SectionResource::make($section->first()), 200);
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
        $section=Section::FindorFail($id);
        $section->update([$section->name = $request->name]);
        return ApiResponse::success(SectionResource::make($section),200,'Section Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Section $section)
    {

        $section->delete();
       return ApiResponse::success(null,200,'SectionDeleted');
    }
}
