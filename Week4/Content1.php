<?php
$n1 = [
    "Id" => "1",
    "Nim" => "01101",
    "Uts" => 80,
    "Uas" => 90,
    "Tugas" => 95
];
$n2 = [
    "Id" => "2",
    "Nim" => "01102",
    "Uts" => 85,
    "Uas" => 90,
    "Tugas" => 95
];
$n3 = [
    "Id" => "3",
    "Nim" => "01103",
    "Uts" => 90,
    "Uas" => 96,
    "Tugas" => 95
];
// Simpan variable kedalam Array
$Arr_nilai = [$n1,$n2,$n3];

// Buat table Daftar Nilai Siswa dengan element html
?>
<table border="1" class="table m-0 table-striped text-center" width=100%;>
    <thead>
    <tr>
        <th>Id</th>
        <th>Nim</th>
        <th>Uts</th></th>
        <th>Uas</th>
        <th>Tugas</th>
        <th>Nilai Akhir</th>
    </tr>
    </thead>
    <tbody>
      <?php
      $nomor = 1;
      foreach ($Arr_nilai as $Nilai) {
        # code...
        $NilaiAkhir = ($Nilai["Uts"]+$Nilai["Uas"]+$Nilai["Tugas"])/3;
        $Format_Nilai = number_format($NilaiAkhir,2,",",".");
        echo <<<table
        <tr>
        <td>$nomor</td>
        <td>$Nilai[Nim]</td>
        <td>$Nilai[Uts]</td>
        <td>$Nilai[Uas]</td>
        <td>$Nilai[Tugas]</td>
        <td>$Format_Nilai</td>
        </tr>
        table;
        $nomor++;
      }
      ?>
    </tbody>
</table>