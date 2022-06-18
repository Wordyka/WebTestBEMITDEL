<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="/"><img src="../../../gambar/logo.png" width="50" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link {{($title=='Beranda')?'active':''}}" href="/">Beranda</a>
                <a class="nav-link {{($title=='Departemen')?'active':''}}" href="/departemen">Departemen</a>
                <a class="nav-link {{($title=='Divisi')?'active':''}}" href="/divisi">Divisi</a>
            </div>
            <div class="navbar-nav ms-auto">
                <a class="nav-link active" href="/login"><i class="fa-solid fa-right-to-bracket"></i>&nbsp;Login</a>
            </div>
        </div>
    </div>
</nav>