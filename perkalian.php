<?php
// Muhammad Zainuddin Basyar
echo "Pengurangan \n";
        $keluar=true;

            while($keluar){
                $angka_satu=readline("masukan angka pertama\t: ");
                $angka_dua=readline("masukan angka kedua\t: ");
                //validasi input angka pertama
                if(!preg_match("/^[0-9]*$/",$angka_satu) ||(!preg_match("/^[0-9]*$/",$angka_dua))){//jika $angka_satu bukan angka
                    echo "maaf input hanya bisa angka !!!\n";
                continue;
                }

                echo "hasil dari $angka_satu * $angka_dua adalah: ".($angka_satu*$angka_dua)."\n";

                $ulangi=readline("ulangi lagi(yes/no): ");
                if($ulangi!=="yes" || $ulangi=="no" ){
                    $keluar=false;
                }
            }

?>