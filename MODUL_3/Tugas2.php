<?php
$r = 7;
$s = 10;
$phi = 3.14;

$luas_alas = $phi * $r * $r;
$luas_permukaan = $phi * $r * $r + $phi * $r * $s;

echo "Luas alas kerucut = " . number_format($luas_alas, 2, ',', '.') . "<br>";
echo "Luas permukaan kerucut = " . number_format($luas_permukaan, 2, ',', '.') . "<br>";
?>