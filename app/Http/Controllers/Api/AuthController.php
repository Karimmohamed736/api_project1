<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Contracts\Auth\Factory;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $req){
        $rules = [
            "email" => 'required|email',
            "password"=>'required|min:8',
        ];
        $validator = Validator::make($req->all(),$rules);
        if ($validator->failed()) {
            return response()->json(['error'=>true,'message'=>$validator->errors()],200);
        }

        $cred =request(['email', 'password']);
        
        $token = Auth::guard('api')->attempt($cred);

        if (!$token) {
            return response()->json(['error'=>true,'message'=>'Unvalid token'],200);
        }
        return response()->json([
            'asscess_token'=>$token,
            // 'expire_in'=>auth('api')->factory()->getTTL()*3600,  //when the session end
        ]);
    }

    public function logout(){
        auth('api')->logout();
        return response()->json(['error'=>false, 'message'=>'logout'],200);
    }
}
