<?php
$saldoawal = 2000000;
$bunga = 0.03;
$bulan = 11;
$saldoakhir = $saldoawal * pow(1 + $bunga, $bulan);
echo "Saldo Akhir setelah ".$bulan." bulan adalah: Rp. ".number_format($saldoakhir, 0, ',', '.').",-";
?>