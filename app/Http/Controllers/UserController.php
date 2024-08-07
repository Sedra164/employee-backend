<?php

namespace App\Http\Controllers;
use App\Helpers\ApiResponse;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */



    public function index()
    {



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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

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
    public function destroy(User $user)
    {
        $user->delete();
        return ApiResponse::success(null,200,'userDeleted');
    }

    public function getProfile(Request  $request){
        if (Auth::user()){
            $user=Auth::user();
            return ApiResponse::success(UserResource::make($user),200);
        }else{
            return ApiResponse::error(404,'User is not logged in');
        }
    }

    public function updateProfile(Request $request){
        if(Auth::user()){
            $user=Auth::user();
            $user->user_name=$request->user_name;
            $user->email=$request->email;
            $user->phone=$request->phone;
            $user->password=$request->password;
            $user->save();
            return ApiResponse::success($user,200,'Data has been modified');
        }else{
            return ApiResponse::error(401,'Data cann\'t be modified');
    }
    }



}
