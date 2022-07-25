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

    $user = User::where('id', $request->user()->id)->value('voting');


    if ($user == "false") {
      User::where('id', $request->user()->id)->update([
        'voting' => "true",
        'voting_id' => $id
      ]);

      Voting::create([
        'id_user' => $request->user()->id,
        'nama' => $request->user()->nama,
        'kelas' => $request->user()->kelas,
        'id_calon' => $id
      ]);

      Calons::where('id_calon', $id)->increment('suara');

      return view('succes');
    } else {
      return redirect()->back();
    }
  }
}
