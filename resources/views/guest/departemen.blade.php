@extends('layouts.main-guest')

@section('container')
@foreach($departemens->take(1) as $departemen)

<div class="card mb-5 px-5 py-5">
    <img src="../logo/{{$departemen->bem->logo}}" class="card-img-top" alt="..." width="150" height="500">
    <div class="card-body text-center mt-4">
        <h3 class="card-title fw-bold mb-3 text-uppercase">{{$departemen->bem->nama}}</h3>
        <h3 class="fw-bold  text-decoration-underline text-uppercase">Departemen</h3>
    </div>
</div>

@endforeach

<div class="container">
    <div class="row">
        @foreach($departemens as $departemen)
        <div class="col-md-4">
        <div class="card mb-4">
            <img src="../logo/{{$departemen->logo}}" class="card-img-top" alt="{{$departemen->nama}}">
            <div class="card-body">
                <h5 class="card-title">{{$departemen->nama}}</h5>
                <p class="card-text">{{$departemen->tugas}}</p>
                <a href="/departemen/{{$departemen->id}}" class="btn btn-primary">Lihat Lebih Lengkap</a>
            </div>
            </div>
        </div>       
        @endforeach
    </div>
</div>

<br><br><br>

@endsection