@extends('main.layout')

@section('content')
    <center>
        <h2>Edit Data Mata Pelajaran</h2>
        <form action="/mapel/update/{{ $mapel->id }}" method="POST">
            @csrf
            <table width="50%">
                <tr>
                    <td class="bar">Mata Pelajaran</td>
                    <td class="bar">
                        <input type="text" name="nama_mapel" value="{{ $mapel->nama_mapel }}">
                    </td>
                </tr>
                <tr>
                    <td class="bar" colspan="2">
                        <center><button type="submit" class="button-primary">Simpan</button></center>
                    </td>
                </tr>
            </table>
        </form>
    </center>
@endsection