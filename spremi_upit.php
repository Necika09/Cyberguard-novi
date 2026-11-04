<?php
// TSD-4RT | IN | 04.11.2026.

$direktorij = __DIR__ . "/podaci";
$putanja = $direktorij . "/upiti.json";

if (!is_dir($direktorij)) {
    mkdir($direktorij, 0777, true);
}

$upiti = [];
if (file_exists($putanja)) {
    $sadrzaj = file_get_contents($putanja);
    $dekodirano = json_decode($sadrzaj, true);
    if (is_array($dekodirano)) {
        $upiti = $dekodirano;
    }
}

$ime = trim($_POST["ime"] ?? "");
$email = trim($_POST["email"] ?? "");
$usluga = trim($_POST["odabrana-usluga"] ?? $_POST["usluga"] ?? "");
$poruka = trim($_POST["poruka"] ?? "");
$brojZaposlenika = trim($_POST["broj_zaposlenika"] ?? "");
$godinaOsnutka = trim($_POST["godina_osnutka"] ?? "");
$razlog = trim($_POST["razlog"] ?? "upit");

$aktivan = isset($_POST["aktivan"]);

if ($ime === "" || $email === "" || $usluga === "" || mb_strlen($poruka) < 20) {
    header("Location: kontakt.php?greska=1");
    exit;
}

$maksimalniId = 0;
foreach ($upiti as $u) {
    if (isset($u["id"]) && (int)$u["id"] > $maksimalniId) {
        $maksimalniId = (int)$u["id"];
    }
}
$noviId = $maksimalniId + 1;

$noviUpit = [
    "id"                => $noviId,
    "vrijeme"           => date("j. n. Y. H:i"),
    "ime"               => $ime,
    "email"             => $email,
    "usluga"            => $usluga,
    "broj_zaposlenika"  => $brojZaposlenika,
    "godina_osnutka"    => $godinaOsnutka,
    "razlog"            => $razlog,
    "poruka"            => $poruka,
    "aktivan"           => $aktivan
];

$upiti[] = $noviUpit;

file_put_contents(
    $putanja,
    json_encode($upiti, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)
);

header("Location: kontakt.php?uspjeh=1");
exit;
