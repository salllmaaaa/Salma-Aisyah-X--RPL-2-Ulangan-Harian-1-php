<?php

function pesertaDidik ($absen, $kondisiTerminasi, $kt1, $kt2, $kt3, $kt4, $kt5, $kt6, $kt7){
    for($absen; $absen <= $kondisiTerminasi; $absen++){
        if($absen == $kt1 || $absen == $kt2 || $absen == $kt3){
             echo "Peserta didik no absen $absen tidak hadir <br/>";
        } else if ( $absen == $kt3 || $absen == $kt4 || $absen == $kt5){
            echo " Peseta didik no absen $absen terlambat <br/>";
        }else if($absen == $kt5 || $absen == $kt6|| $absen == $kt7){
            echo " Peserta didik no absen $absen sakit <br/>";
        }else {
            echo "Peserta didik no absen $absen hadir <br/>";
        }
    }

}
echo pesertaDidik (1, 15, 2, 3, 10, 6, 8, 9, 13)
?>