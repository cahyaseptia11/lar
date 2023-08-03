<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-5">
                <div class="card-header">{{ __('Edit Data') }}
                <a class="nav-link" href="/mahasiswa" style="float:right; color:blue;font-weight:bold;">{{ __('Kembali') }}</a>
                </div>

                <div class="card-body">
                    <form method="POST" action="/mahasiswa/update/{{ $mahasiswa->id}}">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('NIM') }}</label>

                            <div class="col-md-6">
                                <input id="nim" type="text" class="form-control @error('nim') is-invalid @enderror" name="nim" value="{{ $mahasiswa->nim }}">                               
                                @error('nim')
                                <span>{{ $message }}</span>
                                @enderror
                            </div>
                           
                        </div>

                        <div class="row mb-3">
                            <label for="nama" class="col-md-4 col-form-label text-md-end">{{ __('Nama') }}</label>

                            <div class="col-md-6">
                                <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ $mahasiswa->nama }}" required autocomplete="nama">
                                @error('nama')
                                <span>{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="alamat" class="col-md-4 col-form-label text-md-end">{{ __('Alamat') }}</label>

                            <div class="col-md-6">
                                <input id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ $mahasiswa->alamat }}"required autocomplete="new-alamat">
                                @error('alamat')
                                <span>{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="jurusan" class="col-md-4 col-form-label text-md-end">{{ __('Jurusan') }}</label>

                            <div class="col-md-6">
                                <input id="jurusan" type="text" class="form-control" name="jurusan" value="{{ $mahasiswa->jurusan }}">
                                @error('jurusan')
                                <span>{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Simpan') }}                                   
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
</body>
</html>

