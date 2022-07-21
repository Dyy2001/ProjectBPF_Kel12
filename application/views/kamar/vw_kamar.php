<main id="main" class="main">
  <div class="pagetitle">
    <h1><?php echo $judul; ?></h1>
  </div><!-- End Page Title -->
  <section class="section">
    <div class="row">
      <div class="col-md-6"><a href="<?= base_url() ?>Kamar/tambah" class="btn btn-info mb-2">Tambah Kamar</a></div>
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
                  <td>Type Kamar</td>
                  <td>No Kamar</td>
                  <td>Asrama</td>
                  <td>Status</td>
                  <td>Action</td>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1; ?>
                <?php foreach ($kamar as $us) : ?>
                  <tr>
                    <td><?= $i; ?></td>
                    <td><?= $us['type_kamar']; ?></td>
                    <td><?= $us['no_kamar']; ?></td>
                    <td><?= $us['asrama']; ?></td>
                    <td><?= $us['status']; ?></td>
                    <td>
                      <a href="<?= base_url('Kamar/hapus/') . $us['id']; ?>" class="badge rounded-pill bg-danger">Hapus</a>
                      <a href="<?= base_url('Kamar/edit') . $us['id'] ?>" class="badge rounded-pill bg-warning text-dark">Edit</a>
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