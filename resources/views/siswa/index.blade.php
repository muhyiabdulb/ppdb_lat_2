@extends('layouts.master', ['title' => 'Hal Siswa'])

@section('content')
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-car icon-gradient bg-mean-fruit">
                        </i>
                    </div>
                    <div>Hallo, {{ Auth::user()->name }}</div>
                </div>
                <div class="page-title-actions">
                    <div class="d-inline-block dropdown">
                        <a href="{{ route('siswa.create') }}" class="btn-shadow dropdown-toggle btn btn-info">
                            <span class="btn-icon-wrapper pr-2 opacity-7">
                                <i class="fa fa-plus"></i>
                            </span>
                            Daftar
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-header">
                        Data Siswa
                        <a class="ml-5 btn btn-secondary mr-2" href="{{ route('siswa.pdf') }}"><i
                                class="fas fa-download"></i>
                            PDF</a>
                    </div>
                    <div class="table-responsive">
                        <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center">NIS</th>
                                    <th class="text-center">Nama</th>
                                    <th class="text-center">Jenis Kelamin</th>
                                    <th class="text-center">Tempat Lahir</th>
                                    <th class="text-center">Tgl Lahir</th>
                                    <th class="text-center">Alamat</th>
                                    <th class="text-center">Asal Sekolah</th>
                                    <th class="text-center">Kelas</th>
                                    <th class="text-center">Jurusan</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($siswas as $item)
                                    <tr>
                                        <td class="text-center text-muted">{{ $item->nis }}</td>
                                        <td class="text-center">{{ $item->nama }}</td>
                                        <td class="text-center text-muted">{{ $item->jk }}</td>
                                        <td class="text-center">{{ $item->tempat_lahir }}</td>
                                        <td class="text-center text-muted">{{ $item->tgl_lahir }}</td>
                                        <td class="text-center">{{ $item->alamat }}</td>
                                        <td class="text-center text-muted">{{ $item->asal_sekolah }}</td>
                                        <td class="text-center">{{ $item->kelas }}</td>
                                        <td class="text-center text-muted">{{ $item->jurusan }}</td>
                                        <td>
                                            <form action="{{ route('siswa.delete', $item->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{ route('siswa.edit', $item->id) }}"
                                                    class="mr-2 btn-icon btn-icon-only btn btn-outline-success">
                                                    <i class="pe-7s-pen btn-icon-wrapper"></i> Edit
                                                </a>

                                                <button class="mr-2 btn-icon btn-icon-only btn btn-outline-danger"
                                                    type="submit"><i class="pe-7s-trash btn-icon-wrapper"></i> Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="9" class="text-center text-muted">
                                            <h4>Data Kosong</h4>
                                        </td>
                                    </tr>
                                @endforelse

                            </tbody>
                        </table>
                    </div>
                    <div class="d-block text-center card-footer">
                        test
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
