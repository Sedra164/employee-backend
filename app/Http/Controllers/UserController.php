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
        $user = User::query()->where('id', $id)->get();
        if ($user->isEmpty())
            return ApiResponse::error(404, 'Not Found');
        return ApiResponse::success(UserResource::make($user->first()), 200);
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
            $user=User::findOrFail($id);
            $user->update([
                'user_name'=>$request->user_name,
                'email'=>$request->email,
                'phone'=>$request->phone,
                'password'=>$request->password,

            ]);

            return ApiResponse::success($user,200,'Data has been modified');
        }else{
            return ApiResponse::error(401,'Data cann\'t be modified');
        }



    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return ApiResponse::success(null,200,'userDeleted');
    }
}
