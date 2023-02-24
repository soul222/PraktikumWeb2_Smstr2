<?php
// Variable Constant
define("Phi",3.14);
// Menghitung Luas Jari Lingkaran 8 & Keliling Jari Lingkaran 8
$Jari = 8;
$Luas = Phi * $Jari * $Jari;
$Keliling = 2 * Phi * $Jari;
echo <<<Lingkaran
<p>Luas Lingkaran dengan Jari-jari 8 adalah $Luas</p>
<p>Keliling Lingkaran dengan Jari-jari 8 adalah $Keliling</p>
Lingkaran;