<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;

class DosenController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function tampil(){
        $dosen=Dosen::all();
        return view ('dosen/dosen', ['dosen'=>$dosen]);
    }

    public function tambah(){
        return view('dosen/tambah');
    }

    public function store(Request $req){
        $this->validate ($req,[
            'kd_dosen'=>'required|unique:dosen|max:255',
            'nama_dosen'=>'required',
            'alamat'=>'required'
        ]);

        Dosen::create([
            'kd_dosen'=>$req->kd_dosen,
            'nama_dosen'=>$req->nama_dosen,
            'alamat'=>$req->alamat
        ]);
        
        return redirect('dosen');
    }

    public function edit($id){
        $dosen=Dosen::find($id);
        return view ('dosen/edit', ['dosen'=>$dosen]);    
    }

    public function update($id, Request $req){
        $this->validate($req,[
            'kd_dosen'=>'required|unique:dosen|max:255',
            'nama_dosen'=>'required',
            'alamat'=>'required'
        ]);

        $dosen=Dosen::find($id);
        $dosen->kd_dosen=$req->kd_dosen;
        $dosen->nama_dosen=$req->nama_dosen;
        $dosen->alamat=$req->alamat;
        $dosen->save();

        return redirect('dosen');

    }

    public function delete($id){
        $dosen=Dosen::find($id);
        $dosen->delete();

        return redirect('dosen');
    }

    

}
