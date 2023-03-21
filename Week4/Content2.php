<div class="container-fluid">
        <div class="row p-2">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header border-transparent">
                    <h3 class="card-title">
                    Belanja Online
                </h3>
                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool"  onclick="Remove()">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
            <form role="form" method="POST" action="Dashboardv2.php">
                    <div class="form-group row">
                        <label class="col-2 text-right col-form-label font-weight-bold" for="name">Customer</label> 
                        <div class="col-4">
                          <input id="customer" name="customer" placeholder="Nama Lengkap" type="text" required="required" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="produk" class="col-2 text-right col-form-label font-weight-bold">Pilih Produk</label> 
                        <div class="col-5">
                          <div class="custom-control custom-radio custom-control-inline">
                              <input name="produk" id="produk_0" type="radio" required="required" class="custom-control-input" value="TV"> 
                              <label for="produk_0" class="custom-control-label">TV</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                              <input name="produk" id="produk_1" type="radio" required="required" class="custom-control-input" value="Kulkas"> 
                              <label for="produk_1" class="custom-control-label">Kulkas</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                              <input name="produk" id="produk_2" type="radio" required="required" class="custom-control-input" value="Mesin Cuci"> 
                              <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
                            </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="nilai_UTS" class="col-2 text-right col-form-label font-weight-bold">Jumlah</label> 
                        <div class="col-2">
                          <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" required="required" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-1 col-4">
                        <input type="submit" value="Kirim" name="kirim" class="btn btn-primary">
                        </div>
                      </div>
                </form>
            </div>
                </div>
            </div>
            <div class="col-md-4">
            <div class="card">
                    <div class="card-header border-transparent">
                    <div class="card-title active">Daftar Harga</div>
                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool"  onclick="Remove()">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
            <div class="list-group">
            <div class="list-group-item list-group-item-action active">Daftar Harga</div>
                <div class="list-group-item">
                    TV : 4.200.000
            </div>
                <div class="list-group-item">
                    Kulkas : 3.100.000
                </div>
                <div class="list-group-item">
                    Mesin Cuci : 3.800.000
                </div>
                <div class="list-group-item list-group-item-action active justify-content-between">Harga Dapat Berubah Setiap Saat</div>
            </div>
            </div>
                </div>
            <!-- ./card -->
            </div>
        </div>
        <hr>
        <!-- Proses -->
        <div class="card">
            <div class="card-header border-tranparent">
                <h3 class="card-title">Hasil yang dikirm</h3>
            <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool"  onclick="Remove()">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
            <?php
            $customer = @$_POST["customer"];
            $product = @$_POST["produk"];
            $amount = @$_POST["jumlah"];
            switch ($product) {
                case 'TV':
                    $total = $amount * 4200000;
                    $format_total = number_format($total,0,",",".");
                    echo <<<Hasil
                        <p>Nama Customer : $customer</p>
                        <p>Produk Pilihan : $product</p>
                        <p>Jumlah Beli : $amount</p>
                        <p>Total Belanja : Rp $format_total</p>
                    Hasil;
                    break;
                case 'Kulkas':
                    $total = $amount * 3100000;
                    $format_total = number_format($total,0,",",".");
                    echo <<<Hasil
                        <p>Nama Customer : $customer</p>
                        <p>Produk Pilihan : $product</p>
                        <p>Jumlah Beli : $amount</p>
                        <p>Total Belanja : Rp $format_total</p>
                    Hasil;
                    break;
                case 'Mesin Cuci':
                    $total = $amount * 3800000;
                    $format_total = number_format($total,0,",",".");
                    echo <<<Hasil
                        <p>Nama Customer : $customer</p>
                        <p>Produk Pilihan : $product</p>
                        <p>Jumlah Beli : $amount</p>
                        <p>Total Belanja : Rp $format_total</p>
                    Hasil;
                    break;
                default:
                    # code...
                    break;
            }
        ?>
            </div>
        </div>
       
</div>