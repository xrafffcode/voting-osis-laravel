<?php

namespace App\Http\Controllers;

use App\Models\Calons;
use App\Models\User;
use App\Models\Voting;
use Illuminate\Http\Request;

class VotingController extends Controller
{
    public function vote(Request $request, $id)
    {
      User::where('id', $request->user()->id)->update([
        'voting' => "true"
      ]);

      Voting::create([
        'nama' => $request->user()->nama,
        'kelas' => $request->user()->kelas,
        'id_calon' => $id
      ]);

      Calons::where('id_calon', $id)->increment('suara');

      return redirect()->back()->with('success', 'Terima kasih telah memilih');
    }
    
}
