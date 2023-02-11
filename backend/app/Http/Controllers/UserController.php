<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\UpdateUserRequest;
use App\Models\User;
use App\Services\ImageService;

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

            if ($request->hasFile("image")) {
                (new ImageService)->updateImage($user, $request, "/images/users/", "update");
            }

            $user->first_name = $request->input("first_name");
            $user->last_name = $request->input("last_name");
            $user->location = $request->input("location");
            $user->description = $request->input("description");

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
