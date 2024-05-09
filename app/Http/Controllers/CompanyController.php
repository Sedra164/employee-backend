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
        $company = Company::query()->with(['media'])->get();
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


        $company=new Company();
        $company->name=$request->name;
        $company->type=$request->type;
        $company->email=$request->email;
        $company->website=$request->website;
        $company->address=$request->address;
        $company->manager()->associate($request->managerId);
        $company->save();
        $imageC = new ImageController();
        $image = $imageC->uploadImage($request->image);
        $company->addMedia(storage_path('app\\public\\') . $image)->preservingOriginal()->toMediaCollection('companies');
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
    public function destroy(Company $company)
    {

        $company->delete();
        return response()->json(['success'=>true,'message'=>'company deleted','data'=> null],200);
    }
}
