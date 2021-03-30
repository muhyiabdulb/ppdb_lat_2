@extends('layouts.master', ['title' => 'Hal Siswa'])

@section('content')
    <div class="app-main__inner">
        <div class="tab-content">
            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <h5 class="card-title">Daftar</h5>
                        <form action="{{ route('siswa.update', $siswa->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="nis" class="">NIS</label>
                                        <input name="nis" id="nis" value="{{ $siswa->nis }}" placeholder="NIS ..."
                                            type="text" class="form-control">
                                        @error('nis')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="nama" class="">Nama</label>
                                        <input name="nama" id="nama" value="{{ $siswa->nama }}" placeholder="Nama ..."
                                            type="text" class="form-control">
                                        @error('nama')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="position-relative form-group">
                                        <label for="nis">Jenis Kelamain</label>
                                        <select name="jk" class="form-control">
                                            <option value="{{ $siswa->jk }}">{{ $siswa->jk }}</option>
                                            <option value="Laki-laki">Laki-laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                        @error('jk')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="tempat_lahir" class="">Tempat
                                            Lahir</label>
                                        <input name="tempat_lahir" id="tempat_lahir" value="{{ $siswa->tempat_lahir }}"
                                            type="text" class="form-control">
                                        @error('tempat_lahir')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="tgl_lahir" class="">Tgl
                                            Lahir</label>
                                        <input name="tgl_lahir" id="tgl_lahir" value="{{ $siswa->tgl_lahir }}"
                                            type="date" class="form-control">
                                        @error('tgl_lahir')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="position-relative form-group">
                                        <label for="alamat" class="">Alamat</label>
                                        <textarea name="alamat" id="alamat" placeholder="Alamat ..." type="text"
                                            class="form-control">{{ $siswa->alamat }}</textarea>
                                        @error('alamat')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label for="asal_sekolah" class="">Asal Sekolah</label>
                                        <input name="asal_sekolah" id="asal_sekolah" value="{{ $siswa->asal_sekolah }}"
                                            placeholder="Asal Sekolah ..." type="text" class="form-control">
                                        @error('asal_sekolah')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label for="kelas" class="">Kelas</label>
                                        <input name="kelas" id="kelas" value="{{ $siswa->kelas }}"
                                            placeholder="Kelas ..." type="text" class="form-control">
                                        @error('kelas')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label for="jurusan" class="">Jurusan</label>
                                        <input name="jurusan" id="jurusan" value="{{ $siswa->jurusan }}"
                                            placeholder="Jurusan ..." type="text" class="form-control">
                                        @error('jurusan')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="mt-2 btn btn-primary">Daftar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
