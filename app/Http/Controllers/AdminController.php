<?php

namespace App\Http\Controllers;

use App\Models\Calons;
use App\Models\ImportPemilih;
use App\Models\User;
use App\Models\Voting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Symfony\Component\HttpFoundation\Session\Session;
use Maatwebsite\Excel\Facades\Excel;


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

    public function importPemilih(Request $request)
    {
        // validasi
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);

        Excel::import(new ImportPemilih, $request->file('file'));

        return redirect()->back()->with('success', 'Pemilih berhasil di import');
    }

    public function downloadTemplate()
    {
        $file = public_path('template_excel\import_pemilih.xlsx');
        return response()->download($file);
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
            'id' => $calon->count() + 1,
            'nama_ketua' => $request->nama_ketua,
            'nama_wakil' => $request->nama_wakil,
            'foto_calon' => $nama_foto,
            'visi' => $request->visi,
            'misi' => $request->misi,
        ]);

        return redirect()->route('calon.index')->with('success', 'Kandidat Berhasil Ditambahkan');
    }

    public function deleteCalon($id)
    {
        $table = Calons::where('id', $id)->delete();

        $image_path = 'foto_calon/' . $id . '.jpg';
        if (File::exists($image_path)) {
            File::delete($image_path);
        }

        return redirect()->back()->with('deleted', 'Kandidat Berhasil Dihapus');
    }

    public function editCalon($id)
    {
        $calon = Calons::where('id', $id)->get();
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

        Calons::where('id', $id)->update([
            'nama_ketua' => $request->nama_ketua,
            'nama_wakil' => $request->nama_wakil,
            'visi' => $request->visi,
            'misi' => $request->misi,
        ]);

        return redirect()->route('admin.calon')->with('success', 'Kandidat Berhasil Diubah');
    }

    public function dataPemilih()
    {
        return view('admin.pemilih', [
            'pemilih' => User::with(['calons', 'kelas'])->get()
        ]);
    }

    public function resetPemilih($id, $id_calon)
    {

        Voting::where('id_user', $id)->delete();
        Calons::where('id', $id_calon)->decrement('suara');

        User::where('id', $id)->update([
            'voting' => 0,
            'id_calon' => NULL
        ]);

        return redirect()->back()->with('success', 'Pemilih Berhasil Direset');
    }

    public function deletePemilih($id)
    {
        User::where('id', $id)->delete();
        return redirect()->back()->with('deleted', 'Pemilih Berhasil Dihapus');
    }
}
