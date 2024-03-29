<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use App\Models\Kelas;
use App\Models\Mengajar;
use App\Models\Siswa;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('kelas.index', [
            'kelas' => Kelas::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kelas.create', [
            'jurusan' => Jurusan::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data_kelas = $request->validate([
            'nama_kelas' => 'required',
            'jurusan_id' => 'required|numeric'
        ]);

        Kelas::create($data_kelas);
        return redirect('/kelas/index')->with('success', 'Data kelas berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Kelas $kelas)
    {
        return view('kelas.edit', [
            'kelas' => $kelas,
            'jurusan' => Jurusan::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kelas $kelas)
    {
        $data_kelas = $request->validate([
            'nama_kelas' => 'required',
            'jurusan_id' => 'required|numeric'
        ]);

        $kelas->update($data_kelas);
        return redirect('/kelas/index')->with('success', 'Data kelas berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kelas $kelas)
    {
        $mengajar = Mengajar::where('kelas_id', $kelas->id)->first();
        $siswa = Siswa::where('kelas_id', $kelas->id)->first();

        if( $mengajar ) {
            return back()->with('error', $kelas->nama_kelas . " masih digunakan di menu mengajar");
        }

        if( $siswa ) {
            return back()->with('error', $kelas->nama_kelas. " masih digunakan di menu siswa");
        }

        $kelas->delete();

        return redirect('/kelas/index')->with('success', 'Data kelas berhasil dihapus');
    }
}
