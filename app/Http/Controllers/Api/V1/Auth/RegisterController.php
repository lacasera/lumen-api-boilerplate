<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\Http\Controllers\Controller;

use App\Models\User;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;

class RegisterController extends Controller
{
    public function __invoke(Request $request)
    {
        /**
         * edit registering a user logic
        */
        
        $user = User::create($request->all());
        
        $token = JWTAuth::fromUser($user);
        
        return response()->json([
            'data' => compact('token', 'user')
        ], 201);
    }
}
