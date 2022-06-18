@extends('layouts.main')

@section('content')
@include('sweetalert::alert')

<h2 class="mb-5 mt-5 mx-5 fw-bold">DAFTAR DEPARTEMEN</h2>

<a href="/manajemen/departemen/tambah" class="btn btn-success mx-5 ">Tambah Data</a>

<div class="table-container mr-5 mx-5">
    <table class="table table-striped table-bordered mb-5 ">
        <thead>
            <tr>
                <th scope="col" class="text-center">No</th>
                <th scope="col" class="text-center">Nama</th>
                <th scope="col" class="text-center">Ketua</th>
                <th scope="col" class="text-center">Wakil Ketua</th>
                <th scope="col" class="text-center">Jumlah Divisi</th>
                <th scope="col" class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 0 ?>
            @foreach ($departemens as $departemen)

            <?php $jumlah_divisi = DB::table('divisis')->where('departemen_id', $departemen->id)->count() ?>

            <tr>
                <td class="text-center">{{$departemens->firstItem() + $i}}</td>
                <td class="text-center">{{$departemen->nama}}</td>
                <td class="text-center">{{$departemen->ketua}}</td>
                <td class="text-center">{{$departemen->wketua}}</td>
                <td class="text-center">{{$jumlah_divisi}}</td>

                <td class="text-center">
                    <div class="d-flex justify-content-around">
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#detail-departemen<?= $departemen->id ?>">Detail</button> &nbsp;
                        <a href="/manajemen/departemen/{{$departemen->id}}" class="btn btn-warning">Ubah</a> &nbsp;
                        <a href="/manajemen/departemen/hapus/{{$departemen->id}}" class="btn btn-danger">Hapus</a>
                    </div>
                </td>
            </tr>

            <!-- MODAL DETAIL DEPARTEMEN -->
            @include('partials.modalDetailDepartemen')


            <?php $i++; ?>
            @endforeach

        </tbody>
    </table>
    @if(!empty($departemens))
    <div class="pagination">
        {{ $departemens->links() }}
    </div>
    @endif
</div>


@endsection