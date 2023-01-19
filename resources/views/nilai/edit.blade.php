@extends('main.layout')

@section('content')

    <center>
        <h2>EDIT DATA NILAI</h2>
        <form action="/nilai/update/{{ $nilai->id }}" method="post">
            @csrf
            <table width="50%">
                <tr>
                    <td class="bar">MAPEL & GURU MAPEL</td>
                    <td class="bar">
                        <select name="mengajar_id">
                            @foreach ($mengajar as $m)
                                <option {{ $m->id == $nilai->mengajar_id ? 'selected' : '' }} value="{{ $m->id }}">{{ $m->guru->nama_guru }} - {{ $m->mapel->nama_mapel }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="bar">Siswa</td>
                    <td class="bar">
                        <select name="siswa_id">
                            @foreach ($siswa as $s)
                                <option {{ $s->id == $nilai->siswa_id ? 'selected' : '' }} value="{{ $s->id }}">{{ $s->nama_siswa }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="bar">UH</td>
                    <td class="bar">
                        <input type="number" name="uh" value="{{ $nilai->uh }}">
                    </td>
                </tr>
                <tr>
                    <td class="bar">UTS</td>
                    <td class="bar">
                        <input type="number" name="uts" value="{{ $nilai->uts }}">
                    </td>
                </tr>
                <tr>
                    <td class="bar">UAS</td>
                    <td class="bar">
                        <input type="number" name="uas" value="{{ $nilai->uas }}">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <center>
                            <button type="submit" class="button-primary">Ubah</button>
                        </center>
                    </td>
                </tr>
            </table>
        </form>
    </center>

@endsection