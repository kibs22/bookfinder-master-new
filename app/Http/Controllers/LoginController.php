<?php

namespace App\Http\Controllers;

use JWTAuth;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Tymon\JWTAuth\Exceptions\JWTException;



class LoginController extends Controller
{
    public function authenticate(LoginRequest $request)
    {
        // grab credentials from the request
        $credentials = $request->only('email', 'password');

        try {
            // attempt to verify the credentials and create a token for the user
            if (! $token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'invalid_credentials'], 401);
            }
        } catch (JWTException $e) {
            // something went wrong whilst attempting to encode the token
            return response()->json(['error' => 'could_not_create_token'], 500);
        }

        // all good so return the token
        $user = \App\User::whereEmail($credentials['email'])->first();

        return response()->json(compact('user'))->header('Authorization', "Bearer {$token}");
    }

    public function getUsers(){

        return response()->json([
            [
                'name' => 'adrian'
            ],
            [
                'name' => 'zester'
            ]

        ]);
    }
}
