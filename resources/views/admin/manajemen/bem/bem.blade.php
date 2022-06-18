@extends('layouts.main')

@section('content')
@include('sweetalert::alert')

<h2 class="mb-5 mt-5 mx-5 fw-bold">DAFTAR BADAN EKSEKUTIF MAHASISWA</h2>

<a href="/manajemen/bem/tambah" class="btn btn-success mx-5 ">Tambah Data</a>

<div class="table-container mr-5 mx-5">
    <table class="table table-striped table-bordered mb-5 ">
        <thead>
            <tr>
                <th scope="col" class="text-center">No</th>
                <th scope="col" class="text-center">Nama</th>
                <th scope="col" class="text-center">Ketua</th>
                <th scope="col" class="text-center">Wakil Ketua</th>
                <th scope="col" class="text-center">Jumlah Departemen</th>
                <th scope="col" class="text-center">Jumlah Divisi</th>
                <th scope="col" class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 0 ?>
            @foreach ($bems as $bem)

            <?php $jumlah_departemen = DB::table('departemens')->where('bem_id', $bem->id)->count() ?>
            <?php $jumlah_divisi = DB::table('divisis')->where('bem_id', $bem->id)->count() ?>

            <tr>
                <td class="text-center">{{$bems->firstItem() + $i}}</td>
                <td class="text-center">{{$bem->nama}}</td>
                <td class="text-center">{{$bem->ketua}}</td>
                <td class="text-center">{{$bem->wketua}}</td>
                <td class="text-center">{{$jumlah_departemen}}</td>
                <td class="text-center">{{$jumlah_divisi}}</td>

                <td class="text-center">
                    <div class="d-flex justify-content-around">
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#detail-bem<?= $bem->id ?>">Detail</button> &nbsp;
                        <a href="/manajemen/bem/{{$bem->id}}" class="btn btn-warning">Ubah</a> &nbsp;
                        <a href="/manajemen/bem/hapus/{{$bem->id}}" class="btn btn-danger">Hapus</a>
                    </div>
                </td>
            </tr>

            <!-- MODAL DETAIL BEM -->
            @include('partials.modalDetailBEM')


            <?php $i++; ?>
            @endforeach

        </tbody>
    </table>
    @if(!empty($bems))
    <div class="pagination">
        {{ $bems->links() }}
    </div>
    @endif
</div>


@endsection