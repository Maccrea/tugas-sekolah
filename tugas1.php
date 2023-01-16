<?php

function LuasSegitga($alas, $tinggi, $sisimiring){
    return 0.5 * $alas * $tinggi; 
}

function KelilingSegitiga($alas, $tinggi, $sisimiring){
    return $alas + $sisimiring + $sisimiring; 
}

function LuasLingkaran($diameter, $jari){
    return 3.14 * $jari * $jari;
}

function KelilingLingkaran($diameter, $jari){
    return 3.14 * $diameter;
}

function LuasPersegi($sisi){
    return $sisi * $sisi;
}

function KelilingPersegi($sisi){
    return $sisi + $sisi + $sisi + $sisi;
}

$alas = 4;
$tinggi = 6;
$sisimiring = 10;
$diameter = 28;
$jari = 14;
$sisi = 8;

echo "--------------------------------------------------------------------------------------------------------------------------------------------------------------------------";
echo "<br>";
echo "Program hitung luas dan keliling bangun datar";
echo "<br>";
echo "--------------------------------------------------------------------------------------------------------------------------------------------------------------------------";
echo "<br>";
echo "1. Luas dan keliling segitiga";
echo "<br>";
echo "alas = $alas cm";
echo "<br>";
echo "tinggi = $tinggi cm";
echo "<br>";
echo "sisi miring = $sisimiring cm";
echo "<br>";
echo "Luas segitiga &emsp; = " . LuasSegitga($alas, $tinggi, $sisimiring) . "cm2";
echo "<br>";
echo "Keliling segitiga = " . KelilingSegitiga($alas, $tinggi, $sisimiring) . "cm";
echo "<br>";
echo "--------------------------------------------------------------------------------------------------------------------------------------------------------------------------";
echo "<br>";
echo "2. Luas dan keliling lingkaran";
echo "<br>";
echo "Diameter = $diameter cm";
echo "<br>";
echo "Jari-jari = $jari cm";
echo "<br>";
echo "Luas lingkaran = " . LuasLingkaran($diameter, $jari) . "cm2";
echo "<br>";
echo "Keliling lingkaran = " . KelilingLingkaran($diameter, $jari) . "cm";
echo "<br>";
echo "--------------------------------------------------------------------------------------------------------------------------------------------------------------------------";
echo "<br>";
echo "3. Luas dan keliling persegi";
echo "<br>";
echo "Panjang sisi = $sisi cm";
echo "<br>";
echo "Luas persegi = " . LuasPersegi($sisi) . "cm2";
echo "<br>";
echo "Keliling persegi = " . KelilingPersegi($sisi) . "cm";
echo "<br>";
echo "--------------------------------------------------------------------------------------------------------------------------------------------------------------------------";

?>