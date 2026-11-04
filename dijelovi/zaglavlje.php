<?php
// TSD-4RT | IN | 04.11.2026.

$izbornik = [
    "o-nama.php"        => "O nama",
    "strucnjaci.php"    => "Zaposleni stručnjaci",
    "novosti.php"       => "Novosti i blogovi",
    "misija-vizija.php" => "Misija i vizija",
    "cjenik.php"        => "Cjenovnik usluga",
    "kontakt.php"       => "Kontakt"
];
?>
<!DOCTYPE html>
<html lang="hr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $naslovStranice ?? 'Početna'; ?> | CyberGuard Solutions</title>
  <link rel="icon" type="image/svg+xml" href="img/cyberguard-logo.svg">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <header>
    <div class="header-container">
      <a href="index.php" class="logo-link">
        <img src="img/cyberguard-logo.svg" alt="CyberGuard Logo" class="site-logo">
        <span>Cyber<span class="logo-highlight">Guard</span></span>
      </a>

      <button class="menu-toggle" id="menu-toggle" aria-label="Otvori navigaciju">☰</button>

      <nav id="main-nav">
        <ul>
          <?php foreach ($izbornik as $datoteka => $naziv): 
              $jeAktivna = (isset($trenutnaStranica) && ($trenutnaStranica === $datoteka || $trenutnaStranica . '.php' === $datoteka));
          ?>
            <li>
              <a href="<?php echo $datoteka; ?>" class="<?php echo $jeAktivna ? 'active' : ''; ?>">
                <?php echo $naziv; ?>
              </a>
            </li>
          <?php endforeach; ?>
        </ul>
      </nav>
    </div>
  </header>
