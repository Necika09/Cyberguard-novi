<?php
// TSD-4RT | IN | 04.11.2026.

$trazi = trim($_GET["trazi"] ?? "");

$putanja = __DIR__ . "/korisnici.json";
$korisnici = file_exists($putanja) ? (json_decode(file_get_contents($putanja), true) ?? []) : [];
?>
<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>Vježba 10 - Popis, pretraga i unos korisnika</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-4">

    <h2 class="mb-3">Popis korisnika</h2>

    <?php if (isset($_GET["greska"])): ?>
        <div class="alert alert-danger" role="alert">
            Ime i prezime su obavezni.
        </div>
    <?php endif; ?>

    <form method="get" class="row g-2 mb-4">
        <div class="col-auto">
            <input type="text" name="trazi" class="form-control" placeholder="Traži po imenu ili prezimenu..." value="<?php echo htmlspecialchars($trazi); ?>">
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary">Traži</button>
        </div>
        <?php if ($trazi !== ""): ?>
            <div class="col-auto">
                <a href="index.php" class="btn btn-outline-secondary">Poništi pretragu</a>
            </div>
        <?php endif; ?>
    </form>

    <table class="table table-bordered table-striped align-middle">
        <thead class="table-dark">
            <tr>
                <th>Ime</th>
                <th>Prezime</th>
                <th>Datum rođenja</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $prikazano = 0;
            foreach ($korisnici as $korisnik):
                if ($trazi !== "" && mb_stripos($korisnik["prezime"], $trazi) === false && mb_stripos($korisnik["ime"], $trazi) === false) {
                    continue;
                }
                $prikazano++;
                $datum = $korisnik["datumRodenja"] ?? "";
            ?>
                <tr>
                    <td><?php echo htmlspecialchars($korisnik["ime"] ?? ""); ?></td>
                    <td><?php echo htmlspecialchars($korisnik["prezime"] ?? ""); ?></td>
                    <td><?php echo htmlspecialchars($datum); ?></td>
                </tr>
            <?php endforeach; ?>

            <?php if ($prikazano === 0): ?>
                <tr>
                    <td colspan="3" class="text-center text-muted">Nema rezultata za traženi pojam.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

    <div class="card mt-4 shadow-sm">
        <div class="card-header bg-success text-white">
            <h5 class="mb-0">Dodaj novog korisnika</h5>
        </div>
        <div class="card-body">
            <form action="unos.php" method="post" class="row g-3">
                <div class="col-md-4">
                    <label for="ime" class="form-label">Ime <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="ime" name="ime" required>
                </div>
                <div class="col-md-4">
                    <label for="prezime" class="form-label">Prezime <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="prezime" name="prezime" required>
                </div>
                <div class="col-md-4">
                    <label for="datumRodenja" class="form-label">Datum rođenja</label>
                    <input type="date" class="form-control" id="datumRodenja" name="datumRodenja">
                </div>
                <div class="col-12 text-end">
                    <button type="submit" class="btn btn-success">Spremi korisnika</button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>
