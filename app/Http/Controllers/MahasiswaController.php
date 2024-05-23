<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa.index', ['mahasiswa' => $mahasiswa]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mahasiswa.mahasiswaRegistration');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nim' => 'required|unique:mahasiswas,nim',
            'nama' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
            'email' => 'required|email|unique:mahasiswas,email',
            'noHp' => 'required',
            'jurusan' => 'required|string|max:255',
            'fotoDiri' => 'nullable|image|mimes:png,jpg,jpeg,svg|max:2048',
        ]);

        if ($request->hasFile('fotoDiri')) {
            $imageName = time() . '.' . $request->file('fotoDiri')->getClientOriginalExtension();
            $request->file('fotoDiri')->move(public_path('images'), $imageName);
            $validateData['fotoDiri'] = $imageName;
        }

        Mahasiswa::create($validateData);

        return redirect('/mahasiswa');
    }

    /**
     * Display the specified resource.
     */
    public function show(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa.show', ['mahasiswa' => $mahasiswa]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa.editMahasiswa', ['mahasiswa' => $mahasiswa]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $validateData = $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'slug' => 'required',
            'email' => 'required',
            'noHp' => 'required',
            'jurusan' => 'required',
            'fotoDiri' => 'nullable|image|mimes:png,jpg,jpeg,svg|max:2048',
        ]);

        if ($request->hasFile('fotoDiri')) {
            $imageName = time() . '.' . $request->file('fotoDiri')->extension();
            $request->file('fotoDiri')->move(public_path('images'), $imageName);
            $validateData['fotoDiri'] = $imageName;
        }

        $mahasiswa->update($validateData);

        return redirect('/mahasiswa');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        Mahasiswa::destroy($mahasiswa->id);

        return redirect('/mahasiswa');
    }
}
