<?php
$nilai = 67;

if ($nilai >= 90 && $nilai <= 100) {
    echo "Nilai $nilai = A";
}
elseif ($nilai >= 80 && $nilai < 90) {
    echo "Nilai $nilai = B";
}
 elseif ($nilai >= 70 && $nilai < 80) {
    echo "Nilai $nilai = C";
}
elseif ($nilai >= 0  && $nilai < 70) {
    echo "Nilai $nilai = D";
}
else {
    echo "Nilai invalid";
}



echo "<br>";

$jam = date("00:00:01");

if ($jam > "00:00:00" && $jam <= "04:00:00") {
    echo "$jam = subuh";
}
elseif ($jam > "04:00:00" && $jam <= "10:00:00") {
    echo "$jam = pagi";
} 
elseif ($jam > "10:00:00" && $jam < "15:00:00") {
    echo "$jam = siang";
}
elseif ($jam >= "15:00:00" && $jam < "18:00:00") {
    echo "$jam = sore";
}
else {
    echo "$jam = malam";
}
?>

































