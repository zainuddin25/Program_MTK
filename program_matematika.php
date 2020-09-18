<?php
echo "sistem operasi aritmatika\n";
echo "=========================\n";

$data_menu=["penjumlahan","pengurangan","perkalian","pembagian","keliling lingkaran"];

$berhenti=true;
while($berhenti)
{
    $nomor=1 ;
    foreach($data_menu as $data)
    {
        echo $nomor.$data."\n";
        $nomor++;
    }

    $pilih_menu=readline("Pili menu :");

    if($pilih_menu==1)
    {
        // Fitur penjumlahan
        echo "penjumlahan\n";
        $keluar=true;

            while($keluar){
                $angka_satu=readline("masukan angka pertama\t: ");
                $angka_dua=readline("masukan angka kedua\t: ");
                //validasi input angka pertama
                if(!preg_match("/^[0-9]*$/",$angka_satu) ||(!preg_match("/^[0-9]*$/",$angka_dua))){//jika $angka_satu bukan angka
                    echo "maaf input hanya bisa angka !!!\n";
                continue;
                }

                echo "hasil dari $angka_satu + $angka_dua adalah: ".($angka_satu+$angka_dua)."\n";

                $ulangi=readline("ulangi lagi(yes/no): ");
                if($ulangi!=="yes" || $ulangi=="no" ){
                    $keluar=false;
                }
            }
    }elseif($pilih_menu==2)
    {
        // Fitur Pengurangan
        echo "pengurangan\n";
        include('pengurangan.php');
    }elseif($pilih_menu==3)
    {
        echo "perkalian\n";
        //perkalian
        include('perkalian.php');
    }elseif($pilih_menu==4){
        echo "pembagian\n";
        //pembagian
        include('pembagian.php');
    }elseif($pilih_menu==5){
        echo "keliling\n";
        //keliling
        include('keliling.php');
    }else{
        echo "anda tidak memilih menu";
    }

    // $ulangi=readline("ulangi lagi");
    // if($ulangi=="no")
    // {
    //     $berhenti=false;
    // }
} 


