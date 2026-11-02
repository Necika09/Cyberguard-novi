<?php

// TSD-4RT | IN | 02.11.2026.

$dani = ["Ponedjeljak", "Utorak", "Srijeda", "Četvrtak", "Petak", "Subota", "Nedjelja"];

echo "<h3>Prvi i zadnji dan:</h3>";
echo "Prvi dan: " . $dani[0] . "<br>";

$zadnjiIndeks = count($dani) - 1;
echo "Zadnji dan: " . $dani[$zadnjiIndeks] . "<br>";

echo "<h3>Ispis dana for petljom:</h3>";
for ($i = 0; $i < count($dani); $i++) {
    echo ($i + 1) . ". dan: " . $dani[$i] . "<br>";
}

echo "<h3>Ispis dana foreach petljom:</h3>";
echo "<ol>";
foreach ($dani as $dan) {
    echo "<li>$dan</li>";
}
echo "</ol>";

$brojevi = [4, 8, 15, 16, 23];
$brojevi[] = 42;
$brojevi[1] = 9;

echo "<h3>Isprobavanje za A2</h3>";
echo $brojevi[0] . "<br>";
echo $brojevi[1] . "<br>";
echo count($brojevi) . "<br>";
echo $brojevi[count($brojevi) - 1] . "<br>";
echo $brojevi[2] + $brojevi[3] . "<br>";
echo $brojevi[6] . "<br><br>";

$tvrtka = [
    "naziv" => "CyberGuard Solutions",
    "grad" => "Daruvar",
    "godinaOsnutka" => 2019
];

echo "<h3>Informacije o tvrtki:</h3>";
echo $tvrtka['naziv'] . " iz grada " . $tvrtka['grad'] . "a radi od " . $tvrtka['godinaOsnutka'] . ".<br>";

$tvrtka["email"] = "info@cyberguard.hr";

echo "<h4>Svi podaci o tvrtki:</h4>";
echo "<ul>";
foreach ($tvrtka as $kljuc => $vrijednost) {
    echo "<li>$kljuc: $vrijednost</li>";
}
echo "</ul>";

// Zadani niz usluga
$usluge = [
    ["naziv" => "Procjena rizika", "cijena" => 450],
    ["naziv" => "Sigurnosna analiza", "cijena" => 1280],
    ["naziv" => "Edukacija zaposlenika", "cijena" => 300],
];

$ukupnaCijena = 0;
$najskupljaUsluga = $usluge[0];
$brojPovoljnih = 0;

foreach ($usluge as $usluga) {
    $ukupnaCijena += $usluga["cijena"];

    if ($usluga["cijena"] > $najskupljaUsluga["cijena"]) {
        $najskupljaUsluga = $usluga;
    }

    if ($usluga["cijena"] < 500) {
        $brojPovoljnih++;
    }
}

echo "<h3>Rezultati obrade usluga:</h3>";
echo "Ukupan zbroj cijena: " . $ukupnaCijena . "€<br>";
echo "Najskuplja usluga: " . $najskupljaUsluga['naziv'] . " (" . $najskupljaUsluga['cijena'] . "€)" . "<br>";
echo "Broj usluga ispod 500 €: " . $brojPovoljnih . "<br>";

echo "<h3>Funkcije za nizove:</h3>";

$ocjene = [4, 5, 3, 5, 2];
$prosjek = array_sum($ocjene) / count($ocjene);

$prosjekFormatiran = number_format($prosjek, 2, ',', '.');
echo "Prosjek ocjena: " . $prosjekFormatiran . "<br>";

rsort($ocjene);
echo "Ocjene silazno: " . implode(", ", $ocjene) . "<br>";

$vjestineTekst = "HTML,CSS,PHP,SQL";
$vjestineNiz = explode(",", $vjestineTekst);

echo "Popis vještina:<ul>";
foreach ($vjestineNiz as $vjestina) {
    echo "<li>$vjestina</li>";
}
echo "</ul>";
?>
