<?php
// TSD-4RT | IN | 02.11.2026.

const PDV = 0.25;

function cijenaSPdv($cijena) {
    return $cijena * (1 + PDV);
}

function formatirajCijenu($iznos) {
    return number_format($iznos, 2, ',', '.') . " €";
}

function zvjezdice($ocjena, $najvise = 5) {
    $rezultat = "";
    for ($i = 1; $i <= $najvise; $i++) {
        if ($i <= $ocjena) {
            $rezultat .= "★";
        } else {
            $rezultat .= "☆";
        }
    }
    return $rezultat;
}

function jeOtvoreno($dan, $sat) {
    if ($dan >= 1 && $dan <= 5 && $sat >= 8 && $sat < 16) {
        return true;
    }
    if ($dan === 6 && $sat >= 9 && $sat < 13) {
        return true;
    }
    return false;
}
