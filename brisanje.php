<?php
// TSD-4RT | IN | 04.11.2026.

$putanja = __DIR__ . "/podaci/upiti.json";
$upiti = file_exists($putanja) ? (json_decode(file_get_contents($putanja), true) ?? []) : [];

$idZaBrisanje = (int)($_POST["id"] ?? 0);

if ($idZaBrisanje > 0 && !empty($upiti)) {
    $noviUpiti = [];

    foreach ($upiti as $u) {
        if ((int)($u["id"] ?? 0) !== $idZaBrisanje) {
            $noviUpiti[] = $u;
        }
    }

    file_put_contents(
        $putanja,
        json_encode(array_values($noviUpiti), JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)
    );
}

header("Location: upiti.php");
exit;
