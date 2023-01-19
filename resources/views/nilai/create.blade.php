@extends('main.layout')

@section('content')

    <center>
        <h2>TAMBAH DATA NILAI</h2>
        <form action="/nilai/store" method="post">
            @csrf
            <table width="50%">
                <tr>
                    <td class="bar">MAPEL & GURU MAPEL</td>
                    <td class="bar">
                        <select name="mengajar_id">
                            @foreach ($mengajar as $m)
                                <option value="{{ $m->id }}">{{ $m->guru->nama_guru }} - {{ $m->mapel->nama_mapel }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="bar">Siswa</td>
                    <td class="bar">
                        <select name="siswa_id">
                            @foreach ($siswa as $s)
                                <option value="{{ $s->id }}">{{ $s->nama_siswa }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="bar">UH</td>
                    <td class="bar">
                        <input type="number" name="uh">
                    </td>
                </tr>
                <tr>
                    <td class="bar">UTS</td>
                    <td class="bar">
                        <input type="number" name="uts">
                    </td>
                </tr>
                <tr>
                    <td class="bar">UAS</td>
                    <td class="bar">
                        <input type="number" name="uas">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <center>
                            <button type="submit" class="button-primary">Simpan</button>
                        </center>
                    </td>
                </tr>
            </table>
        </form>
    </center>

@endsection