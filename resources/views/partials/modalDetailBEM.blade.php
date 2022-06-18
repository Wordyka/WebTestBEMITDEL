<div class="modal fade" id="detail-bem<?= $bem->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title fw-bold text-center" id="exampleModalLabel">Detail Badan Eksekutif Mahasiswa (BEM)</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body row">

                <div class="form-group mt-3">
                    <div class="d-flex justify-content-center">
                        <label class="mx-4 w-25">Nama Organisasi</label>
                        <input type="text" name="nama" class="form-control mx-4" value="{{$bem ->nama}}" autofocus autocomplete="off" disabled>
                    </div>
                </div>

                <div class="form-group mt-3">
                    <div class="d-flex justify-content-center">
                        <label class="mx-4 w-25">Ketua</label>
                        <input type="text" name="ketua" class="form-control mx-4" value="{{$bem ->ketua}}" autofocus autocomplete="off" disabled>
                    </div>
                </div>

                <div class="form-group mt-3">
                    <div class="d-flex justify-content-center">
                        <label class="mx-4 w-25">Wakil Ketua</label>
                        <input type="text" name="wketua" class="form-control mx-4" value="{{$bem ->wketua}}" autofocus autocomplete="off" disabled>
                    </div>
                </div>

                <div class="form-group mt-3">
                    <div class="d-flex justify-content-center">
                        <label class="mx-4 w-25">Sekretaris 1</label>
                        <input type="text" name="sekretaris1" class="form-control mx-4" value="{{$bem ->sekretaris1}}" autofocus autocomplete="off" disabled>
                    </div>
                </div>

                <div class="form-group mt-3">
                    <div class="d-flex justify-content-center">
                        <label class="mx-4 w-25">Sekretaris 2</label>
                        <input type="text" name="sekretaris2" class="form-control mx-4" value="{{$bem ->sekretaris2}}" autofocus autocomplete="off" disabled>
                    </div>
                </div>

                <div class="form-group mt-3">
                    <div class="d-flex justify-content-center">
                        <label class="mx-4 w-25">Bendahara 1</label>
                        <input type="text" name="bendahara1" class="form-control mx-4" value="{{$bem ->bendahara1}}" autofocus autocomplete="off" disabled>
                    </div>
                </div>

                <div class="form-group mt-3">
                    <div class="d-flex justify-content-center">
                        <label class="mx-4 w-25">Bendahara 2</label>
                        <input type="text" name="bendahara2" class="form-control mx-4" value="{{$bem ->bendahara2}}" autofocus autocomplete="off" disabled>
                    </div>
                </div>


                <div class="form-group mt-3">
                    <div class="d-flex justify-content-center">
                        <label class="mx-4 w-25">Visi</label>
                        <textarea name="visi" class="form-control mx-4" id="visi" cols="30" rows="10" value="{{ $bem -> visi }}" disabled>{{ $bem -> visi }}</textarea>
                    </div>
                </div>

                <div class="form-group mt-3">
                    <div class="d-flex justify-content-center">
                        <label class="mx-4 w-25">Misi</label>
                        <textarea name="misi" class="form-control mx-4" id="misi" cols="30" rows="10" value="{{ $bem -> misi }}" disabled>{{ $bem -> misi }}</textarea>
                    </div>
                </div>

                <div class="form-group mt-3">
                    <div class="d-flex justify-content-start">
                        <label class="mx-4 w-25">Logo</label>
                        <img src="../logo/{{$bem->logo}}" width="350" alt=""  class=" mx-4">
                    </div>
                </div>




            </div>
            <div class="modal-footer">
                <button style="width: 100%" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
