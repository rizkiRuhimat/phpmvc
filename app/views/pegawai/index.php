<div class="container">
    <div class="row mt-3">
        <div class="col">
            <?php Flasher::flash(); ?>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary tampilModalTambah" data-toggle="modal"
                data-target="#formModal">
                Tambah Data
            </button>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <form action="<?= BASEURL; ?>pegawai/cari" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari Pegawai" name="keyword" id="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit" id="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <h1><?= $data['title']; ?></h1>
            <hr>
            <div class="row">
                <div class="col-sm-6">
                    <ul class="list-group">
                        <?php foreach ($data['pegawai'] as $d) : ?>
                        <li class="list-group-item">
                            <?= $d['nama']; ?>
                            <!-- delete -->
                            <a href="<?= BASEURL; ?>pegawai/delete/<?= $d['id']; ?>"
                                class="badge badge-danger badge-pill float-right ml-1"
                                onclick="return confirm();">hapus</a>
                            <!-- edit -->
                            <a href="<?= BASEURL; ?>pegawai/edit/<?= $d['id']; ?>"
                                class="badge badge-success badge-pill float-right ml-1 tampilModalUbah"
                                data-toggle="modal" data-target="#formModal" data-id="<?= $d['id']; ?>">edit</a>
                            <!-- detail -->
                            <a href="<?= BASEURL; ?>pegawai/detail/<?= $d['id']; ?>"
                                class="badge badge-primary badge-pill float-right ml-1">detail</a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="frmModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel">Form Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>pegawai/tambah" method="POST">
                    <input type="hidden" name="id" id="id" value="">
                    <div class="form-row">
                        <div class="form-group col-md-8">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="nip">NIP</label>
                            <input type="text" class="form-control" name="nip" id="nip" placeholder="Nomor Induk">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="mail" placeholder="Email">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="telp">Telp</label>
                            <input type="text" class="form-control" id="telp" name="telp" placeholder="Mobile">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="divisi">Divisi</label>
                            <input type="text" class="form-control" id="divisi" name="divisi" placeholder="Divisi">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="kota">Kota</label>
                            <select id="kota" class="form-control" name="kota">
                                <option selected>Pilih...</option>
                                <option value="Jakarta Timur">Jakarta Timur</option>
                                <option value="Jakarta Pusat">Jakarta Pusat</option>
                                <option value="Jakarta Barat">Jakarta Barat</option>
                                <option value="Jakarta Utara">Jakarta Utara</option>
                                <option value="Jakarta Selatan">Jakarta Selatan</option>
                                <option value="Bekasi">Bekasi</option>
                                <option value="Depok">Depok</option>
                                <option value="Tangerang">Tangerang</option>
                                <option value="Bogor">Bogor</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="provinsi">Provinsi</label>
                            <select id="provinsi" class="form-control" name="provinsi">
                                <option selected>Pilih...</option>
                                <option value="DKI Jakarta">DKI Jakarta</option>
                                <option value="Jawa Barat">Jawa Barat</option>
                                <option value="Jawa Tengah">Jawa Tengah</option>
                                <option value="Jawa Timur">Jawa Timur</option>
                            </select>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
                </form>
            </div>
        </div>
    </div>
</div>