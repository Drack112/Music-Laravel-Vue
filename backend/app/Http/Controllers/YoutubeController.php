<?php

namespace App\Http\Controllers;

use App\Http\Requests\Youtube\YoutubeRequest;
use App\Models\Youtube;
use Illuminate\Http\Request;

class YoutubeController extends Controller
{

    public function store(YoutubeRequest $request)
    {
        try {
            $yt = new Youtube;

            $yt->user_id = $request->get("user_id");
            $yt->title = $request->get("title");
            $yt->url = "https://youtube.com/embed/" . $request->get("url") . "?autoplay=0";


            $yt->save();

            return response()->json("New youtube link saved", 200);

        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Something went wrong in YoutubeController.store',
                "error" => $e->getMessage()
            ]);
        }

    }

    public function show(int $user_id)
    {
        try {
            $videosByUser = Youtube::where('user_id', $user_id)->get();
            return response()->json(['videos_by_user' => $videosByUser], 200);

        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Something went wrong in YoutubeController.show',
                'error' => $e->getMessage()
            ], 400);
        }
    }

    public function destroy(int $id)
    {
        try {
            $yt = Youtube::findOrFail($id);
            $yt->delete();

            return response()->json('Video deleted', 200);

        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Something went wrong in YoutubeController.destroy',
                'error' => $e->getMessage()
            ], 400);
        }
    }
}