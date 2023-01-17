@extends('main.layout')

@section('content')
    <center>
        <h2>Edit Data Kelas</h2>
        <form action="/kelas/update/{{ $kelas->id }}" method="post">
            @csrf
            <table width="50%">
                <tr>
                    <td class="bar">Nama Kelas</td>
                    <td class="bar">
                        <input type="text" name="nama_kelas" value="{{ $kelas->nama_kelas }}">
                    </td>
                </tr>
                <tr>
                    <td class="bar">Jurusan</td>
                    <td class="bar">
                        <select name="jurusan_id">
                            @foreach ($jurusan as $j)
                                <option value="{{ $j->id }}" {{ $j->id == $kelas->jurusan_id ? 'selected' : '' }}>{{ $j->nama_jurusan }}</option>
                            @endforeach
                        </select>
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