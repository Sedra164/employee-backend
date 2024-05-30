<?php

namespace App\Http\Controllers;

use App\Helpers\ApiResponse;
use App\Http\Resources\JobResource;
use App\Models\Job;
use App\Models\sectionCompany;
use App\Models\skillJob;
use Illuminate\Http\Request;



class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
       $sectionId=$request->get('section_id');
        if(!$sectionId){
            $job=Job::query()->with(['media'])->get();
            return ApiResponse::success(JobResource::collection($job),200,'This All the jobs');
        }else{
          $sectionCompany = sectionCompany::query()->where('section_id','=',$sectionId)->get();
             if(is_null($sectionCompany)) {
               return ApiResponse::error(404, 'there are no jobs associated with this section');
             }else{
                $job=Job::query()->with(['media'])->where('section_company_id',$sectionCompany->pluck('id'))->get();
                 return ApiResponse::success(JobResource::collection($job),200,'There is all works that belong to this section');

           }


        }


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
        $job->Age=$request->Age;
        $job->gender=$request->gender;
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
    public function show($jobId)
    {
     $job=Job::with('skillJob.Skill','media')->find($jobId);
     if (!$job){
         return ApiResponse::error(404,'Not Found');
     }
     return ApiResponse::success($job,200);

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
