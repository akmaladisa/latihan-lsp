<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mengajar;
use App\Models\Mapel;
use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Nilai;

class MengajarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mengajar.index', [
            'mengajar' => Mengajar::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mengajar.create', [
            'mapel' => Mapel::all(),
            'guru' => Guru::all(),
            'kelas' => Kelas::all()
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
        $data_mengajar = $request->validate([
            'guru_id' => 'required',
            'mapel_id' => 'required',
            'kelas_id' => 'required'
        ]);

        Mengajar::create($data_mengajar);
        return redirect('/mengajar/index')->with('success', 'Data mengajar berhasil ditambah');
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
    public function edit(Mengajar $mengajar)
    {
        return view('mengajar.edit', [
            'mengajar' => $mengajar,
            'mapel' => Mapel::all(),
            'guru' => Guru::all(),
            'kelas' => Kelas::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mengajar $mengajar)
    {
        $data_mengajar = $request->validate([
            'guru_id' => 'required',
            'mapel_id' => 'required',
            'kelas_id' => 'required'
        ]);

        $mengajar->update($data_mengajar);

        return redirect('/mengajar/index')->with('success', 'Data mengajar berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mengajar $mengajar)
    {
        $nilai = Nilai::where('mengajar_id', $mengajar->id)->first();
        if($nilai) {
            return back()->with('error', 'Data masih digunakan di menu nilai');
        }

        $mengajar->delete();

        return redirect('/mengajar/index')->with('success', 'Data mengajar berhasil dihapus');
    }
}
