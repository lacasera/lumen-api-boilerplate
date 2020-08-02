<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __invoke(Request $request)
    {
        /**
         * Edit login logic
         * 
        */

        $credentials = $request->only(['email', 'password']);

        $token = auth()->attempt($credentials);
                
        if ($token) {
            $user = auth()->user();

            return $this->respondWithToken($token, $user);

        } else {
            return response()->json([
                'error' => 'phone number and password not found'
            ], 401);
        }
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