<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Section;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;
use Spatie\QueryBuilder\AllowedFilter;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index( Request $request)
    {
        $section = Section::find($request->sectionId);
         if (!is_null($section) && !$section) {
            return response()->json(['message'=>'the section isn\'t exist'],404);

        }
        else {
           $jobs=Job::query()->with(['media'])->get();
         }

       return response()->json(['success' => true, 'data' => $jobs,'message'=>'This all Jobs'], 200);

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
        $job=new Job();
        $job->title=$request->title;
        $job->jobDescription=$request->jobDescription;
        $job->count=$request->count;
        $job->salary=$request->salary;
        $job->sectionCompany()->associate($request->sectionCompanyId);
        $job->save();
        $imageC = new ImageController();
        $image = $imageC->uploadImage($request->image);
        $job->addMedia(storage_path('app\\public\\') . $image)->preservingOriginal()->toMediaCollection('jobs');
        return response()->json(['success'=>true,'data'=>$job],201);
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
    public function destroy(Job $job)
    {
        $job->delete();
        return response()->json(['success'=>true,'data'=>$job],200);
    }
}
