<?php

namespace App\Http\Controllers;
use App\Models\sectionCompany;
use App\Models\Section;
use App\Models\Company;
use Illuminate\Http\Request;

class sectionCompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sectionCompany=sectionCompany::all();
        return response()->json(['success'=>true,'data'=>$sectionCompany],200);
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
        $sectionCompany=new sectionCompany();
        $sectionCompany->company()->associate($request->companyId);
        $sectionCompany->section()->associate($request->sectionId);
        $sectionCompany->save();
        return response()->json(['success'=>true,'data'=>$sectionCompany],200);
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
