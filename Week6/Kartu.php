<?php
$model = new Produk();
$data_kartu= $model->tampilKartu();
?>
<!-- Main content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard Kartu</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php?hal=home">Home</a></li>
                        <li class="breadcrumb-item active">Kartu</li>
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
                            Diskon
                        </th>
                        <th>
                            Iuran
                        </th>
                    </thead>
                    <tbody class="text-center">
                        <!-- cetak data array Jenis Kartu -->
                        <?php
                        $no = 1;
                        foreach ($data_kartu as $value) {

                        ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td><?php echo $value['kode'] ?></td>
                                <td><?php echo $value['nama'] ?></td>
                                <td><?php echo $value['diskon'], "%" ?></td>
                                <td><?php echo "Rp. ", $value['iuran'] ?></td>
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