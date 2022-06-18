@extends('layouts.main')

@section('content')



<div class="shadow p-3 mb-5 bg-body rounded container border mt-5">

    <h2 class="mb-5 mt-5 mx-5 fw-bold text-center">Tambah Divisi</h2>


    <form enctype="multipart/form-data" action="/manajemen/divisi/tambah/simpan" method="post">
        @csrf
        <div class="form-group mt-3">
            <div class="d-flex justify-content-center">
                <label class="mx-4 w-25">Nama Divisi</label>
                <input type="text" name="nama" class="form-control mx-4" value="{{ old('nama') }}" autofocus autocomplete="off">
            </div>
        </div>
        @error('nama')
        <div class="alert-danger mt-1">{{$message}}</div>
        @enderror

        <div class="form-group mt-3">
            <div class="d-flex justify-content-center">
                <label class="mx-4 w-25">Nama BEM</label>
                <select class="form-control custom-select mx-4" name="bem_id" id="bem_id">
                    <option value="">Pilih BEM</option>
                    <?php $bems = DB::table('bems')->get() ?>
                    @foreach($bems as $bem)
                    <option value="{{$bem->id}}" >{{$bem->nama}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        @error('bem_id')
        <div class="alert-danger mt-1">{{$message}}</div>
        @enderror

        <div class="form-group mt-3">
            <div class="d-flex justify-content-center">
                <label class="mx-4 w-25">Nama Departemen</label>
                <select class="form-control custom-select mx-4" name="departemen_id" id="departemen_id">
                    <option value="">Pilih Departemen</option>
                    <?php $departemens = DB::table('departemens')->get() ?>
                    @foreach($departemens as $departemen)
                    <option value="{{$departemen->id}}" >{{$departemen->nama}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        @error('departemen_id')
        <div class="alert-danger mt-1">{{$message}}</div>
        @enderror

        <div class="form-group mt-3">
            <div class="d-flex justify-content-center">
                <label class="mx-4 w-25">Ketua</label>
                <input type="text" name="ketua" value="{{ old('ketua') }}" class="form-control mx-4" autofocus autocomplete="off">
            </div>
        </div>
        @error('ketua')
        <div class="alert-danger mt-1">{{$message}}</div>
        @enderror

        
        <div class="form-group mt-3">
            <div class="d-flex justify-content-center">
                <label class="mx-4 w-25">Tugas</label>
                <textarea name="tugas" class="form-control mx-4" id="tugas" cols="30" value="{{ old('tugas') }}" rows="10">{{ old('tugas') }}</textarea>
            </div>
        </div>
        @error('tugas')
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