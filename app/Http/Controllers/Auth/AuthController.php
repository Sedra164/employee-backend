<?php

namespace App\Http\Controllers\Auth;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Throwable;

class AuthController extends Controller

{
    //
    public function login(Request $req)
    {
        try {

            $req->validate(['userName' => 'required|alpha_dash|min:4|exists:users,user_name',
                'password' => 'required|min:6'
            ]);

            $token = Auth::attempt(['user_name' => $req->userName, 'password' => $req->password]);
            if ($token) {
                $user = Auth::user();
                $user->access_token = $token;
                return response()->json($user,200);
            } else {

                return response()->json(['message' => 'Please Check Your Password And Try Again'], 401);
            }
        } catch (Throwable$e) {

            return response()->json(['message' => $e->getMessage()], 401);
        }


    }


    public function logout()
    {
        try {
            Auth::logout();
            return response()->json();
        } catch (Throwable $e) {


            return response()->json(['message' => $e->getMessage()], 402);
        }
    }

    public function register(Request $req)
    {
        try {
            $req->validate([
                'fullName' => 'required|min:3',
                'userName' => 'required|min:4|alpha_dash|unique:users,user_name',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:6',
                'phone' => 'required|min:10',
                'idNumber'=>'required|min:12',
            ]);

            $user = new User();
            $user->user_name = $req->userName;
            $user->first_name = explode(' ', $req->fullName)[0];
            $user->last_name = explode(' ', $req->fullName)[1];
            $user->password = Hash::make($req->password);
            $user->email = $req->email;
            $user->phone = $req->phone;
            $user->idNumber = $req->idNumber;
//            $user->assignRole('user');
            $user->save();
            $token = Auth::attempt(['user_name' => $user->user_name, 'password' => $req->password]);
            if (!$token) {
                return response()->json(['message' => 'User Not Authenticated'], 401);
            } else {
//                event(new SendOtp($req->email));
                $user->access_token = $token;
                return response()->json(['message' => 'User Authenticated', 'data' => $user], 200);
            }

        } catch (Throwable $exception) {
            return response()->json(['message' => $exception->getMessage()], 401);
        }
    }

    public function verifyEmail(Request $request)
    {
        $request->validate(['code' => 'required|min:4|max:4']);

        $user = Auth::user();

        $otp = (new Otp)->validate($user->email, $request->code);
        if ($otp->status == false) {
            return ApiResponse::error(401, $otp->message);

        } else {
            $user->email_verified_at = now();
            $user->save();
            return ApiResponse::success(null, 200, 'Successfully Verified');
        }

    }

    public function forgetPassword(Request $request)
    {
        $validatedData = Validator::make($request->all(), ['email' => 'required|exists:users,users.email']);
        if ($validatedData->valid()) {
            event(new SendOtp($request->email, true));
            return ApiResponse::success(null, 200, 'Otp Send');
        } else {
            return ApiResponse::error(425, 'User Not Found');
        }


    }

    public function resendOtp(Request $request)
    {
        event(new SendOtp($request->email));
        return ApiResponse::success(null, 200, 'Otp Snet Successfully');
    }

    public function resetPassword(Request $request)
    {
        $validated = Validator::make($request->all(), ['newPassword' => 'required|min:6', 'code' => 'required|min:4|max:4']);
        if ($validated->valid()) {
            $otp = (new Otp)->validate($request->email, $request->code);
            if ($otp->status == true) {
                $user = User::where('email', $request->email)->first();
                $user->password = Hash::make($request->newPassword);
                $user->save();
                return ApiResponse::success(null, 200, 'Password Reseted Successfully');
            } else {

                return ApiResponse::error(425, 'Wrong Code Please Try Again');
            }

        } else {
            return ApiResponse::error(425, 'Please  Validate Your Inputs');
        }
    }

}
