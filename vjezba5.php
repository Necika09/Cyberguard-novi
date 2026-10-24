<?php
// TSD-4RT | IN | 24.10.2026.
var_dump(7 / 2);
var_dump(8 / 2);
var_dump("5" + 3);
var_dump("5" . 3);
var_dump(17 % 5);

$ukupnoMinuta = 135;

$sati = intdiv($ukupnoMinuta, 60);
$minute = $ukupnoMinuta % 60;

echo $sati . " h " . $minute . " min";

$nazivTvrtke = "CyberGuard Zaštita";

echo "Naziv: " . $nazivTvrtke . "<br>";
echo "strlen: " . strlen($nazivTvrtke) . "<br>";
echo "mb_strlen: " . mb_strlen($nazivTvrtke) . "<br>";

echo "strtoupper: " . strtoupper($nazivTvrtke) . "<br>";
echo "mb_strtoupper: " . mb_strtoupper($nazivTvrtke) . "<br>";

echo number_format(1234.5, 2);
echo number_format(1234.5, 2, ",", ".");
echo round(318.75);
echo date("j. n. Y.");
?>
