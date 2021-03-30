<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Siswa;
Use Alert;
use PDF;

class SiswaController extends Controller
{
    public function dashboard()
    {
        return view('siswa.dashboard');
    }
    public function index()
    {
        $siswas = Siswa::all();
        return view('siswa.index', compact('siswas'));
    }
    public function create()
    {
        return view('siswa.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'jk' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
            'asal_sekolah' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
        ]);

        $siswa = $request->all();
        $siswa['user_id'] = auth()->user()->id;
        Siswa::create($siswa);

        Alert::success('Pemberitahun', 'Berhasil Ditambahkan :)');
        return redirect()->route('siswa.index');
    }
    public function edit(Siswa $siswa)
    {
        return view('siswa.edit', compact('siswa'));
    }
    public function update(Request $request, Siswa $siswa)
    {   
        $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'jk' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
            'asal_sekolah' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
        ]);

        $siswa->update($request->all());

        Alert::success('Pemberitahun!', 'Berhasil Diupdate :)');
        return redirect()->route('siswa.index');
    }
    public function destroy(Siswa $siswa)
    {
        $siswa->delete();
        Alert::success('Pemberitahun', 'Berhasil Dihapus :)');
        return redirect()->route('siswa.index');
    }
     public function pdf()
    {
        $data = Siswa::all();
        // dd($data);
        $pdf = PDF::setOptions([
                'dpi' => 150,
                'defaultFont' => 'sans-serif'
            ])->loadview('siswa.pdf', compact('data'));
        return $pdf->download('data-siswa-'.date('Y-m-d_H-i-s').'.pdf');
        // return $pdf->stream('history-transaksi-'.date('Y-m-d_H-i-s').'.pdf');
    }
}
