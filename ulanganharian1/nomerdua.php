<?php
function kamarHotel ($nama, $noWa, $alamat, $tipeKamar1, $tipeKamar2, $tipeKamar3, $harga1, $harga2, $harga3, $lamaMenginap, $lebihMenginap, ){
    echo "=== Program Reservasi Hotel Sederhana === <br/>";
    echo "Nama Pemesan : $nama <br/>";
    echo "Nomor WhatsApp: $noWa <br/>";
    echo "Alamat : $alamat <br/>";

    if($tipeKamar1 == "Delux"  ){
      $harga1 = 200000;
        if ($lamaMenginap >= $lebihMenginap  ){
            $biayaDiskon  = $harga1 *0.5;
            $totalHarga = $harga1 *$lamaMenginap +$biayaDiskon;
        }else {
           $biayaDenda =0;
            $totalHarga ($biayaDiskon*$lamaMenginap )- $diskon;
        }

    } else if ($tipeKamar2 == "Superior" ){
        $harga2 = 400000;
          if ($lamaMenginap >= $lebihMenginap  ){
              $biayaDiskon  = $harga2 *0.35;
              $totalHarga = $harga2 *$lamaMenginap +$biayaDiskon;
          }else {
             $biayaDenda =0;
            //   $totalHarga ($biayaDiskon*$lamaMenginap )- $diskon;
          } 
        } 
    else if ($tipeKamar3 == "Premium" ){
        $harga3 = 400000;
          if ($lamaMenginap >= $lebihMenginap  ){
              $biayaDiskon  = $harga3 *0.35;
              $totalHarga = $harga3 *$lamaMenginap +$biayaDiskon;
          }else {
             $biayaDenda =0;
            //   $totalHarga ($biayaDiskon*$lamaMenginap )- $diskon;
          } 
        } 

 echo "Tipe kamar : $tipeKamar1 <br/>";
 echo "Harga : $harga1";
 echo "Diskon: $diskon";
 
 


    
}

echo kamarHotel ("Salma Aisyah", "08989898989", "Jl. Abdul Muis No . 44", " Delux", "Superior", "Premium", 200000, 400000, 800000, 4, 5, );
    ?>

$diskon, $totalHarga, $status