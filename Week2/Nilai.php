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