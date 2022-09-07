<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Calons;
use App\Models\User;
use App\Models\Voting;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $totalKandidat = Calons::count();
        $jumlahPemilih = User::count();
        $pemilihTerkini = Voting::orderBy('created_at', 'desc')->limit(4)->get();
        $kandidat = Calons::all();
        $number = [
            ['index' => 0],
            ['index' => 1],
            ['index' => 2],
            ['index' => 3]
        ];

        return view('admin.pages.dashboard.index', [
            'totalKandidat' => $totalKandidat,
            'jumlahPemilih' => $jumlahPemilih,
            'pemilihTerkini' => $pemilihTerkini,
            'kandidat' => $kandidat,
            'number' => $number
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
