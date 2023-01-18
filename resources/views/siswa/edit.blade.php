@extends('main.layout')

@section('content')
    <center>
        <h2>Edit Data Siswa</h2>
        <form action="/siswa/update/{{ $siswa->id }}" method="post">
            @csrf
            <table width="50%">
                <tr>
                    <td class="bar">NIS</td>
                    <td class="bar">
                        <input type="text" name="nis" value="{{ $siswa->nis }}">
                    </td>
                </tr>
                <tr>
                    <td class="bar">Nama Siswa</td>
                    <td class="bar">
                        <input type="text" name="nama_siswa" value="{{ $siswa->nama_siswa }}">
                    </td>
                </tr>
                <tr>
                    <td class="bar">Jenis Kelamin</td>
                    <td class="bar">
                        <input type="radio" name="jk" value="L" {{ $siswa->jk == 'L' ? 'checked' : '' }}>Laki-laki
                        <input type="radio" name="jk" value="P" {{ $siswa->jk == 'P' ? 'checked' : '' }}>Perempuan
                    </td>
                </tr>
                <tr>
                    <td class="bar">Alamat</td>
                    <td class="bar">
                        <textarea name="alamat" id="" cols="30" rows="5">{{ $siswa->alamat }}</textarea>
                    </td>
                </tr>
                <tr>
                    <td class="bar">Kelas</td>
                    <td class="bar">
                        <select name="kelas_id">
                            @foreach ($kelas as $k)
                                <option {{ $k->id == $siswa->kelas_id ? 'selected' : '' }} value="{{ $k->id }}">{{ $k->nama_kelas }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="bar">Password</td>
                    <td class="bar">
                        <input type="password" name="password" value="{{ $siswa->password }}">
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