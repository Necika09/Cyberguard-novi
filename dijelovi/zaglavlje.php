<?php
// TSD-4RT | IN | 19.10.2026.
?>
<!DOCTYPE html>
<html lang="hr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Ovdje PHP ispisuje naslov koji je podstranica zadala prije include-a -->
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
          <li><a href="o-nama.php" class="<?php if (($trenutnaStranica ?? '') === 'o-nama') echo 'active'; ?>">O nama</a></li>
          <li><a href="strucnjaci.php" class="<?php if (($trenutnaStranica ?? '') === 'strucnjaci') echo 'active'; ?>">Zaposleni stručnjaci</a></li>
          <li><a href="novosti.php" class="<?php if (($trenutnaStranica ?? '') === 'novosti') echo 'active'; ?>">Novosti i blogovi</a></li>
          <li><a href="misija-vizija.php" class="<?php if (($trenutnaStranica ?? '') === 'misija-vizija') echo 'active'; ?>">Misija i vizija</a></li>
          <li><a href="cjenik.php" class="<?php if (($trenutnaStranica ?? '') === 'cjenik') echo 'active'; ?>">Cjenovnik usluga</a></li>
          <li><a href="kontakt.php" class="<?php if (($trenutnaStranica ?? '') === 'kontakt') echo 'active'; ?>">Kontakt</a></li>
        </ul>
      </nav>
    </div>
  </header>

