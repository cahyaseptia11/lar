@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <div class="card mt-5 mb-2" style="width:fit-content">
    <a class="btn btn-primary" href="/dosen/tambah">Tambah</a>
</div>
<div class="card-body">
    <table class="table table-stripped table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Dosen</th>
                <th>Nama Dosen</th>
                <th>Alamat</th>
                <th>OPSI</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; ?>
            @foreach($dosen as $d)
            <tr>
                <td scope="row">{{ $no }}</td>
                <td>{{ $d->kd_dosen }}</td>
                <td>{{ $d->nama_dosen }}</td>
                <td>{{ $d->alamat }}</td>
                <td>
                    <a class="btn btn-success" href="/dosen/edit/{{ $d->id}}"><span class="bi bi-pencil-fill"></span>Edit</a>                                                
                    <a class="btn btn-danger" href="/dosen/delete/{{ $d->id}}"><span class="bi bi-trash"></span>Hapus</a>                        
                </td>                    
            </tr>
            <?php $no++; ?>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
