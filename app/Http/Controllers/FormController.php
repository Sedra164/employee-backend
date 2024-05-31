<?php

namespace App\Http\Controllers;

use App\Helpers\ApiResponse;
use App\Models\Form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Request $request){

        if(!Auth::user()){
            return ApiResponse::error(401,'You Need Login First');
        }
        else{
            $request->validate([
                'first_name' => 'required|min:3',
                'last_name'=>'required|min:3',
                'father_name'=>'required|min:3',
                'mother_name'=>'required|min:3',
                'age'=>'required',
                'gender'=>'required',
                'martial_social'=>'required',
                'address'=>'required',
                'phone' => 'required|min:10',
                'birth_date'=>'required|date',

            ]);
            $form=new Form();
            $form->first_name = $request->first_name;
            $form->last_name = $request->last_name;
            $form->father_name = $request->father_name;
            $form->mother_name = $request->mother_name;
            $form->age = $request->age;
            $form->gender = $request->gender;
            $form->martial_social = $request->martial_social;
            $form->address = $request->address;
            $form->phone = $request->phone;
            $form->birth_date=date($request->birth_date);
            $form->user()->associate($request->userId);
            $form->job()->associate($request->jobId);
            $form->save();
            return ApiResponse::success($form,200,'form create successfully');

        }


    }

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
        if(Auth::user()){
            $form=Form::findOrFail($id);
            $form->update([
                'martial_social'=>$request->martial_social,
                'phone'=>$request->phone,
                'address'=>$request->address,
            ]);
            return ApiResponse::success($form,200,'Data has been modified');
        }else{
            return ApiResponse::error(401,'Data cann\'t be modified');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Form $form)
    {
        $form->delete();
        return ApiResponse::success(null,200,'Form Deleted');
    }
}
