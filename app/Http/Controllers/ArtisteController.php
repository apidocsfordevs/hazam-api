<?php

namespace App\Http\Controllers;

use App\Models\Artiste;
use App\Models\Track;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArtisteController extends Controller
{

    public function getTopArtistes()
    {
        return Artiste::select(DB::raw('artistes.name, sum(tracks.searches_count) as total_searches'))
            ->orderBy('total_searches', 'desc')
            ->join('artiste_track', 'artiste_id', 'artistes.id')
            ->join('tracks', 'track_id', 'tracks.id')
            ->groupBy('artistes.name')
            ->paginate(5);
    }

    public function getArtiste(int $id)
    {
        return Artiste::with('tracks')->find($id);
    }
}
