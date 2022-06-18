@extends('layouts.main')

@section('content')



<div class="shadow p-3 mb-5 bg-body rounded container border mt-5">

    <h2 class="mb-5 mt-5 mx-5 fw-bold text-center">Tambah Departemen</h2>


    <form enctype="multipart/form-data" action="/manajemen/departemen/tambah/simpan" method="post">
        @csrf
        <div class="form-group mt-3">
            <div class="d-flex justify-content-center">
                <label class="mx-4 w-25">Nama Departemen</label>
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
                <label class="mx-4 w-25">Ketua</label>
                <input type="text" name="ketua" value="{{ old('ketua') }}" class="form-control mx-4" autofocus autocomplete="off">
            </div>
        </div>
        @error('ketua')
        <div class="alert-danger mt-1">{{$message}}</div>
        @enderror

        <div class="form-group mt-3">
            <div class="d-flex justify-content-center">
                <label class="mx-4 w-25">Wakil Ketua</label>
                <input type="text" name="wketua" value="{{ old('wketua') }}" class="form-control mx-4" autofocus autocomplete="off">
            </div>
        </div>
        @error('wketua')
        <div class="alert-danger mt-1">{{$message}}</div>
        @enderror

        <div class="form-group mt-3">
            <div class="d-flex justify-content-center">
                <label class="mx-4 w-25">Sekretaris</label>
                <input type="text" name="sekretaris" value="{{ old('sekretaris') }}" class="form-control mx-4" autofocus autocomplete="off">
            </div>
        </div>
        @error('sekretaris')
        <div class="alert-danger mt-1">{{$message}}</div>
        @enderror


        <div class="form-group mt-3">
            <div class="d-flex justify-content-center">
                <label class="mx-4 w-25">Bendahara</label>
                <input type="text" name="bendahara" value="{{ old('bendahara') }}" class="form-control mx-4" autofocus autocomplete="off">
            </div>
        </div>
        @error('bendahara')
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


        <div class="form-group mt-3">
            <div class="d-flex justify-content-start">
                <label class="mx-4 w-25 ">Logo</label>
                <input type="file" name="logo-file" value="{{ old('logo-file') }}" class="form-control mx-4">
                <input type="hidden" name="logo">
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