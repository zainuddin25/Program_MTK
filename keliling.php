<?php
// echo "keliling Lingkaran \n";
echo "=========================\n";
echo "sistem operasi aritmatika\n";

// Reza Aditya Pratama5


$keluar=true;

while($keluar){

    echo "selamat datang dimenu pembagian\n";

    $angka_satu=readline("masukan diameter lingkaran\t: ");
    
    //validasi input angka pertama
    if(!preg_match("/^[0-9]*$/",$angka_satu)){//jika $angka_satu bukan angka
        echo "maaf input hanya bisa angka !!!\n";
    continue;
    }

    echo "keliling dari lingkaran yang berdiameter $angka_satu adalah: ".($angka_satu*(22/7))."\n";

    $ulangi=readline("ulangi lagi(yes/no): ");
    if($ulangi!=="yes" || $ulangi=="no" ){
        $keluar=false;
    }
}

// $data_menu=["penjumlahan","pengurangan","perkalian","pembagian","keliling lingkaran"];

// $berhenti=true;
// while($berhenti)
// {
//     $nomor=1 ;
//     foreach($data_menu as $data)
//     {
//         echo $nomor.$data."\n";
//         $nomor++;
//     }

//     $pilih_menu=readline("Pili menu :");

//     if($pilih_menu==1)
//     {
//         // Fitur Keliling Lingkaran
//         echo "penjumlahan\n";
//         include('program_matematika.php');
        
//     }elseif($pilih_menu==2)
//     {
//         // Fitur Pengurangan
//         echo "pengurangan\n";
//         include('pengurangan.php');
//     }elseif($pilih_menu==3)
//     {
//         echo "perkalian\n";
//         //perkalian
//         include('perkalian.php');
//     }elseif($pilih_menu==4){
//         echo "pembagian\n";
//         //pembagian
//         include('pembagian.php');
//     }elseif($pilih_menu==5){
//         echo "keliling\n";
//         //keliling
//         $keluar=true;

//             while($keluar){

//                 echo "selamat datang di menu keliling lingkaran\n";
//                 $angka_satu=readline("masukan angka pertama\t: ");
                
//                 //validasi input angka pertama
//                 if(!preg_match("/^[0-9]*$/",$angka_satu)){//jika $angka_satu bukan angka
//                     echo "maaf input hanya bisa angka !!!\n";
//                 continue;
//                 }

//                 echo "keliling dari lingkaran yang berdiameter $angka_satu adalah: ".($angka_satu*(22/7))."\n";

//                 $ulangi=readline("ulangi lagi(yes/no): ");
//                 if($ulangi!=="yes" || $ulangi=="no" ){
//                     $keluar=false;
//                 }
//             }
//     }else{
//         echo "anda tidak memilih menu";
//     }

//     // $ulangi=readline("ulangi lagi");
//     // if($ulangi=="no")
//     // {
//     //     $berhenti=false;
//     // }


// }