<?php
// ==========================================
// DIO A1 — Osnovne for petlje
// ==========================================

// 1. Ispiši brojeve od 1 do 10 u jednom retku, odvojene razmakom
echo "Brojevi od 1 do 10: ";
for ($i = 1; $i <= 10; $i++) {
    echo $i . " ";
}
echo "<br><br>";

// 2. Ispiši parne brojeve od 2 do 20 — bez if, samo promjenom koraka ($i += 2)
echo "Parni brojevi od 2 do 20: ";
for ($i = 2; $i <= 20; $i += 2) {
    echo $i . " ";
}
echo "<br><br>";

// 3. Odbrojavanje od 10 do 1 i na kraju "Start!"
echo "Odbrojavanje: ";
for ($i = 10; $i >= 1; $i--) {
    echo $i . " ";
}
echo "Start!<br><br>";

// 4. Izračunaj zbroj svih brojeva od 1 do 100 i ispiši ga
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

// ==========================================
// DIO B1 — while petlja: Brute-force PIN
// ==========================================

$sekundiUGodini = 365 * 24 * 60 * 60; // 31.536.000 sekundi
$brzinaPoSekundi = 1000;

$n = 1; // Početni broj znamenki PIN-a
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
        continue; // preskače višekratnike broja 3
    }
    if ($i > 7) {
        break; // kod broja većeg od 7 prekida petlju
    }
    echo $i . " ";
}
?>