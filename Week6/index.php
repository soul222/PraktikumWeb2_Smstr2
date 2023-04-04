<?php
include_once 'dbkoneksi.php';

include_once('navbar.php');
include_once('sidebar.php');
include_once('Models/Produk.php');
// Lakukan request halaman di menu url dengan membuka terlebih dahulu file index.php
$page = $_REQUEST['page'];
// jika ada request dari url browser berupa hal tampilkan halaman sesuai request
if (!empty($page)) {
    include_once $page . '.php';
} else {
    // jika tidak ada request hal dari url browser tampilkan halaman home
    include_once('home.php');
}


include_once('footer.php');
