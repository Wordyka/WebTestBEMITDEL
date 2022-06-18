@extends('layouts.main')

@section('content')
@include('sweetalert::alert')

<h2 class="mb-5 mt-5 mx-5 fw-bold">DAFTAR DIVISI</h2>

<a href="/manajemen/divisi/tambah" class="btn btn-success mx-5 ">Tambah Data</a>

<div class="table-container mr-5 mx-5">
    <table class="table table-striped table-bordered mb-5 ">
        <thead>
            <tr>
                <th scope="col" class="text-center">No</th>
                <th scope="col" class="text-center">Nama</th>
                <th scope="col" class="text-center">Departemen</th>
                <th scope="col" class="text-center">Ketua</th>
                <th scope="col" class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 0 ?>
            @foreach ($divisis as $divisi)

            <tr>
                <td class="text-center">{{$divisis->firstItem() + $i}}</td>
                <td class="text-center">{{$divisi->nama}}</td>
                <td class="text-center">{{$divisi->departemen->nama}}</td>
                <td class="text-center">{{$divisi->ketua}}</td>
                <td class="text-center">
                    <div class="d-flex justify-content-around">
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#detail-divisi<?= $divisi->id ?>">Detail</button> &nbsp;
                        <a href="/manajemen/divisi/{{$divisi->id}}" class="btn btn-warning">Ubah</a> &nbsp;
                        <a href="/manajemen/divisi/hapus/{{$divisi->id}}" class="btn btn-danger">Hapus</a>
                    </div>
                </td>
            </tr>

            <!-- MODAL DETAIL DIVISI -->
            @include('partials.modalDetailDivisi')


            <?php $i++; ?>
            @endforeach

        </tbody>
    </table>
    @if(!empty($divisis))
    <div class="pagination">
        {{ $divisis->links() }}
    </div>
    @endif
</div>

<br><br><br>


@endsection