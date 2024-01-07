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


        if ($user == 0) {
            User::where('id', $request->user()->id)->update([
                'voting' => 1,
                'voting_id' => $id
            ]);

            Voting::create([
                'id_user' => $request->user()->id,
                'id_calon' => $id
            ]);

            Calons::where('id', $id)->increment('suara');

            return view('succes');
        } else {
            return redirect()->back();
        }
    }
}
