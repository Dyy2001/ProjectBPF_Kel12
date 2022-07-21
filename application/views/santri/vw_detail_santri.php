<main id="main" class="main">
    <div class="pagetitle">
        <h1><?php echo $judul; ?></h1>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    
                    <div class="card-body">
                        <h1 class="card-title">Detail</h1>
                        <!-- Vertical Form -->
                        <form class="row g-3" action="" method="POST" enctype="multipart/form-data">
                            <h4> <span class="badge border-primary border-1 text-primary">Data Diri</span></h4>
                            <div class="col-12">
                                <label for="nama" class="form-label">Nama Lengkap</label>
                                <input type="text" name="nama" value="<?= $santri['nama']; ?>" class="form-control" id="nama" readonly>

                            </div>
                            <div class="col-12">
                                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                <input type="text" name="nama" value="<?= $santri['jenis_kelamin']; ?>" class="form-control" id="nama" readonly>
                            </div>
                            <div class="col-12">
                                <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                                <input type="text" name="nama" value="<?= $santri['tempat_lahir']; ?>" class="form-control" id="nama" readonly>
                            </div>
                            <div class="col-12">
                                <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                <input type="text" name="nama" value="<?= $santri['tanggal_lahir']; ?>" class="form-control" id="nama" readonly>
                            </div>
                            <div class="col-12">
                                <label for="telp" class="form-label">No WA Santri</label>
                                <input type="text" name="nama" value="<?= $santri['telp']; ?>" class="form-control" id="nama" readonly>
                            </div>
                            <h4> <span class="badge border-primary border-1 text-primary">Akademik</span></h4>
                            <div class="col-12">
                                <label for="status_kuliah" class="form-label">Status Kuliah</label>
                                <input type="text" name="nama" value="<?= $santri['status_kuliah']; ?>" class="form-control" id="nama" readonly>
                            </div>

                            <div class="col-12">
                                <label for="kampus" class="form-label">Nama Kampus</label>
                                <input type="text" name="nama" value="<?= $santri['kampus']; ?>" class="form-control" id="nama" readonly>
                            </div>
                            <div class="col-12">
                                <label for="prodi" class="form-label">Prodi</label>
                                <input type="text" name="nama" value="<?= $santri['prodi']; ?>" class="form-control" id="nama" readonly>
                            </div>
                            <div class="col-12">
                                <label for="jenjang" class="form-label">Jenjang</label>
                                <input type="text" name="nama" value="<?= $santri['jenjang']; ?>" class="form-control" id="nama" readonly>
                            </div>

                            <div class="col-12">
                                <label for="angkatan_kuliah" class="form-label">Angkatan Kuliah</label>
                                <input type="text" name="nama" value="<?= $santri['angkatan_kuliah']; ?>" class="form-control" id="nama" readonly>
                            </div>
                            <h4> <span class="badge border-primary border-1 text-primary">Domisili</span></h4>
                            <div class="col-12">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input type="text" name="nama" value="<?= $santri['alamat']; ?>" class="form-control" id="nama" readonly>
                            </div>
                            <div class="col-12">
                                <label for="kelurahan" class="form-label">Kelurahan</label>
                                <input type="text" name="kelurahan" value="<?= $santri['kelurahan']; ?>" class="form-control" id="kelurahan" readonly>

                            </div>
                            <div class="col-12">
                                <label for="kecamatan" class="form-label">Kecamatan</label>
                                <input type="text" name="kecamatan" value="<?= $santri['kecamatan']; ?>" class="form-control" id="kecamatan" readonly>

                            </div>
                            <div class="col-12">
                                <label for="kabupaten_kota" class="form-label">Kabupaten Kota</label>
                                <input type="text" name="kabupaten_kota" value="<?= $santri['kabupaten_kota']; ?>" class="form-control" id="kabupaten_kota" readonly>

                            </div>
                            <div class="col-12">
                                <label for="provinsi" class="form-label">Provinsi</label>
                                <input type="text" name="provinsi" value="<?= $santri['provinsi']; ?>" class="form-control" id="provinsi" readonly>

                            </div>
                            <h4> <span class="badge border-primary border-1 text-primary">Orangtua</span></h4>
                            <div class="col-12">
                                <label for="nama_orangtua" class="form-label">Nama Orangtua</label>
                                <input type="text" name="nama_orangtua" value="<?= $santri['nama_orangtua']; ?>" class="form-control" id="nama_orangtua" readonly>

                            </div>
                            <div class="col-12">
                                <label for="telp_orangtua" class="form-label">No Telp Orangtua</label>
                                <input type="text" name="telp_orangtua" value="<?= $santri['telp_orangtua']; ?>" class="form-control" id="telp_orangtua" readonly>

                            </div>
                            
                            <div>
                                <a href="<?= base_url('Santri') ?>" class="btn btn-danger">Tutup</a>

                            </div>
                        </form>

                    </div>
                </div>

            </div>
    </section>

</main>