@extends('main.layout')

@section('content')
    <center>
        <h2>Edit Data Mengajar</h2>
        <form action="/mengajar/update/{{ $mengajar->id }}" method="post">
            @csrf
            <table width="50%">
                <tr>
                    <td class="bar">Guru</td>
                    <td class="bar">
                        <select name="guru_id">
                            @foreach ($guru as $g)
                                <option value="{{ $g->id }}" {{ $g->id == $mengajar->guru_id ? 'selected' : '' }}>{{ $g->nama_guru }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="bar">Mata Pelajaran</td>
                    <td class="bar">
                        <select name="mapel_id">
                            @foreach ($mapel as $m)
                                <option value="{{ $m->id }}" {{ $m->id == $mengajar->mapel_id ? 'selected' : '' }}>{{ $m->nama_mapel }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="bar">Kelas</td>
                    <td class="bar">
                        <select name="kelas_id">
                            @foreach ($kelas as $k)
                                <option value="{{ $k->id }}" {{ $k->id == $mengajar->kelas_id ? 'selected' : '' }}>{{ $k->nama_kelas }} {{ $k->jurusan->nama_jurusan }}</option>
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