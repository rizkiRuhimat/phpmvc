<div class="container">
    <div class="row">
        <div class="col">
            <h1><?= $data['title']; ?></h1>
            <hr>
            <div class="row">
                <div class="col-sm-4">
                    <ul class="list-group">
                        <?php foreach ($data['pegawai'] as $d) : ?>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <?= $d['nama']; ?>
                            <a href="<?= BASEURL; ?>/pegawai/detail/<?= $d['id']; ?>"
                                class="badge badge-primary badge-pill">detail</a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>