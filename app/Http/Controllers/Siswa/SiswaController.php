<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Siswa;
Use Alert;

class SiswaController extends Controller
{
    public function dashboard()
    {
        return view('siswa.dashboard');
    }
    public function index()
    {
        $siswa =  Siswa::where('id', auth()->user()->id)->get();
        return view('siswa.index', compact('siswa'));
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

        Alert::success('Pemberitahun', 'Selamat Anda telah daftar :)');
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
    public function destroy()
    {
        return view('siswa.dashboard');
    }
}
