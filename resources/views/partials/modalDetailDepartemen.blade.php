<div class="modal fade" id="detail-departemen<?= $departemen->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title fw-bold text-center" id="exampleModalLabel">Detail Departemen</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body row">

                <div class="form-group mt-3">
                    <div class="d-flex justify-content-center">
                        <label class="mx-4 w-25">Nama Departemen</label>
                        <input type="text" name="nama" class="form-control mx-4" value="{{$departemen ->nama}}" autofocus autocomplete="off" disabled>
                    </div>
                </div>

                <div class="form-group mt-3">
                    <div class="d-flex justify-content-center">
                        <label class="mx-4 w-25">Ketua</label>
                        <input type="text" name="ketua" class="form-control mx-4" value="{{$departemen ->ketua}}" autofocus autocomplete="off" disabled>
                    </div>
                </div>

                <div class="form-group mt-3">
                    <div class="d-flex justify-content-center">
                        <label class="mx-4 w-25">Wakil Ketua</label>
                        <input type="text" name="wketua" class="form-control mx-4" value="{{$departemen ->wketua}}" autofocus autocomplete="off" disabled>
                    </div>
                </div>

                <div class="form-group mt-3">
                    <div class="d-flex justify-content-center">
                        <label class="mx-4 w-25">Sekretaris</label>
                        <input type="text" name="sekretaris" class="form-control mx-4" value="{{$departemen ->sekretaris}}" autofocus autocomplete="off" disabled>
                    </div>
                </div>

                <div class="form-group mt-3">
                    <div class="d-flex justify-content-center">
                        <label class="mx-4 w-25">Bendahara</label>
                        <input type="text" name="bendahara" class="form-control mx-4" value="{{$departemen ->bendahara}}" autofocus autocomplete="off" disabled>
                    </div>
                </div>


                <div class="form-group mt-3">
                    <div class="d-flex justify-content-center">
                        <label class="mx-4 w-25">Tugas</label>
                        <textarea name="visi" class="form-control mx-4" id="visi" cols="30" rows="10" value="{{ $departemen -> tugas }}" disabled>{{ $departemen -> tugas }}</textarea>
                    </div>
                </div>


                <div class="form-group mt-3">
                    <div class="d-flex justify-content-start">
                        <label class="mx-4 w-25">Logo</label>
                        <img src="../logo/{{$departemen->logo}}" width="350" alt=""  class=" mx-4">
                    </div>
                </div>




            </div>
            <div class="modal-footer">
                <button style="width: 100%" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
