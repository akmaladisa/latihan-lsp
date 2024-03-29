@extends('main.layout')

@section('content')
    <center>
        <b>
            <h2>LIST DATA GURU</h2>
            <a href="/guru/create" class="button-primary">TAMBAH DATA</a>

            @if (session('success'))
                <p class="text-success">{{ session('success') }}</p>
            @endif
            @if (session('error'))
                <p class="text-danger">{{ session('error') }}</p>
            @endif

            <table cellPadding="10">
                <tr>
                    <th>NO</th>
                    <th>NIP</th>
                    <th>NAMA GURU</th>
                    <th>JENIS KELAMIN</th>
                    <th>ALAMAT</th>
                    <th>PASSWORD</th>
                    <th>ACTION</th>
                </tr>
                @foreach ($guru as $g)
                    <tr class="text-center">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $g->nip }}</td>
                        <td>{{ $g->nama_guru }}</td>
                        <td>{{ ($g->jk == 'L') ? 'Laki-Laki' : 'Perempuan' }}</td>
                        <td>{{ $g->alamat }}</td>
                        <td>{{ $g->password }}</td>
                        <td>
                            <a href="/guru/edit/{{ $g->id }}" class="button-warning">Ubah</a>
                            <a href="/guru/destroy/{{ $g->id }}" class="button-danger" onclick="return confirm('Yakin Hapus?')">Hapus</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </b>
    </center>
@endsection