<?php

namespace App\Http\Controllers;


use App\Helpers\ApiResponse;
use App\Http\Resources\CompanyResource;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $company = Company::query()->with(['media'])->get();
        return ApiResponse::success(200,CompanyResource::make($company));

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

        if (Auth::user()->hasRole('superAdmin')) {

            $company = new Company();
            $company->name = $request->name;
            $company->type = '';
            $company->email = '';
            $company->website = '';
            $company->address = '';
            $company->manager()->associate($request->managerId);
            $company->save();
            return ApiResponse::success($company,200,'Company Created');
        } else {
            return ApiResponse::error(403, 'Unauthorized');
        }


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $company = Company::query()->where('id', $id)->with(['media'])->get();
        if ($company->isEmpty())
            return ApiResponse::error(404, 'Not Found');
        return ApiResponse::success(CompanyResource::make($company->first()), 200);
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
       $company=Company::findOrFail($id);
       if(Auth::id()==$company->manager_id)
        {
            $company->type=$request->type;
            $company->email=$request->email;
            $company->website=$request->website;
            $company->address=$request->address;
            $imageC = new ImageController();
            $image = $imageC->uploadImage($request->image);
            $company->addMedia(storage_path('app\\public\\') . $image)->preservingOriginal()->toMediaCollection('companies');
            $company->save();
        return ApiResponse::success(CompanyResource::make($company),200,'Company updated');
        }else{
            return ApiResponse::error(403,'Modification is not allowed');
        }




    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {

        $company->delete();
        return ApiResponse::success(null,200,'CompanyDeleted');

    }
}
