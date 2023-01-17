@extends('main.layout')

@section('content')
    <center>
        <br>
        <h2>Edit Data Jurusan</h2>

        <form action="/jurusan/update/{{ $jurusan->id }}" method="post">
            @csrf
            <table width="50%">
                <tr>
                    <td class="bar">Nama Jurusan</td>
                    <td class="bar">
                        <input type="text" name="nama_jurusan" value="{{ $jurusan->nama_jurusan }}">
                    </td>
                </tr>
                <tr>
                    <td class="bar" colspan="2">
                        <center>
                            <button class="button-primary" type="submit">Simpan</button>
                        </center>
                    </td>
                </tr>
            </table>
        </form>
    </center>
@endsection