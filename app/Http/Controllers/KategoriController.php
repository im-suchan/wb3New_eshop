<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
{
<<<<<<< HEAD
    public function index()
    {
=======
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
>>>>>>> 565bb27 (First commit)
        $kategori = Kategori::orderBy('nama_kategori', 'asc')->get();
        return view('backend.v_kategori.index', [
            'judul' => 'Kategori',
            'index' => $kategori
        ]);
    }

<<<<<<< HEAD
    public function create()
    {
=======
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
>>>>>>> 565bb27 (First commit)
        return view('backend.v_kategori.create', [
            'judul' => 'Kategori',
        ]);
    }

<<<<<<< HEAD
    public function store(Request $request)
    {
=======
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
>>>>>>> 565bb27 (First commit)
        // dd($request);
        $validatedData = $request->validate([
            'nama_kategori' => 'required|max:255|unique:kategori',
        ]);
        Kategori::create($validatedData);
        return redirect()->route('backend.kategori.index')->with('success', 'Data berhasil tersimpan');
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
<<<<<<< HEAD
=======
        //
>>>>>>> 565bb27 (First commit)
        $kategori = Kategori::find($id);
        return view('backend.v_kategori.edit', [
            'judul' => 'Kategori',
            'edit' => $kategori
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rules = [
            'nama_kategori' => 'required|max:255|unique:kategori,nama_kategori,' . $id,
        ];
        $validatedData = $request->validate($rules);
        Kategori::where('id', $id)->update($validatedData);
        return redirect()->route('backend.kategori.index')->with('success', 'Data berhasil 
            diperbaharui');
<<<<<<< HEAD
=======

        //
>>>>>>> 565bb27 (First commit)
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
<<<<<<< HEAD
    { {
            $user = kategori::findOrFail($id);
            $user->delete();
            return redirect()->route('backend.kategori.index')->with('success', 'Data berhasil 
            dihapus');
        }
=======
    {
        //
        $user = kategori::findOrFail($id);
        $user->delete();
        return redirect()->route('backend.kategori.index')->with('success', 'Data berhasil dihapus');
>>>>>>> 565bb27 (First commit)
    }
}
