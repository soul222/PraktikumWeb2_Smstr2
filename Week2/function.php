<?php
    function Kelulusan ($format_nilai){
        # code...
        if ($format_nilai >= 55){
            return "Lulus";
        }else{
            return "Tidak Lulus";
        }
    };

    function grade ($format_nilai){
        # code...
        if ($format_nilai >= 85 && $format_nilai <= 100) {
            # code...
            return "A";
        }elseif ($format_nilai >= 70 && $format_nilai <= 84) {
            # code...
            return "B";
        }elseif ($format_nilai >= 56 && $format_nilai <= 69) {
            # code...
            return "C";
        }elseif ($format_nilai >= 36 && $format_nilai <= 55) {
            # code...
            return "D";
        }elseif ($format_nilai >= 0 && $format_nilai <= 35) {
            # code...
            return "E";
        }else {
            # code...
            return "Error";
        }
    };
?>