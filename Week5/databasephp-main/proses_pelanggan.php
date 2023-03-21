<?php 
require_once 'dbkoneksi.php';
?>
<?php
   $_kode = $_POST['kode'];
   $_nama = $_POST['nama'];
   $_jenisKelamiin = $_POST['jk'];
   $_tmpLahir = $_POST['tmp_lahir'];
   $_tglLahir = $_POST['tgl_lahir'];
   $_email = $_POST['email'];
   $_kartuId = $_POST['kartu_id'];

   $_proses = $_POST['proses'];

   // array data
   $ar_data[]=$_kode; // ? 2
   $ar_data[]=$_nama; // ? 2
   $ar_data[]=$_jenisKelamiin;// 3
   $ar_data[]=$_tmpLahir;
   $ar_data[]=$_tglLahir;
   $ar_data[]=$_email; // ? 7
   $ar_data[]=$_kartuId; // ? 7

   if($_proses == "Simpan"){
    // data baru
    $sql = "INSERT INTO pelanggan (kode,nama,jk,tgl_lahir,tmp_lahir,
    email,kartu_id) VALUES (?,?,?,?,?,?,?)";
   }else if($_proses == "Update"){
    $ar_data[]=$_POST['idedit'];// ? 8
    $sql = "UPDATE pelanggan SET kode=?,nama=?,jk=?,tgl_lahir=?,
    tmp_lahir=?,email=?,kartu_id=? WHERE id=?";
   }
   if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
   }
   // dIRECT
   header('location:list_pelenggaan.php');
?>