<?php
include_once("Header.php");
include_once("Sidebar.php");
?>
<!-- Content -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="Home.php">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="container-fluid">
    <div class="row">
  <div class="col-md-12">
  <div class="card">
    <div class="card-header border-transparent">
    <h3  class="card-title ">Daftar Nilai Siswa</h3>
    <div class="card-tools">
    <button type="button" class="btn btn-tool" data-card-widget="collapse">
    <i class="fas fa-minus"></i>
    </button>
    <button type="button" class="btn btn-tool" data-card-widget="remove">
      <i class="fas fa-times"></i>
    </button>
    </div>
    </div>
    <div class="card-body p-2">
    <?php include_once("Content1.php");?>
    </div>
    </div>
  </div>
    </div>
    </div>
</div>
<?php
include_once("Footer.php");
?>