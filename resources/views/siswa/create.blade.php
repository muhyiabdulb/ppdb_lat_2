@extends('layouts.master', ['title' => 'Hal Siswa'])

@section('content')
    <div class="app-main__inner">
        <div class="tab-content">
            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <h5 class="card-title">Daftar</h5>
                        <form action="{{ route('siswa.store') }}" method="POST">
                            @csrf
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="nis" class="">NIS</label>
                                        <input name="nis" id="nis" placeholder="NIS ..." type="text" class="form-control">
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
                                        <input name="nama" id="nama" placeholder="Nama ..." type="text"
                                            class="form-control">
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
                                            <option selected disabled>Pilih JK</option>
                                            <option value="L">Laki-laki</option>
                                            <option value="P">Perempuan</option>
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
                                        <input name="tempat_lahir" id="tempat_lahir" type="text" class="form-control">
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
                                        <input name="tgl_lahir" id="tgl_lahir" type="date" class="form-control">
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
                                            class="form-control"></textarea>
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
                                        <input name="asal_sekolah" id="asal_sekolah" placeholder="Asal Sekolah ..."
                                            type="text" class="form-control">
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
                                        <input name="kelas" id="kelas" placeholder="Kelas ..." type="text"
                                            class="form-control">
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
                                        <input name="jurusan" id="jurusan" placeholder="Jurusan ..." type="text"
                                            class="form-control">
                                        @error('jurusan')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="mt-2 btn btn-primary">Daftar</button>
                            <button type="reset" class="mt-2 btn btn-success">Bersihkan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
