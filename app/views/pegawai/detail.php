<div class="container">
    <div class="row mt-3">
        <div class="col">
            <h1><?= $data['title']; ?></h1>
            <hr>
            <div class="card" style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title"><?= $data['pegawai']['nama'] . ' - ' . $data['pegawai']['divisi']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $data['pegawai']['nip']; ?></h6>
                    <!-- <h6 class="card-subtitle mb-2 text-muted"><?= $data['pegawai']['nip']; ?></h6> -->
                    <h6 class="card-subtitle mb-2 text-muted"><?= $data['pegawai']['email']; ?></h6>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $data['pegawai']['telp']; ?></h6>
                    <a href="<?= BASEURL; ?>pegawai/" class="card-link">kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>