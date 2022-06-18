@extends('layouts.main-guest')

@section('container')
@foreach($divisis->take(1) as $divisi)

<div class="card mb-5 px-5 py-5">
    <img src="../logo/{{$divisi->bem->logo}}" class="card-img-top" alt="..." width="150" height="500">
    <div class="card-body text-center mt-4">
        <h3 class="card-title fw-bold mb-3 text-uppercase">{{$divisi->bem->nama}}</h3>
        <h3 class="fw-bold  text-decoration-underline text-uppercase">Divisi Departemen</h3>
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
                <h5 class="card-title">{{$divisi->nama}}</h5>
                <p class="card-text"><pre>Ketua Departemen  : {{$divisi->departemen->ketua}}</pre>
                <pre>Ketua Divisi      : {{$divisi->ketua}}</pre></p>
                <p class="card-text">{{$divisi->tugas}}</p>
                <a href="/departemen/{{$divisi->departemen->id}}" class="btn btn-primary">Lihat Departemen</a>
            </div>
            </div>
        </div>       
        @endforeach
    </div>
</div>

<div class="d-flex justify-content-center mt-3">
    @if(!empty($divisis))
    <div class="pagination">
        {{ $divisis->links() }}
    </div>
    @endif
</div>

<br><br><br>

@endsection