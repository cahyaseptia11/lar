<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function tampil() {
        $mahasiswa=Mahasiswa::all();        
        return view ('mahasiswa/mahasiswa', ['mahasiswa'=>$mahasiswa]);
    }

    public function tambah() {        
        return view ('mahasiswa/tambah');
    }

    public function store(Request $req){
        $req->validate([
            'nim'=>'required|unique:mahasiswa|max:255',
            'nama'=>'required',
            'jurusan'=>'required',
            'alamat'=>'required'
        ]);

        Mahasiswa::create([
            'nim'=>$req->nim,
            'nama'=>$req->nama,
            'jurusan'=>$req->jurusan,
            'alamat'=>$req->alamat
        ]);        

        return redirect('mahasiswa');
    }

    public function edit($id) {
        $mahasiswa=Mahasiswa::find($id);
        return view ('mahasiswa/edit', ['mahasiswa'=>$mahasiswa]);
    }

    public function update($id, Request $req){
        $req->validate([
            'nim'=>'required|unique:mahasiswa|max:255',
            'nama'=>'required',
            'jurusan'=>'required',
            'alamat'=>'required'
        ]);

        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->nim=$req->nim;
        $mahasiswa->nama=$req->nama;
        $mahasiswa->jurusan=$req->jurusan;
        $mahasiswa->alamat=$req->alamat;
        $mahasiswa->save();
        return redirect('mahasiswa');
    }  
    
    public function delete($id){
        $mahasiswa=Mahasiswa::find($id);
        $mahasiswa->delete();
        return redirect('/mahasiswa');
    }
}
