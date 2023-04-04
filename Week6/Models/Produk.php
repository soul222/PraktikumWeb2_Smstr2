<?php
class Produk
{
    private $koneksi;
    // akses property yang bersifat private menggunakan $this
    public function __construct()
    {
        // function construct adalah function yang pertama kali dijalankan
        global $conn;
        $this->koneksi = $conn;
    }
    public function tampil()
    {
        // cetak seluruh data table produk menggunakan query select
        $sql = "SELECT p.*, j.nama AS namajenisproduk
        FROM produk p INNER JOIN jenis_produk j ON j.id = p.jenis_produk_id
        ORDER BY p.id DESC";
        // gunakan method prepare untuk mengirim data $sql
        $ps = $this->koneksi->prepare($sql);
        // eksekusi data yang sudah disiapkan menggunakana method prepare
        $ps->execute();
        // siapkan data sql yang sudah dieksekusi menggunakan method fetchAll
        $data = $ps->fetchAll();
        // kembalikan data produk yang dalam bentuk array
        return $data;
    }

    public function tampilPesanan()
    {
        // cetak seluruh data table produk menggunakan query select
        // $sql = "SELECT p.*, j.nama AS nama FROM pelanggan p INNER JOIN kartu j ON j.id = p.kartu_id ORDER BY ASC DESC";
        // $sql = "SELECT p.*, j.nama AS namakartu FROM pelanggan p INNER JOIN kartu j ON j.id = p.kartu_id ORDER BY SUBSTRING(p.nama, 1, 1) ASC, p.nama ASC;";
        $sql = "SELECT pl.kode,pl.nama,pl.jk,pl.email,k.nama AS nama_kartu ,p.tanggal, p.total FROM pesanan p INNER JOIN pelanggan pl ON pl.id = p.pelanggan_id INNER JOIN kartu k ON k.id = pl.kartu_id ORDER BY pl.nama ASC, k.nama ASC;";
        // gunakan method prepare untuk mengirim data $sql
        $ps = $this->koneksi->prepare($sql);
        // eksekusi data yang sudah disiapkan menggunakana method prepare
        $ps->execute();
        // siapkan data sql yang sudah dieksekusi menggunakan method fetchAll
        $data = $ps->fetchAll();
        // kembalikan data produk yang dalam bentuk array
        return $data;
    }
    public function tampilVendor()
    {
        // cetak seluruh data table produk menggunakan query select
        // $sql = "SELECT p.*, j.nama AS nama FROM pelanggan p INNER JOIN kartu j ON j.id = p.kartu_id ORDER BY ASC DESC";
        // $sql = "SELECT p.*, j.nama AS namakartu FROM pelanggan p INNER JOIN kartu j ON j.id = p.kartu_id ORDER BY SUBSTRING(p.nama, 1, 1) ASC, p.nama ASC;";
        $sql = "SELECT * from vendor ORDER BY nama ASC";
        // gunakan method prepare untuk mengirim data $sql
        $ps = $this->koneksi->prepare($sql);
        // eksekusi data yang sudah disiapkan menggunakana method prepare
        $ps->execute();
        // siapkan data sql yang sudah dieksekusi menggunakan method fetchAll
        $data = $ps->fetchAll();
        // kembalikan data produk yang dalam bentuk array
        return $data;
    }
    public function tampilKartu()
    {
        // cetak seluruh data table produk menggunakan query select
        // $sql = "SELECT p.*, j.nama AS nama FROM pelanggan p INNER JOIN kartu j ON j.id = p.kartu_id ORDER BY ASC DESC";
        // $sql = "SELECT p.*, j.nama AS namakartu FROM pelanggan p INNER JOIN kartu j ON j.id = p.kartu_id ORDER BY SUBSTRING(p.nama, 1, 1) ASC, p.nama ASC;";
        $sql = "SELECT * FROM kartu ORDER BY id DESC LIMIT 5 OFFSET 0;";
        // gunakan method prepare untuk mengirim data $sql
        $ps = $this->koneksi->prepare($sql);
        // eksekusi data yang sudah disiapkan menggunakana method prepare
        $ps->execute();
        // siapkan data sql yang sudah dieksekusi menggunakan method fetchAll
        $data = $ps->fetchAll();
        // kembalikan data produk yang dalam bentuk array
        return $data;
    }
    public function tampilPembelian()
    {
        // cetak seluruh data table produk menggunakan query select
        // $sql = "SELECT p.*, j.nama AS nama FROM pelanggan p INNER JOIN kartu j ON j.id = p.kartu_id ORDER BY ASC DESC";
        // $sql = "SELECT p.*, j.nama AS namakartu FROM pelanggan p INNER JOIN kartu j ON j.id = p.kartu_id ORDER BY SUBSTRING(p.nama, 1, 1) ASC, p.nama ASC;";
        $sql = "SELECT p.*, i.nama AS namaproduk, j.nama AS namavendor FROM pembelian p INNER JOIN vendor j ON j.id = p.vendor_id INNER JOIN produk i ON i.id = p.produk_id ORDER BY i.nama DESC, j.nama DESC";
        // gunakan method prepare untuk mengirim data $sql
        $ps = $this->koneksi->prepare($sql);
        // eksekusi data yang sudah disiapkan menggunakana method prepare
        $ps->execute();
        // siapkan data sql yang sudah dieksekusi menggunakan method fetchAll
        $data = $ps->fetchAll();
        // kembalikan data produk yang dalam bentuk array
        return $data;
    }
    public function tampilPembayaran()
    {
        // cetak seluruh data table produk menggunakan query select
        // $sql = "SELECT p.*, j.nama AS nama FROM pelanggan p INNER JOIN kartu j ON j.id = p.kartu_id ORDER BY ASC DESC";
        // $sql = "SELECT p.*, j.nama AS namakartu FROM pelanggan p INNER JOIN kartu j ON j.id = p.kartu_id ORDER BY SUBSTRING(p.nama, 1, 1) ASC, p.nama ASC;";
        $sql = "SELECT * FROM pembayaran;";
        // gunakan method prepare untuk mengirim data $sql
        $ps = $this->koneksi->prepare($sql);
        // eksekusi data yang sudah disiapkan menggunakana method prepare
        $ps->execute();
        // siapkan data sql yang sudah dieksekusi menggunakan method fetchAll
        $data = $ps->fetchAll();
        // kembalikan data produk yang dalam bentuk array
        return $data;
    }
    public function tampilJenis_Produk()
    {
        // cetak seluruh data table produk menggunakan query select
        // $sql = "SELECT p.*, j.nama AS nama FROM pelanggan p INNER JOIN kartu j ON j.id = p.kartu_id ORDER BY ASC DESC";
        // $sql = "SELECT p.*, j.nama AS namakartu FROM pelanggan p INNER JOIN kartu j ON j.id = p.kartu_id ORDER BY SUBSTRING(p.nama, 1, 1) ASC, p.nama ASC;";
        $sql = "SELECT * FROM jenis_produk ORDER BY nama ASC;";
        // gunakan method prepare untuk mengirim data $sql
        $ps = $this->koneksi->prepare($sql);
        // eksekusi data yang sudah disiapkan menggunakana method prepare
        $ps->execute();
        // siapkan data sql yang sudah dieksekusi menggunakan method fetchAll
        $data = $ps->fetchAll();
        // kembalikan data produk yang dalam bentuk array
        return $data;
    }
}
?>
