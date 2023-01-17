@extends('main.layout')

@section('content')

    <center>
        <br>
        <h2>Tambah Data Guru</h2>

        <form action="/guru/store" method="post">
            @csrf
            <table width="50%">
                <tr>
                    <td class="bar">NIP</td>
                    <td class="bar">
                        <input type="text" name="nip">
                    </td>
                </tr>
                <tr>
                    <td class="bar">Nama Guru</td>
                    <td class="bar">
                        <input type="text" name="nama_guru">
                    </td>
                </tr>
                <tr>
                    <td class="bar">Jenis Kelamin</td>
                    <td class="bar">
                        <input type="radio" name="jk" value="L">Laki-laki
                        <input type="radio" name="jk" value="P">Perempuan
                    </td>
                </tr>
                <tr>
                    <td class="bar">Alamat</td>
                    <td class="bar">
                        <textarea name="alamat" id="" cols="30" rows="5"></textarea>
                    </td>
                </tr>
                <tr>
                    <td class="bar">Password</td>
                    <td class="bar">
                        <input type="password" name="password">
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