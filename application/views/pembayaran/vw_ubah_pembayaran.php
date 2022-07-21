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
                        <td>Santri</td>
                        <td>Jenis Kelamin</td>
                        <td>Kamar</td>
                        <td>Via Pembayaran</td>
                        <td>Status</td>
                    </tr>
                </thead>
                <tbody>
                    <form action="<?= base_url('Pembayaran/edit'); ?>" method="POST" enctype="multipart/form-data">
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
                            $total_bayar += $us['total'];
                            ?>
                            <tr>
                                <td><?= $us['id_santri']; ?></td>
                                <td><?= $us['tanggal']; ?></td>                               
                                <td><?= $us['total']; ?></td>                                                           
                            </tr>
                            <input type="hidden" name="sepatu[]" value="<?= $us['id_pembayaran']; ?>">
                            <input type="hidden" name="tanggal" value="<?= date('d/m/Y') ?>">
                            <input type="hidden" name="total" value="<?= $us['total']; ?>">
                            
                            <?php $i++; ?>
                        <?php endforeach; ?>
                        <tr>
                            <td>Santri</td>
                            <td><?= $us['id_santri']; ?></td>
                            </td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td colspan="5">
                                <select name="via" id="via" class="form-control">
                                    <option value="">Jenis Kelamin</option>
                                    <option value="Laki Laki">laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                    
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>VIA</td>
                            <td colspan="5">
                                <select name="via" id="via" class="form-control">
                                    <option value="">Pilih Bank</option>
                                    <option value="BRI">BRI - 1111-11111-11111-1111</option>
                                    <option value="MANDIRI">MANDIRI - 2222-2222-2222</option>
                                    <option value="BNI">BNI - 3333-3333-3333</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td colspan="5">
                                <select name="status" id="status" class="form-control">
                                    <option value="">Status</option>
                                    <option value="Lunas">Lunas</option>
                                    <option value="Belum Lunas">Belum Lunas</option>
                                    
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4" align="right"><strong>Total : </strong></td>
                            <td><?= rupiah($total_bayar); ?></td>
                            <td>
                                <input type="hidden" name="no_penjualan" value="PJ<?= time() ?>" readonly class="form-control">

                                <input type="hidden" name="bayar" value="<?= $total_bayar; ?>">

                                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>&nbsp;&nbsp;Pesan</button>
                            </td>
                        </tr>
                    </form>
                </tbody>
            </table>
        </div>
    </div>
</div>