<main id="main" class="main">
  <div class="pagetitle">
    <h1><?php echo $judul; ?></h1>
  </div><!-- End Page Title -->
  <section class="section">
    <div class="row">
      <div class="col-md-6"><a href="<?= base_url() ?>Santri/tambah" class="btn btn-info mb-2">Tambah Santri</a></div>
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
                  <td>Nama</td>
                  <td>Jenis Kelamin</td>
                  <td>Domisili</td>
                  <td>Status</td>
                  <td>Action</td>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1; ?>
                <?php foreach ($santri as $us) : ?>
                  <tr>
                    <td><?= $i; ?></td>
                    <td><?= $us['nama']; ?></td>
                    <td><?= $us['jenis_kelamin']; ?></td>
                    <td><?= $us['kabupaten_kota']; ?></td>
                    <td><?= $us['status_santri']; ?></td>
                    <td>
                      <a href="<?= base_url('Santri/detail/') . $us['id']; ?>" class="badge rounded-pill bg-info">Detail</a>
                      <a href="<?= base_url('Santri/edit') . $us['id'] ?>" class="badge rounded-pill bg-warning text-dark">Edit</a>
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