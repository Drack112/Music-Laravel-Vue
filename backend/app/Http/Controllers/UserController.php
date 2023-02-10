<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\UpdateUserRequest;
use App\Models\User;

class UserController extends Controller
{
    public function show(int $id)
    {
        try {
            $user = User::findOrFail($id);

            return response()->json([
                "user" => $user,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Something went wrong in UserController.show',
                "error" => $e->getMessage()
            ]);
        }

    }

    public function update(UpdateUserRequest $request, int $id)
    {
        try {
            $user = User::findOrFail($id);

            $user->first_name = $request->input("firstName");
            $user->last_name = $request->input("lastName");

            $user->save();

            return response()->json("User details updated", 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Something went wrong in UserController.update',
                'error' => $e->getMessage()
            ], 400);
        }
    }
}
