<?php
// TSD-4RT | IN | 24.10.2026.

echo "--- A1: Usporedbe ---\n";
var_dump(5 == "5");
var_dump(5 === "5");
var_dump(0 == "");
var_dump("abc" == 0);
var_dump(null == false);

echo "\n--- A2: Logički uvjet ---\n";

$dan = 2;
$sat = 10;
$otvoreno = ($sat >= 8 && $sat <= 15 && $dan >= 1 && $dan <= 5);
echo "Utorak 10h: ";
var_dump($otvoreno);

$dan = 6;
$sat = 10;
$otvoreno = ($sat >= 8 && $sat <= 15 && $dan >= 1 && $dan <= 5);
echo "Subota 10h: ";
var_dump($otvoreno);

$dan = 3;
$sat = 16;
$otvoreno = ($sat >= 8 && $sat <= 15 && $dan >= 1 && $dan <= 5);
echo "Srijeda 16h: ";
var_dump($otvoreno);

$cijenaEur = 40;
$godina = 2023;

$cijenaKn = $cijenaEur * 7.53450;
$formatEur = number_format($cijenaEur, 2, ',', '.') . " €";
$formatKn = number_format($cijenaKn, 2, ',', '.') . " kn";

if ($godina < 2023) {
    echo $formatKn;
} elseif ($godina === 2023) {
    echo $formatEur . " (" . $formatKn . ")";
} else {
    echo $formatEur;
}

$brojDana = (int) date("N");

$nazivDana = match ($brojDana) {
    1 => "ponedjeljak",
    2 => "utorak",
    3 => "srijeda",
    4 => "četvrtak",
    5 => "petak",
    6 => "subota",
    7 => "nedjelja",
    default => "nepoznat dan"
};

echo "Danas je: " . $nazivDana;

$imena = ["Karlo", "zdenko", "ana"];

foreach ($imena as $ime) {
    $prvoSlovo = mb_strtolower(mb_substr($ime, 0, 1));

    switch ($prvoSlovo) {
        case 'a':
        case 'e':
        case 'i':
        case 'o':
        case 'u':
            echo "$ime: Ime počinje samoglasnikom.<br>\n";
            break;
        default:
            echo "$ime: Ime počinje suglasnikom.<br>\n";
            break;
    }
}
?>