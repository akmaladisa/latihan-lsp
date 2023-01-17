@extends('main.layout')

@section('content')
    <center>
        <h2>Tambah Data Mengajar</h2>
        <form action="/mengajar/store" method="post">
            @csrf
            <table width="50%">
                <tr>
                    <td class="bar">Guru</td>
                    <td class="bar">
                        <select name="guru_id">
                            @foreach ($guru as $g)
                                <option value="{{ $g->id }}">{{ $g->nama_guru }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="bar">Mata Pelajaran</td>
                    <td class="bar">
                        <select name="mapel_id">
                            @foreach ($mapel as $m)
                                <option value="{{ $m->id }}">{{ $m->nama_mapel }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="bar">Kelas</td>
                    <td class="bar">
                        <select name="kelas_id">
                            @foreach ($kelas as $k)
                                <option value="{{ $k->id }}">{{ $k->nama_kelas }} {{ $k->jurusan->nama_jurusan }}</option>
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