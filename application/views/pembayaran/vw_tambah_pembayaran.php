<main id="main" class="main">
  <div class="pagetitle">
    <h1><?php echo $judul; ?></h1>
  </div><!-- End Page Title -->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row">
        <div class="col-md-12">
            <?= $this->session->flashdata('message');
            ?>
        </div>
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <td>No</td>
                        <td>Tanggal</td>
                        <td>Nama Santri</td>
                        <td>Total</td>
                        <td>Aksi</td>
                    </tr>
                </thead>
                <tbody>
                    <form action="<?= base_url('Pembayaran/tambah'); ?>" method="POST" enctype="multipart/form-data">
                        <?php
                        function rupiah($angka)
                        {
                            $hasil_rupiah = "Rp " . number_format($angka, 2, ',', '.');
                            return $hasil_rupiah;
                        }
                        $i = 1;
                        $total_bayar = 0;
                        $total_p = 0; ?>
                        <?php foreach ($pembayaran as $us) :
                            $total_bayar += $us['total_bayar'];
                        ?>
                            <tr>
                                <td><?= $us['id'];?></td>
                                <td><?= $us['tanggal']; ?></td>
                                <td><?= $us['id_santri']; ?></td>
                                <td><?= $us['total_bayar']; ?></td>
                                <td><a href="<?= base_url('Santri/detail') . $us['id']; ?>" class="btn btn-danger">detail<i class="fa fa-trash"></a></td>
                            </tr>
                            <input type="hidden" name="tanggal" value="<?= date('d/m/Y') ?>">
                            <input type="hidden" name="id_santri" value="<?= $us['id_santri']; ?>">
                            <input type="hidden" name="total_bayar" value="<?= $us['total_bayar']; ?>">
                            <input type="hidden" name="total_p[]" value="<?= $us['total_bayar']; ?>">
                            <?php $i++; ?>
                        <?php endforeach; ?>
                        <tr>
                            <td>Pembayaran</td>
                            <td colspan="5">
                                <select name="pembayaran" id="pembayaran" class="form-control">
                                    <option value="">Pilih Bank</option>
                                    <option value="BRI">BRI - 1111-11111-11111-1111</option>
                                    <option value="MANDIRI">MANDIRI - 2222-2222-2222</option>
                                    <option value="BNI">BNI - 3333-3333-3333</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Bukti Transfer</td>
                            <td colspan="5">
                                <div class="custom-file">
                                    <input type="file" class="form-control" name="gambar" id="gambar">
                                    
                                </div>
                            </td>
                        </tr>
                        
                        <tr>
                            <td colspan="4" align="right"><strong>Total : </strong></td>
                            <td><?= rupiah($total_bayar); ?></td>
                            <td>
                                <input type="hidden" name="id_pembayaran" value="PJ<?= time() ?>" readonly class="form-control">

                                <input type="hidden" name="bayar" value="<?= $total_bayar; ?>">

                                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>&nbsp;&nbsp;Bayar</button>
                            </td>
                        </tr>
                    </form>
                </tbody>
            </table>
        </div>
    </div>
</div>
</main>