<?php
$model = new Produk();
$data_pembayaran = $model->tampilPembayaran();
?>
<!-- Main content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard Pembayaran</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php?hal=home">Home</a></li>
                        <li class="breadcrumb-item active">Pembayaran</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped">
                    <thead class="text-center">
                        <th>
                            No
                        </th>
                        <th>
                            Kode
                        </th>
                        <th>
                            Tanggal
                        </th>
                        <th>
                            Jumlah
                        </th>
                        <th>
                            Ke
                        </th>
                        <th>
                            Nama Pelanggan
                        </th>
                    </thead>
                    <tbody class="text-center">
                        <!-- cetak data array pembayaran-->
                        <?php
                        $no = 1;
                        foreach ($data_pembayaran as $value) {

                        ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td><?php echo $value['nokuitansi'] ?></td>
                                <td><?php echo $value['tanggal'] ?></td>
                                <td><?php echo $value['jumlah'] ?></td>
                                <td><?php echo $value['ke'] ?></td>
                                <td><?php echo $value['pesanan_id'] ?></td>
                            </tr>
                        <?php
                            $no++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

    </section>
    <!-- /.content -->
</div>