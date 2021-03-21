<?php
function Kelulusan($_nilai_akhir) {
    if ($_nilai_akhir > 55){
        $kelulusan = "LULUS";
    } else {
        $kelulusan = "TIDAK LULUS";
    }
    return $kelulusan;
}

function Grade($_nilai_akhir) {
    if ($_nilai_akhir <= 35 and $_nilai_akhir >= 0) {
        $grade = "E";
    } elseif ($_nilai_akhir >= 36 AND $_nilai_akhir <= 55) {
        $grade = "D";
    } elseif ($_nilai_akhir >= 56 AND $_nilai_akhir <= 69) {
        $grade = "C";
    } elseif ($_nilai_akhir >= 70 AND $_nilai_akhir <= 84) {
        $grade = "B";
    } elseif ($_nilai_akhir >= 85 AND $_nilai_akhir <= 100) {
        $grade = "A";
    } else {
        $grade = "I";
    }
    return $grade;
}

function Predikat($_grade){
    switch ($_grade){
        case "E":
            $predikat = "Sangat Kurang";
        case "D":
            $predikat = "Kurang";
        case "C":
            $predikat = "Cukup";
        case "B":
            $predikat = "Memuaskan";
        case "A":
            $predikat = "Sangat Memuaskan";
        case "I":
            $predikat = "Tidak Ada";
    }
    return $predikat;
}