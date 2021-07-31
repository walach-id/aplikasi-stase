<?php

namespace App\Http\Controllers;

use App\Models\mahasiswa;
use App\Models\dosen;

use Illuminate\Http\Request;


class MahasiswaProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($nim)
    {

        $mahasiswa = mahasiswa::where('nim', $nim)->with(['dosen'])->first();
        $dosen = $mahasiswa->dosen;

        return view('mahasiswa.index', [
            'mahasiswa' => $mahasiswa,
            'dosen' => $dosen,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dosen = dosen::all();

        return view('mahasiswa.profil.add', [
            'dosen' => $dosen,
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
        $mahasiswa = new mahasiswa();
        $mahasiswa->nim = $request->nim;
        $mahasiswa->nama_lengkap = $request->nama;
        $mahasiswa->email = $request->email;
        $mahasiswa->wa_aktif = $request->wa;
        $mahasiswa->kurikulum = $request->kurikulum;
        $mahasiswa->nip_dosen_pembimbing = $request->dospem;

        $mahasiswa->save();
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
