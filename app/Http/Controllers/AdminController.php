<?php

namespace App\Http\Controllers;

use App\Models\Calons;
use App\Models\User;
use App\Models\Voting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Symfony\Component\HttpFoundation\Session\Session;

class AdminController extends Controller
{


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

        return view('admin.home', [
            'totalKandidat' => $totalKandidat,
            'jumlahPemilih' => $jumlahPemilih,
            'pemilihTerkini' => $pemilihTerkini,
            'kandidat' => $kandidat,
            'number' => $number
        ]);
    }

    public function calon()
    {

        $kandidat = Calons::all();

        return view('admin.calon', compact('kandidat'));
    }

    public function addCalon(Request $request)
    {

        $calon = Calons::all();

        $this->validate($request, [
            'nama_ketua' => 'required',
            'nama_wakil' => 'required',
            'foto_calon' => 'required | image | mimes:jpg',
            'visi' => 'required',
            'misi' => 'required',
        ]);

        $image = $request->file('foto_calon');
        $nama_foto = $calon->count() + 1 . '.jpg';
        $tujuan_upload = 'foto_calon';
        $image->move($tujuan_upload, $nama_foto);

        Calons::create([
            'id_calon' => $calon->count() + 1,
            'nama_ketua' => $request->nama_ketua,
            'nama_wakil' => $request->nama_wakil,
            'foto_calon' => $nama_foto,
            'visi' => $request->visi,
            'misi' => $request->misi,
        ]);

        return redirect()->back()->with('success', 'Kandidat Berhasil Ditambahkan');
    }

    public function deleteCalon($id)
    {
        Calons::where('id_calon', $id)->delete();

        $image_path = 'foto_calon/' . $id . '.jpg';
        if (File::exists($image_path)) {
            File::delete($image_path);
        }

        return redirect()->back()->with('deleted', 'Kandidat Berhasil Dihapus');
    }

    public function editCalon($id)
    {
        $calon = Calons::where('id_calon', $id)->get();
        return view('admin.editcalon', compact('calon'));
    }

    public function updateCalon(Request $request, $id)
    {
        $this->validate($request, [
            'nama_ketua' => 'required',
            'nama_wakil' => 'required',
            'visi' => 'required',
            'misi' => 'required',
        ]);

        Calons::where('id_calon', $id)->update([
            'nama_ketua' => $request->nama_ketua,
            'nama_wakil' => $request->nama_wakil,
            'visi' => $request->visi,
            'misi' => $request->misi,
        ]);

        return redirect()->route('admin.calon')->with('success', 'Kandidat Berhasil Diubah');
    }
}
