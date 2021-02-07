<div class="row mt-5 ml-5">
    <div class="col-md-6">
        <div class="card mb-3">
            <div class="row no-gutters">
                <div class="col-sm-4">
                    <img src="<?= BASEURL; ?>/img/rizki.jfif" alt="">
                </div>
                <div class="col-sm-8">
                    <div class="card-body">
                        <h4 class="card-title"><?= $data['pegawai']['nama']; ?></h4>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional
                            content. This content is a little bit longer.</p>
                        <label for=""><strong>NIP : </strong></label>
                        <label for=""><strong><?= $data['pegawai']['nip']; ?></strong></label><br>
                        <label for=""><strong>Email : </strong></label>
                        <label for=""><strong><?= $data['pegawai']['email']; ?></strong></label><br>
                        <label for=""><strong>Alamat : </strong></label>
                        <label for=""><strong><?= $data['pegawai']['alamat']; ?></strong></label>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>