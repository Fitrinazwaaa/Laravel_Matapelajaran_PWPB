<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Siswa::get();
        return view('siswa', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nis' => ['required'],
            'nisn' => ['required'],
            'nama' => ['required'],
            'kelas' => ['required'],
            'jenis_kelamin' => ['required'],
            'alamat' => ['required'],
            'no_hp' => ['required']
        ]);

        //proses tambah data
        Siswa::create([
            'nis' => $request->nis,
            'nisn' => $request->nisn,
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp
        ]);

        return redirect()->route('siswa');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Siswa::find($id);
        return view('edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validates = $request->validate([            
            'nis' => 'required',
            'nisn' => 'required',
            'nama' => 'required',
            'kelas' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
        ]);
        $created = Siswa::find($id);
        $created->update($validates);
        if($created) {
            return redirect()->route('siswa');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $model = Siswa::find($id)->delete();
        if($model){
            return redirect()->route('siswa');
        }
    }

    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }
}
