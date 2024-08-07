<?php

namespace App\Http\Controllers;
use App\Helpers\ApiResponse;
use App\Http\Resources\SectionCompanyResource;
use App\Http\Resources\SectionResource;
use App\Models\sectionCompany;
use App\Models\Section;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    public function store(Request $request,string $id)
    {
        $company=Company::findOrFail($id);
        if(Auth::id()==$company->manager_id) {
            $sectionCompany = new sectionCompany();
            $sectionCompany->company()->associate($request->companyId);
            $sectionCompany->section()->associate($request->sectionId);
            $sectionCompany->sectionManager()->associate($request->sectionManagerId);
            $sectionCompany->save();
            return ApiResponse::success($sectionCompany, 200);
        }else{
            return ApiResponse::error(403, 'Unauthorized');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $sectionCompany = sectionCompany::query()->where('id', $id)->with(['company','section'])->get();
        if ($sectionCompany->isEmpty())
            return ApiResponse::error(404, 'Not Found');
        return ApiResponse::success(SectionCompanyResource::make($sectionCompany->first()), 200);
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
    public function update(Request $request, string $id,company $company)
    {
        $sectionCompany=sectionCompany::findOrFail($id);
        if(Auth::id()==$company->manager_id){
            $sectionCompany->sectionManager()->associate($request->sectionManagerId);
            $sectionCompany->save();
            return ApiResponse::success($sectionCompany,200,'sectionAdmin updated');
        }else{
            return ApiResponse::error(403,'Modification is not allowed');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( sectionCompany $sectionCompany,Company $company)
    {
        if(Auth::id()==$company->manager_id){
            $sectionCompany->delete();
            return ApiResponse::success(null,200,'CompanyDeleted');
        }else{
            return ApiResponse::error(401,'There are no permissions to delete');
        }
    }
}
