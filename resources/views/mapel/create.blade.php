@extends('main.layout')

@section('content')
    <center>
        <h2>Tambah Data Mata Pelajaran</h2>
        <form action="/mapel/store" method="POST">
            @csrf
            <table width="50%">
                <tr>
                    <td class="bar">Mata Pelajaran</td>
                    <td class="bar">
                        <input type="text" name="nama_mapel">
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