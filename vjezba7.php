<?php

// TSD-4RT | IN | 24.10.2026.

echo "Brojevi od 1 do 10: ";
for ($i = 1; $i <= 10; $i++) {
    echo $i . " ";
}
echo "<br><br>";

echo "Parni brojevi od 2 do 20: ";
for ($i = 2; $i <= 20; $i += 2) {
    echo $i . " ";
}
echo "<br><br>";

echo "Odbrojavanje: ";
for ($i = 10; $i >= 1; $i--) {
    echo $i . " ";
}
echo "Start!<br><br>";

$suma = 0;
for ($i = 1; $i <= 100; $i++) {
    $suma += $i;
}
echo "Zbroj brojeva od 1 do 100 iznosi: " . $suma . "<br><br>";

$zbroj = 0;
for ($i = 1; $i <= 4; $i++) {
    $zbroj += $i * 2;
    echo "I: " . $i . "<br>";
}
echo " Zbroj: " . $zbroj . "<br><br>";

$sekundiUGodini = 365 * 24 * 60 * 60;
$brzinaPoSekundi = 1000;

$n = 1;
$trajanjeSekundi = 0;

while ($trajanjeSekundi <= $sekundiUGodini) {
    $n++;
    $ukupnoKombinacija = 10 ** $n;
    $trajanjeSekundi = $ukupnoKombinacija / $brzinaPoSekundi;
}
echo "Najmanji broj znamenki PIN-a: " . $n . "<br>";
echo "Trajanje probijanja u danima: " . round($trajanjeSekundi / (24 * 3600), 1) . " dana.<br><br>";

for ($i = 1; $i <= 10; $i++) {
    if ($i % 3 === 0) {
        continue;
    }
    if ($i > 7) {
        break;
    }
    echo $i . " ";
}
?>