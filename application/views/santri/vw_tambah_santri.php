<main id="main" class="main">
    <div class="pagetitle">
        <h1><?php echo $judul; ?></h1>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title">Form Pendaftaran</h1>
                        <!-- Vertical Form -->
                        <form class="row g-3" action="" method="POST" enctype="multipart/form-data">
                            <h4> <span class="badge border-primary border-1 text-primary">Data Diri</span></h4>
                            <div class="col-12">
                                <label for="nama" class="form-label">Nama Lengkap</label>
                                <input type="text" name="nama" value="<?= set_value('nama') ?>" class="form-control" id="nama" placeholder="Nama Lengkap">
                                <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="col-12">
                                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                <select name="jenis_kelamin" value="<?= set_value('jenis_kelamin') ?>" id="jenis_kelamin" class="form-control">
                                    <option value="">Jenis Kelamin</option>
                                    <option value="Laki-laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                                <?= form_error('jenis_kelamin', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="col-12">
                                <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" value="<?= set_value('tempat_lahir') ?>" class="form-control" id="tempat_lahir" placeholder="Tempat Lahir">
                                <?= form_error('tempat_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="col-12">
                                <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir" value="<?= set_value('tanggal_lahir') ?>" class="form-control" id="tanggal_lahir" placeholder="Tanggal Lahir">
                                <?= form_error('tanggal_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="col-12">
                                <label for="telp" class="form-label">No WA Santri</label>
                                <input type="text" name="telp" value="<?= set_value('telp') ?>" class="form-control" id="telp" placeholder="No Telepon Santri">
                                <?= form_error('telp', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <h4> <span class="badge border-primary border-1 text-primary">Akademik</span></h4>
                            <div class="col-12">
                                <label for="status_kuliah" class="form-label">Status Kuliah</label>
                                <select name="status_kuliah" value="<?= set_value('status_kuliah') ?>" id="status_kuliah" class="form-control">
                                    <option value="">Status Kuliah</option>
                                    <option value="Sudah Diterima">Sudah Diterima</option>
                                    <option value="Belum Diterima">Belum Diterima</option>
                                </select>
                                <?= form_error('status_kuliah', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>

                            <div class="col-12">
                                <label for="kampus" class="form-label">Nama Kampus</label>
                                <input type="text" name="kampus" value="<?= set_value('kampus') ?>" class="form-control" id="kampus" placeholder="Nama Kampus">
                                <?= form_error('kampus', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="col-12">
                                <label for="prodi" class="form-label">Prodi</label>
                                <input type="text" name="prodi" value="<?= set_value('prodi') ?>" class="form-control" id="prodi" placeholder="Prodi">
                                <?= form_error('prodi', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="col-12">
                                <label for="jenjang" class="form-label">Jenjang</label>
                                <select name="jenjang" value="<?= set_value('jenjang') ?>" id="jenjang" class="form-control">
                                    <option value="">Jenjang</option>
                                    <option value="D1">D1</option>
                                    <option value="D2">D2</option>
                                    <option value="D3">D3</option>
                                    <option value="D4">D4</option>
                                    <option value="S1">S1</option>
                                    <option value="S2">S2</option>
                                </select>
                                <?= form_error('jenjang', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>

                            <div class="col-12">
                                <label for="angkatan_kuliah" class="form-label">Angkatan Kuliah</label>
                                <select name="angkatan_kuliah" value="<?= set_value('angkatan_kuliah') ?>" class="form-control" id="angkatan_kuliah">
                                    <option>Pilih Tahun</option>
                                    <?php $years = range(2015, strftime("%Y", time())); ?>
                                    <?php foreach ($years as $year) : ?>
                                        <option value="<?php echo $year; ?>"><?php echo $year; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <?= form_error('angkatan_kuliah', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <h4> <span class="badge border-primary border-1 text-primary">Domisili</span></h4>
                            <div class="col-12">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input type="text" name="alamat" value="<?= set_value('alamat') ?>" class="form-control" id="alamat" placeholder="Alamat">
                                <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="col-12">
                                <label for="kelurahan" class="form-label">Kelurahan</label>
                                <input type="text" name="kelurahan" value="<?= set_value('kelurahan') ?>" class="form-control" id="kelurahan" placeholder="Kelurahan">
                                <?= form_error('kelurahan', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="col-12">
                                <label for="kecamatan" class="form-label">Kecamatan</label>
                                <input type="text" name="kecamatan" value="<?= set_value('kecamatan') ?>" class="form-control" id="kecamatan" placeholder="Kecamatan">
                                <?= form_error('kecamatan', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="col-12">
                                <label for="kabupaten_kota" class="form-label">Kabupaten Kota</label>
                                <input type="text" name="kabupaten_kota" value="<?= set_value('kabupaten_kota') ?>" class="form-control" id="kabupaten_kota" placeholder="Kabupaten Kota">
                                <?= form_error('kabupaten_kota', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="col-12">
                                <label for="provinsi" class="form-label">Provinsi</label>
                                <input type="text" name="provinsi" value="<?= set_value('provinsi') ?>" class="form-control" id="provinsi" placeholder="Provinsi">
                                <?= form_error('provinsi', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <h4> <span class="badge border-primary border-1 text-primary">Orangtua</span></h4>
                            <div class="col-12">
                                <label for="nama_orangtua" class="form-label">Nama Orangtua</label>
                                <input type="text" name="nama_orangtua" value="<?= set_value('nama_orangtua') ?>" class="form-control" id="nama_orangtua" placeholder="Nama Orangtua">
                                <?= form_error('nama_orangtua', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="col-12">
                                <label for="telp_orangtua" class="form-label">No Telp Orangtua</label>
                                <input type="text" name="telp_orangtua" value="<?= set_value('telp_orangtua') ?>" class="form-control" id="telp_orangtua" placeholder="No Telp Orangtua">
                                <?= form_error('telp_orangtua', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            
                            
                            <div>
                                <a href="<?= base_url('Santri') ?>" class="btn btn-danger">Tutup</a>
                                <button type="submit" name="tambah" class="btn btn-primary justify-right">Tambah Kamar</button>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
    </section>

</main>