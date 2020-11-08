<?php

namespace App\Http\Controllers;

use App\Models\Track;
use Illuminate\Http\Request;

class MatchController extends Controller
{

    public function matchFromAudioUpload(Request $request)
    {
        $data = $request->validate([
            'sample' => 'required|file|mimes:mp3,wav,m4a,aac|max:5000'
        ]);

        // Theory: Run sophisticated algorithm logic here and return a matched track
        // Real-life: Return a random track 70% of the time.
        if (rand(0, 100) > 29) {
            return Track::inRandomOrder()->first();
        }

        return response()->json([
            'message' => "Couldn't find a matching track in that audio sample.",
            "code" => "NO_MATCH",
        ], 400);
    }
}
