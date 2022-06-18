<div class="modal fade" id="detail-divisi<?= $divisi->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title fw-bold text-center" id="exampleModalLabel">Detail Divisi</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body row">

                <div class="form-group mt-3">
                    <div class="d-flex justify-content-center">
                        <label class="mx-4 w-25">Nama Divisi</label>
                        <input type="text" name="nama" class="form-control mx-4" value="{{$divisi ->nama}}" autofocus autocomplete="off" disabled>
                    </div>
                </div>

                <div class="form-group mt-3">
                    <div class="d-flex justify-content-center">
                        <label class="mx-4 w-25">Nama Departemen</label>
                        <input type="text" name="nama" class="form-control mx-4" value="{{$divisi ->departemen->nama}}" autofocus autocomplete="off" disabled>
                    </div>
                </div>

            
                <div class="form-group mt-3">
                    <div class="d-flex justify-content-center">
                        <label class="mx-4 w-25">Tugas</label>
                        <textarea name="visi" class="form-control mx-4" id="visi" cols="30" rows="10" value="{{ $divisi -> tugas }}" disabled>{{ $divisi -> tugas }}</textarea>
                    </div>
                </div>


            </div>
            <div class="modal-footer">
                <button style="width: 100%" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
