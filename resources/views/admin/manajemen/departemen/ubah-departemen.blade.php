@extends('layouts.main')

@section('content')



<div class="shadow p-3 mb-5 bg-body rounded container border mt-5">

    <h2 class="mb-5 mt-5 mx-5 fw-bold text-center">Ubah Departemen</h2>


    <form enctype="multipart/form-data" action="/manajemen/departemen/ubah/{{$departemen -> id}}" method="post">
        @csrf
        <div class="form-group mt-3">
            <div class="d-flex justify-content-center">
                <label class="mx-4 w-25">Nama Departemen</label>
                <input type="text" name="nama" class="form-control mx-4" value="{{$departemen ->nama}}" autofocus autocomplete="off">
            </div>
        </div>
        @error('nama')
        <div class="alert-danger mt-1">{{$message}}</div>
        @enderror

        <div class="form-group mt-3">
            <div class="d-flex justify-content-center">
                <label class="mx-4 w-25">Nama BEM</label>
                <select class="form-control custom-select mx-4" name="bem_id" id="bem_id">
                    <option value="{{$departemen ->bem->id}}">{{$departemen ->bem->nama}}</option>
                    <?php $bems = DB::table('bems')->get() ?>
                    @foreach($bems as $bem)
                    <option value="{{$bem->id}}" >{{$bem->nama}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        @error('nama')
        <div class="alert-danger mt-1">{{$message}}</div>
        @enderror

        <div class="form-group mt-3">
            <div class="d-flex justify-content-center">
                <label class="mx-4 w-25">Ketua</label>
                <input type="text" name="ketua" class="form-control mx-4" value="{{$departemen ->ketua}}" autofocus autocomplete="off">
            </div>
        </div>
        @error('ketua')
        <div class="alert-danger mt-1">{{$message}}</div>
        @enderror

        <div class="form-group mt-3">
            <div class="d-flex justify-content-center">
                <label class="mx-4 w-25">Wakil Ketua</label>
                <input type="text" name="wketua" class="form-control mx-4" value="{{$departemen ->wketua}}" autofocus autocomplete="off">
            </div>
        </div>
        @error('wketua')
        <div class="alert-danger mt-1">{{$message}}</div>
        @enderror

        <div class="form-group mt-3">
            <div class="d-flex justify-content-center">
                <label class="mx-4 w-25">Sekretaris</label>
                <input type="text" name="sekretaris" class="form-control mx-4" value="{{$departemen ->sekretaris}}" autofocus autocomplete="off">
            </div>
        </div>
        @error('sekretaris')
        <div class="alert-danger mt-1">{{$message}}</div>
        @enderror



        <div class="form-group mt-3">
            <div class="d-flex justify-content-center">
                <label class="mx-4 w-25">Bendahara</label>
                <input type="text" name="bendahara" class="form-control mx-4" value="{{$departemen ->bendahara}}" autofocus autocomplete="off">
            </div>
        </div>
        @error('bendahara')
        <div class="alert-danger mt-1">{{$message}}</div>
        @enderror

        <div class="form-group mt-3">
            <div class="d-flex justify-content-center">
                <label class="mx-4 w-25">Tugas</label>
                <textarea name="tugas" class="form-control mx-4" id="tugas" cols="30" rows="10" value="{{ $departemen -> tugas }}">{{ $departemen -> tugas }}</textarea>
            </div>
        </div>
        @error('tugas')
        <div class="alert-danger mt-1">{{$message}}</div>
        @enderror

        <div class="form-group mt-3">
            <div class="d-flex justify-content-start">
                <label class="mx-4 w-25 ">Logo</label>
                <input type="file" name="logofile" class="form-control mx-4" >
                <input type="hidden" name="logo" value="{{$departemen->logo}}">
            </div>
            <div class="d-flex justify-content-start mt-4">
                <label class="mx-4 w-25 " style="visibility:hidden">Logo</label>
                <img src="../../logo/{{$departemen->logo}}" alt="" width="350">
            </div>
        </div>
        @error('logo')
        <div class="alert-danger mt-1">{{$message}}</div>
        @enderror

        <br><br>

        <div class="form-group mt-5">
            <div class="d-flex justify-content-center">
                <a href="/manajemen/departemen" class="btn btn-secondary mx-4" style="width: 40%">Batal</a>
                <button type="submit" class="btn btn-warning mx-4" style="width: 40%">Ubah</button>
            </div>
        </div>
    </form>
</div>

<br>

@endsection