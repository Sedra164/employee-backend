<?php

namespace App\Http\Controllers;

use App\Helpers\ApiResponse;
use App\Http\Resources\JobResource;
use App\Models\Job;
use App\Models\sectionCompany;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;


class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $sectionCompany = sectionCompany::find($request->sectionId);
        if (!is_null($sectionCompany ) && !$sectionCompany ) {
            return ApiResponse::error(404, 'This Section isn\'t Exist');
        }
        else  if (!is_null( $sectionCompany)) {
            $ids = [];
            $sectionCompanies = $sectionCompany->section;
            foreach ($sectionCompanies as $e) {
                $ids[] = $e->id;
            }
        $jobs=QueryBuilder::for(Job::query()->with(['media'])->whereIn('sectionCompany_id', $ids,))->allowedFilters(['sectionCompany_id'])->defaultSort('-updated_at');
        }
        return ApiResponse::success(JobResource::collection($jobs->items()), 200, 'This Is All jobs');

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
        $job = Job::query()->where('id', $id)->with(['media','SectionCompany'])->get();
        if ($job->isEmpty())
            return ApiResponse::error(404, 'Not Found');
        return ApiResponse::success(JobResource::make($job->first()), 200);

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
