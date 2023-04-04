<?php
$model = new Produk();
$data_pembelian = $model->tampilPembelian();
?>
<!-- Main content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard Pembelian</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php?hal=home">Home</a></li>
                        <li class="breadcrumb-item active">Pembelian</li>
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
                            Produk
                        </th>
                        <th>
                            Jumlah
                        </th>
                        <th>
                            Harga Beli
                        </th>
                        <th>
                            Vendor
                        </th>
                    </thead>
                    <tbody class="text-center">
                        <!-- cetak data array pembelian -->
                        <?php
                        $no = 1;
                        foreach ($data_pembelian as $value) {

                        ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td><?php echo $value['nomor'] ?></td>
                                <td><?php echo $value['tanggal'] ?></td>
                                <td><?php echo $value['namaproduk'] ?></td>
                                <td><?php echo $value['jumlah'] ?></td>
                                <td><?php echo $value['harga'] ?></td>
                                <td><?php echo $value['namavendor'] ?></td>
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