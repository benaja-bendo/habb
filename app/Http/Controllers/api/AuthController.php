<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Commercial;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function user()
    {
        return 'Authenticated user';
    }

    public function register(Request $request)
    {

    }

    public function login()
    {
//        Auth::attempt([
//            'telephone'=>$request->input('telephone'),
//            'password'=>$request->input('password'),
//        ]);
//        if (!Auth::attempt($request->only('telephone', 'password'))) {
//            return response([
//                'message'=>'donne invalide'
//            ],Response::HTTP_UNAUTHORIZED);
//        }else{
//            return Auth::commercial();
//        }

        /*
         * Methode 2
         * */
        $isphone = Commercial::where('telephone', request('telephone'))->first();

        if ($isphone != null) {
            if (Hash::check(request('password'), $isphone->password)){
                $token = $isphone->createToken('token')->plainTextToken;
                $cookie = Cookie::get('jwt',$token);
//                $cookie = cookie('jwt',$token,60*24);//1 jour
                return response([
                    'token'=>$token,
                    'user'=>$isphone
                ],Response::HTTP_ACCEPTED)->withCookie($cookie);
            }else{
                return response([
                    'message'=>'identifier invalide'
                ],Response::HTTP_UNAUTHORIZED);
            }
        }else{
            return response([
                'message'=>'identifier invalide'
            ],Response::HTTP_UNAUTHORIZED);
        }
    }
}
