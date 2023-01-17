<?php
  echo "----------------------------------------------------------------------------";
  echo "<br>";
  echo "Program hitung luas dan keliling bangun datar";
  echo "<br>";
  echo "----------------------------------------------------------------------------";
  echo "<br>";

  //Segitiga
  echo "1.Luas Dan Keliling Segitiga";

  $alas = 4;
  $tinggi = 6;
  $sisimiring = 10;


  echo "<br>";
  echo "Alas     = $alas  cm";


  echo "<br>";
  echo "Tinggi         = $tinggi  cm";


  echo "<br>";
  echo "Sisimiring     = $sisimiring  cm";
  echo "<br>";

  //Luas Segitiga
  $hasil = 0.5 * $alas * $tinggi;
  echo "Luas Segitiga    = $hasil cm2";
  echo "<br>";

   //Keliling
  $hasil1 = ($alas + $sisimiring + $sisimiring);
  echo "Keliling Segitiga   = $hasil1 cm";
  echo "<br>";
  echo "----------------------------------------------------------------------------";
  echo "<br>";


   //lingkaran
  echo "2.Luas Dan Keliling Lingkaran";

  $diameter = 28;
  $jari = 14;


  echo "<br>";
  echo "Diameter       = $diameter  cm";


  echo "<br>";
  echo "Jari-Jari     = $jari  cm";
  echo "<br>";

  //Luas Segitiga
  $hasil = 3.14 * $jari * $jari;
  echo "Luas Lingkaran = $hasil cm2";
  echo "<br>";

   //Keliling
   $hasil1 = 3.14 * $diameter;
   echo "Keliling Lingkaran = $hasil1 cm";
   echo "<br>";
   echo "----------------------------------------------------------------------------";
   echo "<br>";

   //Persegi
   echo "3.Luas Dan Keliling Persegi";

   $ps = 8;
   
 
   echo "<br>";
   echo "Panjang Sisi       = $ps  cm";
   echo "<br>";
 
   //Luas persegi
   $hasil2 = $ps * $ps;
   echo "Luas Persegi = $hasil2 cm2";
   echo "<br>";
 
    //Keliling
    $hasil3 = $ps * 4;
    echo "Keliling Persegi = $hasil3 cm";






  echo "<br>";
  echo "----------------------------------------------------------------------------";
  echo "<br>";
?>
