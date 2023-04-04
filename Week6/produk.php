<?php
$model = new Produk();
$data_produk = $model->tampil();
?>
<!-- Main content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard Produk</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php?hal=home">Home</a></li>
                        <li class="breadcrumb-item active">Produk</li>
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
                            Nama
                        </th>
                        <th>
                            Harga Beli
                        </th>
                        <th>
                            Harga Jual
                        </th>
                        <th>
                            Stok
                        </th>
                        <th>
                            Min Stok
                        </th>
                        <th>
                            Jenis Produk ID
                        </th>
                    </thead>
                    <tbody class="text-center">
                        <!-- cetak data array produk -->
                        <?php
                        $no = 1;
                        foreach ($data_produk as $value) {

                        ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td><?php echo $value['kode'] ?></td>
                                <td><?php echo $value['nama'] ?></td>
                                <td><?php echo $value['harga_beli'] ?></td>
                                <td><?php echo $value['harga_jual'] ?></td>
                                <td><?php echo $value['stok'] ?></td>
                                <td><?php echo $value['min_stok'] ?></td>
                                <td><?php echo $value['namajenisproduk'] ?></td>
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