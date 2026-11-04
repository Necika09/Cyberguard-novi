<?php

// TSD-4RT | IN | 04.11.2026.

function kvadrat($broj) {
    return $broj * $broj;
}

function formatirajCijenu($iznos) {
    return number_format($iznos, 2, ',', '.') . " €";
}

echo "<h3>Funkcija kvadrat:</h3>";
echo "Kvadrat broja 7 je: " . kvadrat(7) . "<br>";
echo "Kvadrat kvadrata broja 2 je: " . kvadrat(kvadrat(2)) . "<br>";

echo "<h3>Funkcija formatirajCijenu:</h3>";
echo "Formatirana cijena: " . formatirajCijenu(1234.5) . "<br>";

echo "<h3>Usporedbe:</h2>";

function a($x) {
    echo $x * 2;
}

function b($x) {
    return $x * 2;
}

echo "Vrijednost izraza b(5) + 1: " . (b(5) + 1) . "<br>";

echo "Poziv a(5): ";
a(5);
echo "<br>";

echo "var_dump(\$r) gdje je \$r = a(5): ";
$r = a(5);
echo " -> ";
var_dump($r);
echo "<br>";

echo "Ugniježđeni poziv b(b(3)): " . b(b(3)) . "<br>";

echo "<h3>Više parametara i zadana vrijednost</h3>";

function ukupnoSPdv($cijena, $stopa = 0.25) {
    return $cijena * (1 + $stopa);
}

function trajanje($minute) {
    $sati = intdiv($minute, 60);
    $preostaleMinute = $minute % 60;

    if ($sati == 0) {
        return "{$preostaleMinute} min";
    }

    return "{$sati} h {$preostaleMinute} min";
}

echo "ukupnoSPdv(100): " . ukupnoSPdv(100) . "<br>";
echo "ukupnoSPdv(100, 0.13): " . ukupnoSPdv(100, 0.13) . "<br>";
echo "trajanje(135): " . trajanje(135) . "<br>";
echo "trajanje(45): " . trajanje(45) . "<br>";

echo "<h3>Doseg varijabli</h3>";

$brojac = 5;

function povecaj($brojac) {
    $brojac++;
    return $brojac;
}

echo "Poziv funkcije povecaj(\$brojac): " . povecaj($brojac) . "<br>";
echo "Ispis varijable \$brojac nakon funkcije: " . $brojac . "<br>";

require "podaci/usluge.php";

echo "<h3>Rad s JSON-om</h3>";

$jsonPodaci = json_encode($usluge, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

echo "<h3>JSON ispis u pre oznaci:</h3>";
echo "<pre>" . htmlspecialchars($jsonPodaci) . "</pre>";

file_put_contents("podaci/usluge.json", $jsonPodaci);
echo "<p style='color: green;'>Datoteka podaci/usluge.json je uspješno kreirana!</p>";

$ucitaniTekst = file_get_contents("podaci/usluge.json");
$ucitaneUsluge = json_decode($ucitaniTekst, true);

echo "<h3>Učitani podaci (print_r):</h3>";
echo "<pre>";
print_r($ucitaneUsluge);
echo "</pre>";

echo "<h3>Isprobavanje bez argumenta true:</h3>";
$objekti = json_decode($ucitaniTekst);
echo "<pre>";
var_dump($objekti);
echo "</pre>";