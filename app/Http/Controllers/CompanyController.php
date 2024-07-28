<?php

namespace App\Http\Controllers;


use App\Helpers\ApiResponse;
use App\Http\Resources\CompanyResource;
use App\Models\Company;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use League\Glide\Api\Api;
use function Laravel\Prompts\confirm;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $company = Company::where('confirm',1)->with(['media'])->get();
        return ApiResponse::success($company,200);

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
        if (Auth::user()->hasRole('admin'))
        {
            $company = new Company();
            $company->name = $request->name;
            $company->type = $request->type;
            $company->email = $request->email;
            $company->website = $request->website;
            $company->address = $request->address;
            $company->phone=$request->phone;
            $company->mobile=$request->mobile;
            $company->manager()->associate($request->managerId);
            $imageC = new ImageController();
            $image = $imageC->uploadImage($request->image);
            $company->addMedia(storage_path('app\\public\\') . $image)->preservingOriginal()->toMediaCollection('companies');
            $company->save();
            return ApiResponse::success($company,200,'Company Created');
        } else {
            return ApiResponse::error(403, 'Unauthorized');
        }


    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $user=Auth::user();
        if($user->hasRole('superAdmin')) {
            $companies = Company::where('confirm', 0)->get();
            foreach ($companies as $company) {
                $companyName = $company->name;
                $managerFirstName = $company->manager->first_name;
                $managerLastName = $company->manager->last_name;
                $data=['company'=>$companyName,
                       'manager'=>$managerFirstName." ".$managerLastName];
               return ApiResponse::success($data,200);
            }

        }else{
            return ApiResponse::error(401,'there are no permission');

        }


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
            $company->phone=$request->phone;
            $company->mobile=$request->mobile;
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
        if(Auth::user()->hasRole('superAdmin')){
        $company->delete();
        return ApiResponse::success(null,200,'CompanyDeleted');
        }else{
            return ApiResponse::error(401,'There are no permissions to delete');
        }


    }
    public function updateConfirm($companyId){
        $user=Auth::user();
        $company=Company::findOrFail($companyId);
        if($user->hasRole('superAdmin') ) {
            if ( $company->confirm != 1){
                $company->confirm = 1;
                $company->save();
                return ApiResponse::success($company, 200, 'The Company has been accepted');
            }else{
                return ApiResponse::error(401,'The Company was rejected');
        }

         }else{
            return ApiResponse::error(401,'there are no permission');
        }

    }
    public function checkManagerId($managerId){
        $user=User::find($managerId);
        if($user && $user->company){
            $company=$user->company()->first();
            return ApiResponse::success(CompanyResource::make($company),200);
        }else{
            return ApiResponse::error(401,'null');
        }


    }
    public function getAllCompany()
    {
      if(Auth::user()->hasRole("superAdmin"))
        { $company = Company::query()->with(['media'])->get();
        return ApiResponse::success($company,200);
        } else 
            return ApiResponse::error(401,'there are no permission');
    }
    
}
