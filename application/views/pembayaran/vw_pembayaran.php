<main id="main" class="main">
  <div class="pagetitle">
    <h1><?php echo $judul; ?></h1>
  </div><!-- End Page Title -->
  <section class="section">
    <div class="row">
      <div class="col-md-6"><a href="<?= base_url() ?>Pembayaran/tambah" class="btn btn-info mb-2">Tambah Pembayaran</a></div>
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Data <?php echo $judul; ?></h5>
            <!-- Table with stripped rows -->
            <?= $this->session->flashdata('message'); ?>
            <table class="table datatable">
            <thead>
                    <tr>
                        <td>No</td>
                        <td>ID Santri</td>
                        <td>Status Pembayaran</td>
                        <td>Tanggal Pembayaran</td>
                        <td>Detail Pembayaran</td>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($pembayaran as $us) : ?>
                        <tr>
                            <td> <?= $i; ?>.</td>
                            <td><?= $us['id']; ?></td>
                            <td><?= $us['status']; ?></td>
                            <td><?= $us['tanggal']; ?></td>
                            <td>
                            <a href="<?= base_url('Pembayaran/edit/') . $us['id']; ?>" class="badge rounded-pill bg-danger">Detail</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <!-- End Table with hoverable rows -->
          </div>
        </div>
      </div>
    </div>
  </section>
</main>