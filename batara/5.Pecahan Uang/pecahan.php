<?php

$jumlahuang = 1895250;

$Mod = $jumlahuang % 100000;
$a = ($jumlahuang - $Mod) / 100000;
$jumlahuang = $jumlahuang -($a * 100000);

$Mod = $jumlahuang % 50000;
$b = ($jumlahuang - $Mod) / 50000;
$jumlahuang = $jumlahuang -($b * 50000);

$Mod = $jumlahuang % 20000;
$c = ($jumlahuang - $Mod) / 20000;
$jumlahuang = $jumlahuang -($c * 20000);

$Mod = $jumlahuang % 5000;
$d = ($jumlahuang - $Mod) / 5000;
$jumlahuang = $jumlahuang -($d * 5000);

$Mod = $jumlahuang % 100;
$e = ($jumlahuang - $Mod) / 100;
$jumlahuang = $jumlahuang -($e * 100);

$Mod = $jumlahuang % 50;
$f = ($jumlahuang - $Mod) / 50;
$jumlahuang = $jumlahuang -($f * 50);

    echo "Jumlah Uang : 1.895.250"."<br>";
    echo "Pecahannya :"."<br>";
    echo "Jumlah Rp.100.000 : ".$a."<br>";
    echo "Jumlah Rp.50.000 : ".$b."<br>";
    echo "Jumlah Rp.20.000 : ".$c."<br>";
    echo "Jumlah Rp.5.000 : ".$d."<br>";
    echo "Jumlah Rp.100 : ".$e."<br>";
    echo "Jumlah Rp.50 : ".$f."<br>";

?>
