<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dosen;

class DosenProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($nip)
    {
        $dosen = Dosen::where('nip', $nip)->first();

        $mahasiswa = $dosen ? $dosen->mahasiswa()->paginate(7) : null;

        if ($mahasiswa) {
            return view('dosen.index', [
                'list_mahasiswa' => $mahasiswa,
                'dosen' => $dosen,
            ]);
        }

        return redirect('/');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dosen.profil.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'nip' => 'required|numeric|unique:dosen,nip',
            'nama_lengkap' => 'required|max:255',
            'email' => 'required|email|max:255|unique:dosen,email',
            // 'password' => 'required|min:7|max:255',
            'wa_aktif' => 'numeric|nullable',
            'foto' => 'file|nullable'
        ]);

        // $attributes['password'] = bcrypt($attributes['password']);

        if ($request->foto) {
            $request->file('foto')->storeAs('public/foto/dosen', $attributes['nip'] . '.' . $request->foto->extension());
            $attributes['foto'] = $attributes['nip'] . '.' . $request->foto->extension();
        }

        $dosen = Dosen::create($attributes);

        // TODO : Create auth setup for mahasiswa and dosen, then login after register (To be discussed)
        // Auth::login($dosen);
        // return redirect('/')->with('succes', 'your account has been created');
        return redirect('/dosen/' .  $request->nip . '/profil');
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
    public function update(Request $request, $nip)
    {
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
