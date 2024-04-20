<?php

namespace App\Http\Controllers;


use App\Models\Company;
use App\Models\User;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $company=Company::all();
        return response()->json(['success'=>true,'data'=>$company],200);

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
        $company=Company::create($request->all());

        $company=new Company();
        $company->name=$request->name;
        $company->description=$request->description;
        $company->manager()->associate($request->managerId);
        $company->save();
        return response()->json(['success'=>true,'message'=>'company created','data'=>$company],201);

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

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $company=Company::findOrFail($id);
        $company->delete();
        return response()->json(['success'=>true,'message'=>'company deleted','data'=>$company],200);
    }
}
