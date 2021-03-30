<H1 style="text-align: center">Data Siswa</H1>
<table align="center" border="1" cellspacing="0" cellpadding="0">
    <thead>
        <tr>
            <th style="padding: 7px">No.</th>
            <th style="padding: 10px">NIS</th>
            <th style="padding: 10px">Nama</th>
            <th style="padding: 10px">Jenis Kelamin</th>
            <th style="padding: 15px">Tempat Lahir</th>
            <th style="padding: 15px">Tgl Lahir</th>
            <th style="padding: 15px">Alamat</th>
            <th style="padding: 15px">Asal Sekolah</th>
            <th style="padding: 15px">Kelas</th>
            <th style="padding: 15px">Jurusan</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
            <tr>
                <th style="padding: 7px">{{ $loop->iteration }}</th>
                <td style="padding: 10px">{{ $item->nis }}</td>
                <td style="padding: 10px">{{ $item->nama }}</td>
                <td style="padding: 10px">{{ $item->jk }}</td>
                <td style="padding: 10px">{{ $item->tempat_lahir }}</td>
                <td style="padding: 10px">{{ $item->tgl_lahir }}</td>
                <td style="padding: 10px">{{ $item->alamat }}</td>
                <td style="padding: 10px">{{ $item->asal_sekolah }}</td>
                <td style="padding: 10px">{{ $item->kelas }}</td>
                <td style="padding: 10px">{{ $item->jurusan }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
