@extends('layouts.main')

@section('content')



<div class="shadow p-3 mb-5 bg-body rounded container border mt-5">

    <h2 class="mb-5 mt-5 mx-5 fw-bold text-center">Tambah Badan Eksekutif Mahasiswa (BEM)</h2>


    <form enctype="multipart/form-data" action="/manajemen/bem/tambah/simpan" method="post">
        @csrf
        <div class="form-group mt-3">
            <div class="d-flex justify-content-center">
                <label class="mx-4 w-25">Nama Organisasi</label>
                <input type="text" name="nama" class="form-control mx-4" value="{{ old('nama') }}" autofocus autocomplete="off">
            </div>
        </div>
        @error('nama')
        <div class="alert-danger mt-1">{{$message}}</div>
        @enderror

        <div class="form-group mt-3">
            <div class="d-flex justify-content-center">
                <label class="mx-4 w-25">Ketua</label>
                <input type="text" name="ketua" value="{{ old('ketua') }}"class="form-control mx-4" autofocus autocomplete="off">
            </div>
        </div>
        @error('ketua')
        <div class="alert-danger mt-1">{{$message}}</div>
        @enderror

        <div class="form-group mt-3">
            <div class="d-flex justify-content-center">
                <label class="mx-4 w-25">Wakil Ketua</label>
                <input type="text" name="wketua" value="{{ old('wketua') }}"class="form-control mx-4" autofocus autocomplete="off">
            </div>
        </div>
        @error('wketua')
        <div class="alert-danger mt-1">{{$message}}</div>
        @enderror

        <div class="form-group mt-3">
            <div class="d-flex justify-content-center">
                <label class="mx-4 w-25">Sekretaris 1</label>
                <input type="text" name="sekretaris1" 
                value="{{ old('sekretaris1') }}"class="form-control mx-4" autofocus autocomplete="off">
            </div>
        </div>
        @error('sekretaris1')
        <div class="alert-danger mt-1">{{$message}}</div>
        @enderror

        <div class="form-group mt-3">
            <div class="d-flex justify-content-center">
                <label class="mx-4 w-25">Sekretaris 2</label>
                <input type="text" name="sekretaris2" 
                value="{{ old('sekretaris2') }}"class="form-control mx-4" autofocus autocomplete="off">
            </div>
        </div>
        @error('sekretaris2')
        <div class="alert-danger mt-1">{{$message}}</div>
        @enderror


        <div class="form-group mt-3">
            <div class="d-flex justify-content-center">
                <label class="mx-4 w-25">Bendahara 1</label>
                <input type="text" name="bendahara1" 
                value="{{ old('bendahara1') }}"class="form-control mx-4"autofocus autocomplete="off">
            </div>
        </div>
        @error('bendahara1')
        <div class="alert-danger mt-1">{{$message}}</div>
        @enderror

        <div class="form-group mt-3">
            <div class="d-flex justify-content-center">
                <label class="mx-4 w-25">Bendahara 2</label>
                <input type="text" name="bendahara2" 
                value="{{ old('bendahara2') }}"class="form-control mx-4" autofocus autocomplete="off">
            </div>
        </div>
        @error('bendahara2')
        <div class="alert-danger mt-1">{{$message}}</div>
        @enderror


        <div class="form-group mt-3">
            <div class="d-flex justify-content-center">
                <label class="mx-4 w-25">Visi</label>
                <textarea name="visi" class="form-control mx-4" id="visi" cols="30" 
                value="{{ old('visi') }}"rows="10">{{ old('visi') }}</textarea>
            </div>
        </div>
        @error('visi')
        <div class="alert-danger mt-1">{{$message}}</div>
        @enderror

        <div class="form-group mt-3">
            <div class="d-flex justify-content-center">
                <label class="mx-4 w-25">Misi</label>
                <textarea name="misi" class="form-control mx-4" id="misi" cols="30" 
                value="{{ old('misi') }}"rows="10">{{ old('misi') }}</textarea>
            </div>
        </div>
        @error('misi')
        <div class="alert-danger mt-1">{{$message}}</div>
        @enderror

        <div class="form-group mt-3">
            <div class="d-flex justify-content-start">
                <label class="mx-4 w-25 ">Logo</label>
                <input type="file" name="logo-file"  value="{{ old('logo-file') }}" class="form-control mx-4" >
                <input type="hidden" name="logo" >
            </div>
        </div>
        @error('logo')
        <div class="alert-danger mt-1">{{$message}}</div>
        @enderror

        <br><br>

        <div class="form-group mt-5">
            <div class="d-flex justify-content-center">
                <a href="/manajemen/bem" class="btn btn-secondary mx-4" style="width: 40%">Batal</a>
                <button type="submit" class="btn btn-success mx-4" style="width: 40%">Simpan</button>
            </div>
        </div>
    </form>
</div>

<br>

@endsection