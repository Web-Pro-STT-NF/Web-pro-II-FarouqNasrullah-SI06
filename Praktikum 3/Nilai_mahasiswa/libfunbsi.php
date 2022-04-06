<?php
function kelulusan($_nilai){
    if($_nilai > 60){
        return "LULUS";
    }else{
        return 'TIDAK LULUS';
    }
}

function grade($_nilai){
    $nilai_A = $_nilai >= 90;
    $nilai_B = $_nilai >= 75;
    $nilai_C = $_nilai >= 60;
    $nilai_D = $_nilai >= 40;
    $nilai_E = $_nilai >= 0;
        if($nilai_A){
            return "A";
        }elseif($nilai_B){
            return "B";
        }elseif($nilai_C){
            return "C";
        }elseif($nilai_D){
            return "D";
        }elseif($nilai_E){
            return "E";
        }else{
            return "I";
        }
}

function predikat($_grade){
    $nilai_A = $_grade >= 90;
    $nilai_B = $_grade >= 75;
    $nilai_C = $_grade >= 60;
    $nilai_D = $_grade >= 40;
    $nilai_E = $_grade >= 0;
    switch(true){
        case ($nilai_A):
            return "Sangat Memuaskan";
            break;
        case ($nilai_B):
            return "Memuaskan";
            break;
        case ($nilai_C):
            return "Cukup";
            break;
        case ($nilai_D):
            return "Kurang";
            break;
        case ($nilai_E):
            return "Sangat Kurang";
            break;
        default:
            return "Tidak Ada";
    }
} 