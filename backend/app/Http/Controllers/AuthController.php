<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\LogoutRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(RegisterRequest $request)
    {
        try {
            $user = User::create([
                'first_name' => $request->input('first_name'),
                'last_name' => $request->input('last_name'),
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password'))
            ]);

            $token = $user->createToken('user_token')->plainTextToken;

            return response()->json(['user' => $user, 'token' => $token], 200);

        } catch (\Exception $e) {
            return response()->json([
                'error' => $e->getMessage(),
                'message' => 'Something went wrong in AuthController.register'
            ]);
        }
    }

    public function login(LoginRequest $request)
    {
        try {
            $user = User::where("email", "=", $request->input("email"))->firstOrFail();

            if (Hash::check($request->input("password"), $user->password)) {
                $token = $user->createToken("user_token")->plainTextToken;
                return response()->json([
                    "user" => $user,
                    "token" => $token,
                ]);
            }

            return response()->json([
                "error" => "Your password does not match!",
            ], 403);


        } catch (\Exception $e) {
            return response()->json([
                "error" => $e->getMessage(),
                "message" => "Something went wrong in AuthController.login"
            ], 400);
        }
    }

    public function logout(LogoutRequest $request)
    {
        try {
            $user = User::findOrFail($request->input("user_id"));

            $user->tokens()->delete();

            return response()->json("User logged out", 200);
        } catch (\Exception $e) {
            return response()->json([
                "error" => $e->getMessage(),
                "message" => "Something went wrong in AuthController.logout"
            ], 400);
        }
    }
}
