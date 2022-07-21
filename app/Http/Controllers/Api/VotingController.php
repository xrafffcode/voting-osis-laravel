<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Calons;
use App\Models\Voting;
use App\Models\User;

class VotingController extends Controller
{
    public function getSuara()
    {
        $totalSuara = Calons::all();

        return response()->json($totalSuara);
    }

    public function getPemilihTerkini()
    {
        $pemilihTerkini = Voting::orderBy('created_at', 'desc')->limit(4)->get();
        return response()->json($pemilihTerkini);
    }

    public function getSudahMemilih()
    {
        $sudahMemilih = User::where('voting', "true")->count();
        return response()->json($sudahMemilih);
    }
}
