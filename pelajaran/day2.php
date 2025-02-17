<?php
$angka1 = 3.7   ;
$angka2 = 2;
$penjumlahan = $angka1 + $angka2;
$pengurangan = $angka1 - $angka2;
$perkalian = $angka1 * $angka2;
$pembagian = $angka1 / $angka2;
$eksponen = pow($angka1, $angka2);
$akar = sqrt($angka1);

echo $angka1 . " + " . $angka2 . " = " . $penjumlahan;
echo "<br>";
echo $angka1 . " - " . $angka2 . " = " . $pengurangan;
echo "<br>";    
echo $angka1 . " x " . $angka2 . " = " . $perkalian;
echo "<br>";
echo $angka1 . " : " . $angka2 . " = " . $pembagian;
echo "<br>";
echo "$angka1 <sup> $angka2 </sup> = " . $eksponen;
echo "<br>";
echo "√$angka1 = " . round($akar, 4);
?>