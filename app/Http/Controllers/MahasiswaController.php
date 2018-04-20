<?php

namespace App\Http\Controllers;

use App\mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::all()->toArray();
        return view('tampil', compact('mahasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mahasiswa = $this -> validate(request(), [
            'nim'=> 'required | numeric',
            'nama'=> 'required',
            'alamat'=> 'required',
            'telp'=> 'required | numeric',
            'email'=> 'required | email'            
            ]);

        Mahasiswa::create($mahasiswa);
        return redirect('/mahasiswa');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show(mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return view('tampilan_edit', compact('mahasiswa', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $mhs = Mahasiswa::find($id);
        $this->validate(request(), [
            'nim'=> 'required | numeric',
            'nama'=> 'required',
            'alamat'=> 'required',
            'telp'=> 'required | numeric',
            'email'=> 'required | email'            
            ]);

        $mhs->nim = $request->get('nim');
        $mhs->nama = $request->get('nama');
        $mhs->alamat = $request->get('alamat');
        $mhs->telp = $request->get('telp');
        $mhs->email = $request->get('email');
        $mhs->save();
        return redirect('mahasiswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa -> delete();
        return redirect('mahasiswa');
    }
}
