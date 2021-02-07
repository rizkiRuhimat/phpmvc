<div class="container">
    <div class="row mt-3">
        <div class="col">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#forModal">
                Tambah Data
            </button>

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


<!-- Modal -->
<div class="modal fade" id="forModal" tabindex="-1" aria-labelledby="forModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="forModalLabel">Form Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>pegawai/tambah" method="POST">
                    <div class="form-row">
                        <div class="form-group col-md-8">
                            <label for="inputNama">Nama</label>
                            <input type="text" class="form-control" id="inputNama" name="nama" placeholder="Nama">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="nip">NIP</label>
                            <input type="text" class="form-control" name="nip" id="nip" placeholder="Nomor Induk">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputemail">Email</label>
                        <input type="email" class="form-control" id="inputemail" name="mail" placeholder="Email">
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
                            <label for="inputProv">Kota</label>
                            <select id="inputProv" class="form-control" name="kota">
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
                            <label for="inputProv">Provinsi</label>
                            <select id="inputProv" class="form-control" name="provinsi">
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