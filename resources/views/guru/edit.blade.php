@extends('main.layout')

@section('content')

    <center>
        <br>
        <h2>Edit Data Guru</h2>

        <form action="/guru/update/{{ $guru->id }}" method="post">
            @csrf
            <table width="50%">
                <tr>
                    <td class="bar">NIP</td>
                    <td class="bar">
                        <input type="text" name="nip" value="{{ $guru->nip }}">
                    </td>
                </tr>
                <tr>
                    <td class="bar">Nama Guru</td>
                    <td class="bar">
                        <input type="text" name="nama_guru" value="{{ $guru->nama_guru }}">
                    </td>
                </tr>
                <tr>
                    <td class="bar">Jenis Kelamin</td>
                    <td class="bar">
                        <input type="radio" name="jk" value="L" {{ $guru->jk == 'L' ? 'checked' : '' }}>Laki-laki
                        <input type="radio" name="jk" value="P" {{ $guru->jk == 'P' ? 'checked' : '' }}>Perempuan
                    </td>
                </tr>
                <tr>
                    <td class="bar">Alamat</td>
                    <td class="bar">
                        <textarea name="alamat" id="" cols="30" rows="5">{{ $guru->alamat }}</textarea>
                    </td>
                </tr>
                <tr>
                    <td class="bar">Password</td>
                    <td class="bar">
                        <input type="password" name="password" value="{{ $guru->password }}">
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