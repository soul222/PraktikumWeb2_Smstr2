<?php
    // Jika Nama Variable sama dan value berbeda maka yang tercetak variable kedua
    $name = "efew";
    echo $name;
    echo "<br>";
    // ================
    $nama_Saya = "Soultan Amirul Mukminin";
    $Umur = 20;
    $Berat = 55;
    echo <<<Biodata
    <h5>Nama Saya : $nama_Saya</h5>
    <h5>Umur Saya adalah $Umur</h5>
    <h5>Berat Saya adalah $Berat</h5>
    Biodata;