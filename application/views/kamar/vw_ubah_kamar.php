<main id="main" class="main">
    <div class="pagetitle">
        <h1><?php echo $judul; ?></h1>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Form Ubah Kamar</h5>
                        <!-- Vertical Form -->
                        <form class="row g-3">
                            <div class="col-12">
                                <label for="no_kamar" class="form-label">Type Kamar</label>
                                <select name="type_kamar" value="<?= set_value('type_kamar') ?>" id="type_kamar" class="form-control">
                                    <option value="">Type Kamar</option>
                                    <option value="Large">Large</option>
                                    <option value="Medium">Medium</option>
                                </select>
                                <?= form_error('type_kamar', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="col-12">
                                <label for="no_kamar" class="form-label">No Kamar</label>
                                <input type="number" name="no_kamar" value="<?= set_value('no_kamar') ?>" class="form-control" id="no_kamar" placeholder="No Kamar">
                                <?= form_error('no_kamar', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="col-12">
                                <label for="asrama" class="form-label">Asrama</label>
                                <select name="asrama" value="<?= set_value('asrama') ?>" id="asrama" class="form-control">
                                    <option value="">Asrama</option>
                                    <option value="Putra">Putra</option>
                                    <option value="Putri">Putri</option>
                                </select>
                                <?= form_error('asrama', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>

                            <div>
                                <a href="<?= base_url('Kamar') ?>" class="btn btn-danger">Tutup</a>
                                <button type="submit" name="tambah" class="btn btn-primary justify-right">Tambah Kamar</button>
                            </div>
                        </form><!-- Vertical Form -->

                    </div>
                </div>

            </div>
    </section>

</main>