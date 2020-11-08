<?php

namespace App\Http\Controllers;

use App\Models\Track;
use Illuminate\Http\Request;

class TrackController extends Controller
{
    public function getTopTracks()
    {
        return Track::orderBy('searches_count', 'desc')->paginate(5);
    }

    public function getTrack(int $id)
    {
        return Track::with('artistes')->find($id);
    }
}
