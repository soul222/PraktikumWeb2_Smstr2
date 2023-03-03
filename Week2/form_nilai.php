<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <!-- Header -->
    <div class="">
      <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Sistem Penilaian</a>
        </div>
      </nav>
    </div>
    <!-- ./Header -->
    <!-- Content -->
    <!-- Title -->
    <div class="">
      <nav class="navbar navbar-expand-lg bg-body">
        <div class="container-fluid">
          <h1 class="navbar-brand fs-2 fw-bold">Form Nilai Siswa</h1>
        </div>
      </nav>
    </div>
    <!-- ./Title -->
    <div class="container">
      <main class="row">
      <form class="col-12" method="POST" action="form_nilai.php">
      <div class="form-group row">
        <label class="col-4 col-form-label" for="name">Nama Lengkap</label> 
        <div class="col-4">
          <input id="name" name="name" placeholder="Nama Lengkap" type="text" required="required" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="matKul" class="col-4 col-form-label">Mata Kuliah</label> 
        <div class="col-4">
          <select id="matKul" name="matKul" required="required" class="custom-select">
            <option value="Dasar-Dasar Pemograman">Dasar-Dasar Pemograman</option>
            <option value="Basis Data 1">Basis Data 1</option>
            <option value="Pemograman Web">Pemograman Web</option>
          </select>
        </div>
      </div>
      <div class="form-group row">
        <label for="nilai_UTS" class="col-4 col-form-label">Nilai UTS</label> 
        <div class="col-4">
          <input id="nilai_UTS" name="nilai_UTS" placeholder="Masukan Nilai UTS" type="text" required="required" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="nilai_UAS" class="col-4 col-form-label">Nilai UAS</label> 
        <div class="col-4">
          <input id="nilai_UAS" name="nilai_UAS" placeholder="Masukan Nilai UAS" type="text" class="form-control" required="required">
        </div>
      </div>
      <div class="form-group row">
        <label for="nilai_Tugas" class="col-4 col-form-label">Nilai Tugas/Praktikum</label> 
        <div class="col-4">
          <input id="nilai_Tugas" name="nilai_Tugas" placeholder="Masukan Nilai Tugas" type="text" class="form-control" required="required">
        </div>
      </div>
      <div class="form-group row">
        <div class="offset-4 col-4">
        <input type="submit" value="Simpan" name="simpan" class="btn btn-primary">
        </div>
      </div>
    </form>
      </main>
    </div>
    <!-- Footer -->
    <div class="">
      <nav class="navbar fixed-bottom navbar-expand-lg bg-light">
        <div class="container-fluid">
          <h1 class="navbar-brand fs-2 fw-bold">Develop By@Soultan </h1>
        </div>
      </nav>
    </div>
    <!-- ./Footer -->
  </body>
</html>
<!-- ./Content -->
<?php

        require_once "function.php";
        $nama = $_POST["name"];
        $mata_Kuliah = $_POST["matKul"];
        $nilai_UTS = $_POST["nilai_UTS"];
        $nilai_UAS = $_POST["nilai_UAS"];
        $nilai_Tugas = $_POST["nilai_Tugas"];
        $nilai_Rata = ($nilai_UTS + $nilai_UAS + $nilai_Tugas)/ 3;
        $format_nilai = (int)$nilai_Rata;
        $lulus = Kelulusan($format_nilai);
        $ket = grade($format_nilai);
        // Mencetak Nilai Variable
        echo <<<Hasil
        <h1>Hasil Nilai Mahasiswa</h1>
        <p>Nama : $nama</p>
        <p>Mata Kuliah : $mata_Kuliah</p>
        <p>Nilai UTS : $nilai_UTS</p>
        <p>Nilai UAS : $nilai_UAS</p>
        <p>Nilai Tugas : $nilai_Tugas</p>
        <p>Nilai Rata-Rata : $format_nilai</p>
        <p>Grade : $ket</p>
        <p>Keterangan : $lulus</p>
        Hasil;
?>