<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;

class UserController extends Controller
{

    public function me()
    {
        return response()->json(['data' => auth()->user()]);
    }

    public function logout()
    {
        auth()->logout();
        return response()->json(['data' => 'Successfully logged out']);
    }
    
    public function refresh()
    {
        return $this->respondWithToken(auth()->refresh(), auth()->user());
    }

    private function respondWithToken($token, $user)
    {
        return response()->json([
            'data' => [
                'user' => $user,
                'token' => $token,
                'token_type' => 'bearer',
                'expires_in' => auth()->factory()->getTTL() * 60
            ]
        ], 200);
    }
}