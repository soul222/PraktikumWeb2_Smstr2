<?php
$model = new Produk();
$data_pesanan = $model->tampilPesanan();
?>
<!-- Main content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard Pesanan</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php?hal=home">Home</a></li>
                        <li class="breadcrumb-item active">Pesanan</li>
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
                            Kode Pelanggan
                        </th>
                        <th>
                            Nama Pelanggan
                        </th>
                        <th>
                            Jenis Kelamin
                        </th>
                        <th>
                            Email
                        </th>
                        <th>
                            Jenis Kartu
                        </th>
                        <th>
                            Tanggal Pesanan
                        </th>
                        <th>
                            Total Pesanan
                        </th>
                    </thead>
                    <tbody class="text-center">
                        <!-- cetak data array pesanan -->
                        <?php
                        $no = 1;
                        foreach ($data_pesanan as $value) {

                        ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td><?php echo $value['kode'] ?></td>
                                <td><?php echo $value['nama'] ?></td>
                                <td><?php echo $value['jk'] ?></td>
                                <td><?php echo $value['email'] ?></td>
                                <td><?php echo $value['nama_kartu'] ?></td>
                                <td><?php echo $value['tanggal'] ?></td>
                                <td><?php echo "Rp. ", $value['total'] ?></td>
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