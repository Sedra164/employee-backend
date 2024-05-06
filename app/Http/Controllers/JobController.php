<?php

namespace App\Http\Controllers;

use App\Models\Job;

use Illuminate\Http\Request;
use spatie\QueryBuilder\QueryBuilder;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index( Request $request)
    {
        $job=Job::find($request->sectionId);
        if(!is_null($job)&&!$job)
        {
            return response()->json(['message'=>'This section isn\'t Exist'],200);
        }else{
            $job=QueryBuilder::for(Job::query())->allowedFilters(['name','section_id'])->defaultSort('-updated_at')->Paginate(request()->perPage);
        }
        return response()->json(['success'=>true,'data'=>$job,'message'=>'this is all jobs'],200);
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
