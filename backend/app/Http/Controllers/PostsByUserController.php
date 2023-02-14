<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsByUserController extends Controller
{
    public function show(int $user_id)
    {
        try {
            $posts = Post::where("user_id", "=", $user_id)->get();
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Something went wrong in PostsByUserController.show',
                'error' => $e->getMessage()
            ], 400);
        }
    }
}
