<?php
// TSD-4RT | IN | 03.11.2026.

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

function pozdravPremaSatu($sat) {
    if ($sat < 12) {
        return "Dobro jutro";
    } elseif ($sat < 18) {
        return "Dobar dan";
    } else {
        return "Dobra večer";
    }
}


//NAPOMENA: Nisam koristio ovu funkciju nigdje u projektu jer uništi stilove koje koristim, ali sam ju isprobao i funkcionalna je.
function tablicaIzNiza($redci) {
    if (empty($redci)) {
        return "<p>Nema podataka za prikaz.</p>";
    }

    $stupci = array_keys(reset($redci));

    $html = "<table class=\"tabela-usluga\">\n";
    
    // Zaglavlje
    $html .= "  <thead>\n    <tr>\n";
    foreach ($stupci as $stupac) {
        $html .= "      <th>" . htmlspecialchars(ucfirst($stupac)) . "</th>\n";
    }
    $html .= "    </tr>\n  </thead>\n";

    // Tijelo tablice
    $html .= "  <tbody>\n";
    foreach ($redci as $red) {
        $html .= "    <tr>\n";
        foreach ($red as $vrijednost) {
            $html .= "      <td>" . htmlspecialchars((string)$vrijednost) . "</td>\n";
        }
        $html .= "    </tr>\n";
    }
    $html .= "  </tbody>\n";
    $html .= "</table>\n";

    return $html;
}