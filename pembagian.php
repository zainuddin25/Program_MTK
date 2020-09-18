<?php
//Ahmad Khaniful HUda

$keluar=true;


while($keluar)
{

   //banner aplikasi

   echo"Selamat Datang Pada Menu Pembagian!!\n";

   //terima input dari lua
    $angka_satu=readline("masukan angka pertama: ");
    $angka_dua=readline("masukan angka kedua: ");


   //validasi input angka pertama

   if(!preg_match("/^[0-9]*$/",$angka_satu) || (!preg_match("/^[0-9]*$/",$angka_dua)))
   {
      echo"maaf input hanya bisa angka !!!\n";
       continue;
   }
             //tampilkan hasil perhitungan

   echo "hasil dari $angka_satu / $angka_dua adalah : ".($angka_satu/$angka_dua)."\n";

           //cel logika user untuk mengulangi

   $ulangi=readline("ulangi lagi (yes/no): ");
   if($ulangi!=="yes" || $ulangi=="no"){
      $keluar=false;
   }
}
