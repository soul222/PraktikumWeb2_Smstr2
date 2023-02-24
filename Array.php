<?php
// PHP Array Index
$Buah = ["Pepaya","Anggur","Jeruk"];
echo "<p>Ini Buah $Buah[1]</p>";
// Menambah Array 
$Buah[]="Pisang";
// Menghapus Nilai Array yang mengakibatkan Nilai Index Hilang
unset($Buah[1]);
// Mengubah Nilai Array
$Buah[0]="Manggis";
// Mencetak Jumlah Array
echo "Jumlah Buah: ".count($Buah);
// Mencetak Seluruh Array
echo "<ol>";
foreach ($Buah as $buah) {
    # code...
    echo "<li>$buah</li>";
}
echo "</ol>";
// PHP Array Asosiatif
$Buah = [
    "A" => "Anggur",
    "J" => "Jeruk",
    "P" => "Pepaya"
];
echo "<p>Ini Buah $Buah[P]</p>";
