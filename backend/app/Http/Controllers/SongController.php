<?php

namespace App\Http\Controllers;

use App\Http\Requests\Song\SongRequest;
use App\Models\Song;
use App\Models\User;

class SongController extends Controller
{
    public function store(SongRequest $request)
    {
        try {
            $file = $request->file;

            if (empty($file)) {
                return response()->json("No Song uploaded", 400);
            }

            $user = User::findOrFail($request->get("user_id"));

            $song = $file->getClientOriginalExtension();
            $file->move("songs/", $user->id, $song);

            Song::create([
                "user_id" => $request->get("user_id"),
                "title" => $request->get("title"),
                "song" => $song,
            ]);

            return response()->json("Song saved", 200);
        } catch (\Exception $e) {
            return response()->json([
                "error" => $e->getMessage(),
                "message" => "Something went wrong in SongController.show"
            ], 400);
        }
    }

    public function destroy(int $id, int $user_id)
    {
        try {
            $song = Song::findOrFail($id);

            $currentSong = public_path() . "/songs/" . $user_id . "/" . $song->song;

            if (file_exists($currentSong)) {
                unlink($currentSong);
            }

            $song->delete();

            return response()->json("Song Deleted", 200);

        } catch (\Exception $e) {
            return response()->json([
                "error" => $e->getMessage(),
                "message" => "Something went wrong in SongController.destroy"
            ], 400);
        }
    }
}