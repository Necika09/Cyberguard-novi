<?php
$putanja = __DIR__ . "/korisnici.json";

if (file_exists($putanja)) {
    $korisnici = json_decode(file_get_contents($putanja), true) ?? [];
} else {
    $korisnici = [];
}

$ime = trim($_POST["ime"] ?? "");
$prezime = trim($_POST["prezime"] ?? "");
$datum = trim($_POST["datumRodenja"] ?? "");

if ($ime === "" || $prezime === "") {
    header("Location: index.php?greska=1");
    exit;
}

$noviKorisnik = [
    "ime" => $ime,
    "prezime" => $prezime,
    "datumRodenja" => $datum
];

$korisnici[] = $noviKorisnik;

file_put_contents(
    $putanja,
    json_encode($korisnici, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)
);

header("Location: index.php");
exit;
