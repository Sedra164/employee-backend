<?php

namespace App\Http\Controllers;

use App\Helpers\ApiResponse;
use App\Http\Resources\JobResource;
use App\Models\Job;
use App\Models\sectionCompany;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Services\JobRecommendationService;
use Illuminate\Support\Facades\Http;


class JobController extends Controller

{


    protected $jobService;

    public function __construct(JobRecommendationService $jobService)
    {
        $this->jobService = $jobService;
    }

    public function train(Request $request)
    {
       // $filePath = $request->file('dataset')->getPathname();
        $ds=$request->input('sample');
        $x=$this->jobService->trainModel($ds);

        return response()->json(['message' => 'Model trained successfully','Result'=>$x]);
    }
    public function getJobs(Request $request){
        $xValue=$request->input('x');
        $jobs=Job::where('title',$xValue)->get();
        if($jobs->isEmpty()){
           return ApiResponse::error(404,'There are no job opportunities belongs to this category');
        }else {
            return ApiResponse::success($jobs, 200);
        }
    }


    public function recommend(Request $request)
    {
        $sample = $request->input('sample');
        $prediction = $this->jobService->predict($sample);

        return response()->json(['recommended_job' => $prediction]);
    }





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
        $user=Auth::user();
        $sectionCompany=sectionCompany::where('section_manager_id',$user->id)->first();
        if($sectionCompany){
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
             return ApiResponse::success($job,200,'job created successfully');
          }
            else{
               return ApiResponse::error(403,'It is not allowed to add jobs');
                }
    }

    /**
     * Display the specified resource.
     */
    public function show($jobId)
    {
     $job=Job::with('skillJob.Skill','media','educationJob.Education')->find($jobId);
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
        $user=Auth::user();
        $sectionCompany=sectionCompany::where('section_manager_id',$user->id)->first();
        if($sectionCompany){
        $job->delete();
        return response()->json(['success'=>true,'data'=>$job],200);
        }else{
            return ApiResponse::error(403,'It is not allowed to delete jobs');
        }
    }

}
