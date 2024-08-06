<!DOCTYPE html>
<html>

<head>
    <title>Contoh Laporan</title>
    <link rel="stylesheet" href="{{ asset('/lib/css/bootstrap.min.css') }}">
</head>

<body>
    <h1 align="center">{{ $judul }}</h1>
    <p>Tanggal Cetak : {{ $tanggal }}</p>
    <p>
        <hr>
    </p>

    <table class="table table-bordered">
        <tr>
            <th style="width: 10px">No.</th>
            <th style="width: 100px">NIK</th>
            <th style="width: 100px">Nama Kepala Keluarga</th>
            <th style="width: 100px;">Jenis Kelamin</th>
            <th style="width: 100px;">Pekerjaan</th>
            <th style="width: 100px;">Tanggal Bantuan</th>
            <th style="width: 100px;">Total Renovasi</th>
            <th style="width: 100px;">Keterangan Bedah Rumah</th>
        </tr>
        <tbody>
            @if($viewrumah->count()>0)
            @foreach ($viewrumah as $data)

            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$data->nik_kk}}</td>
                <td>{{$data->nama_kk}}</td>
                <td>{{$data->jeniskelamin_kk}}</td>
                <td>{{$data->pekerjaan_kk}}</td>
                <td>{{$data->tgl_bantuan}}</td>
                <td>{{$data->jumlah_dana}}</td>
                <td>{{$data->keterangan}}</td>
                @endforeach
                @else
            <tr>
                <td class="text-center" colspan="10">Data Masih Kosong</td>
            </tr>
            @endif
        </tbody>
    </table>
</body>

</html>