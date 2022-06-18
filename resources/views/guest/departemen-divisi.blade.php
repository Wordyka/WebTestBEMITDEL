@extends('layouts.main-guest')

@section('container')
@foreach($divisis->take(1) as $divisi)

<div class="card mb-5 px-5 py-5">
    <img src="../logo/{{$divisi->departemen->logo}}" class="card-img-top" alt="..." width="150" height="500">
    <div class="card-body text-center mt-4">
        <h3 class="card-title fw-bold mb-3 text-uppercase">{{$divisi->departemen->nama}}</h3>
        <div class="vimi text-start mt-5 fw-bold mb-5">
            <h5 class="mb-4 fw-bold text-decoration-underline text-uppercase">Tugas</h5>
            <p align="justify">{{$divisi->departemen->tugas}}</p>
        </div>
        <div class="pengurus text-start mt-5 fw-bold">
            <h5 class="mb-4 fw-bold text-decoration-underline text-uppercase">Kepengurusan</h5>
            <pre>Ketua          : {{$divisi->departemen->ketua}}</pre>
            <pre>Wakil Ketua    : {{$divisi->departemen->wketua}}</pre>
            <pre>Sekretaris     : {{$divisi->departemen->sekretaris}}</pre>
            <pre>Bendahara      : {{$divisi->departemen->bendahara}}</pre>
        </div>
    </div>
</div>

@endforeach

<div class="container">
    <div class="row">
        @foreach($divisis as $divisi)
        <div class="col-md-4">
        <div class="card mb-4">
            <img src="../logo/{{$divisi->departemen->logo}}" class="card-img-top" alt="{{$divisi->nama}}">
            <div class="card-body">
                <h5 class="card-title">Divisi {{$divisi->nama}}</h5>
                <p class="card-text"><pre>Ketua : {{$divisi->ketua}}</pre></p>
                <p class="card-text">{{$divisi->tugas}}</p>
            </div>
            </div>
        </div>       
        @endforeach
    </div>
</div>

<br><br><br>

@endsection