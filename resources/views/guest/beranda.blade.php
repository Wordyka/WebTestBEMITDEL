@extends('layouts.main-guest')

@section('container')

@foreach($bems as $bem)

<div class="card mb-5 px-5 py-5">
    <img src="../logo/{{$bem->logo}}" class="card-img-top" alt="..." width="150" height="500">
    <div class="card-body text-center mt-4">
        <h3 class="card-title fw-bold text-uppercase">{{$bem->nama}}</h3>
        <div class="vimi text-start mt-5 fw-bold mb-5">
            <h5 class="mb-4 fw-bold text-decoration-underline text-uppercase">Visi & Misi</h5>
            <p align="justify">Visi   :<br> {{$bem->visi}}</p>
            <p align="justify">Misi   :<br> {{$bem->misi}}</p>
        </div>
        <div class="pengurus text-start mt-5 fw-bold">
            <h5 class="mb-4 fw-bold text-decoration-underline text-uppercase">Kepengurusan</h5>
            <pre>Ketua           : {{$bem->ketua}}</pre>
            <pre>Wakil Ketua     : {{$bem->wketua}}</pre>
            <pre>Sekretaris1     : {{$bem->sekretaris1}}</pre>
            <pre>Sekretaris2     : {{$bem->sekretaris2}}</pre>
            <pre>Bendahara1      : {{$bem->bendahara1}}</pre>
            <pre>Bendahara2      : {{$bem->bendahara2}}</pre>
        </div>
    </div>
</div>

@endforeach

<br><br><br>

@endsection