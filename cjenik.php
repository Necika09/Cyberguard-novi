<?php
// TSD-4RT | IN | 12.10.2026.
$naslovStranice = "Cjenovnik usluga";
$trenutnaStranica = "cjenik";

// Varijable za pakete (Razina 1) - sprječava greške u karticama
$paket1_naziv = "Basic Audit";
$paket1_cijena = "850";

$paket2_naziv = "Pro Pentest";
$paket2_cijena = "2.200";

$paket3_naziv = "Enterprise SOC";
$paket3_cijena = "1.500";

// Razina 3: Asocijativni niz s pojedinačnim uslugama
$usluge = [
    ["naziv" => "Procjena rizika", "cijena" => 450],
    ["naziv" => "Sigurnosna analiza", "cijena" => 780],
    ["naziv" => "Edukacija zaposlenika", "cijena" => 300]
];

$ukupno = 0;

include "dijelovi/zaglavlje.php";
?>

    <main>
      <h1 class="section-title">Cjenovnik usluga</h1>
      <p class="section-subtitle">
        Jasni i transparentni paketi zaštite prilagođeni veličini vašeg
        poslovanja
      </p>

      <!-- 1. Glavni paketi (originalni izgled s karticama i slikama) -->
      <div class="grid-container">
        <!-- Paket 1 -->
        <div class="card price-card">
          <img
            src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?auto=format&fit=crop&w=600&q=80"
            alt="Izvorni kod i bazični pregled ranjivosti za paket Basic Audit"
            class="card-img"
          />
          <h3><?php echo $paket1_naziv; ?></h3>
          <p>Za manje tvrtke i web trgovine</p>
          <div class="price-tag">
            <?php echo $paket1_cijena; ?> €
            <small style="font-size: 0.9rem; font-weight: normal"
              >/ jednokratno</small
            >
          </div>
          <ul>
            <li>Automatizirano skeniranje ranjivosti</li>
            <li>Analiza SSL/TLS certifikata</li>
            <li>Pregled javno izloženih servisa</li>
            <li>Sažeto izvješće s preporukama</li>
          </ul>
          <a href="kontakt.php" class="btn">Odaberi paket</a>
        </div>

        <!-- Paket 2 -->
        <div class="card price-card">
          <img
            src="https://images.unsplash.com/photo-1526374965328-7f61d4dc18c5?auto=format&fit=crop&w=600&q=80"
            alt="Terminal s etičkim hakerskim skriptama za paket Pro Pentest"
            class="card-img"
          />
          <h3><?php echo $paket2_naziv; ?></h3>
          <p>Za srednje tvrtke i web aplikacije</p>
          <div class="price-tag">
            <?php echo $paket2_cijena; ?> €
            <small style="font-size: 0.9rem; font-weight: normal"
              >/ po sustavu</small
            >
          </div>
          <ul>
            <li>Potpuni manualni penetracijski test</li>
            <li>OWASP Top 10 provjera ranjivosti</li>
            <li>Simulacija Phishing kampanje</li>
            <li>Detaljno tehničko i menadžersko izvješće</li>
            <li>Verifikacijsko re-testiranje nakon popravaka</li>
          </ul>
          <a href="kontakt.php" class="btn">Odaberi paket</a>
        </div>

        <!-- Paket 3 -->
        <div class="card price-card">
          <img
            src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?auto=format&fit=crop&w=600&q=80"
            alt="Centar za 24/7 nadzor sigurnosnih operacija za paket Enterprise SOC"
            class="card-img"
          />
          <h3><?php echo $paket3_naziv; ?></h3>
          <p>Za organizacije s visokim rizikom</p>
          <div class="price-tag">
            <?php echo $paket3_cijena; ?> €
            <small style="font-size: 0.9rem; font-weight: normal"
              >/ mjesečno</small
            >
          </div>
          <ul>
            <li>24/7/365 kontinuirani nadzor mreže</li>
            <li>SIEM i EDR implementacija</li>
            <li>Odziv na incidente u roku od 15 minuta</li>
            <li>Redoviti mjesečni sigurnosni auditi</li>
          </ul>
          <a href="kontakt.php" class="btn">Odaberi paket</a>
        </div>
      </div>

      <!-- 2. Razina 3: Pojedinačne usluge i dinamički izračun iz asocijativnog polja -->
      <section class="card" style="margin-bottom: 3.5rem; border-top: 3px solid var(--brand-blue);">
        <h2 class="section-title" style="font-size: 1.5rem; margin-bottom: 0.5rem;">Pojedinačne usluge i kalkulacija</h2>
        <p class="section-subtitle" style="margin-bottom: 1.5rem;">
          Trebate samo specifične provjere? Pregledajte cijene pojedinačnih modula s automatskim izračunom ukupne vrijednosti:
        </p>

        <div style="overflow-x: auto;">
          <table style="width: 100%; border-collapse: collapse; font-size: 0.95rem;">
            <thead>
              <tr style="background-color: var(--brand-navy); color: #ffffff;">
                <th style="padding: 12px 16px; border: 1px solid var(--border-color); text-align: left; font-weight: 600;">Naziv usluge</th>
                <th style="padding: 12px 16px; border: 1px solid var(--border-color); text-align: right; font-weight: 600; width: 200px;">Cijena (€)</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($usluge as $usluga): ?>
                <?php $ukupno += $usluga["cijena"]; ?>
                <tr style="border-bottom: 1px solid var(--border-color); background-color: var(--bg-surface);">
                  <td style="padding: 12px 16px; border: 1px solid var(--border-color); color: var(--text-heading); font-weight: 500;">
                    <?php echo $usluga["naziv"]; ?>
                  </td>
                  <td style="padding: 12px 16px; border: 1px solid var(--border-color); text-align: right; font-family: var(--font-mono); font-weight: 600; color: var(--brand-navy);">
                    <?php echo number_format($usluga["cijena"], 2, ',', '.'); ?> €
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
            <tfoot>
              <tr style="background-color: rgba(9, 105, 218, 0.08); font-weight: 700;">
                <td style="padding: 14px 16px; border: 1px solid var(--border-color); color: var(--brand-navy);">
                  UKUPNO (ako se ugovore sve usluge):
                </td>
                <td style="padding: 14px 16px; border: 1px solid var(--border-color); text-align: right; font-family: var(--font-mono); font-size: 1.15rem; color: var(--brand-blue);">
                  <?php echo number_format($ukupno, 2, ',', '.'); ?> €
                </td>
              </tr>
            </tfoot>
          </table>
        </div>
      </section>

      <!-- 3. Kontakt forma prije podnožja -->
      <section class="form-section">
        <h2 class="section-title">Zatražite ponudu po mjeri</h2>
        <p class="section-subtitle">
          Imate specifične zahtjeve ili složeniju infrastrukturu? Javite nam se
          za prilagođeni izračun.
        </p>
        <form class="contact-form">
          <div class="form-group">
            <label for="name">Ime i prezime:</label>
            <input type="text" id="name" required />
          </div>
          <div class="form-group">
            <label for="email">Poslovni email:</label>
            <input type="email" id="email" required />
          </div>
          <div class="form-group">
            <label for="package">Odabrani paket:</label>
            <select id="package">
              <option value="basic">Basic Audit (850 €)</option>
              <option value="pro">Pro Pentest (2.200 €)</option>
              <option value="enterprise">Enterprise SOC (1.500 €/mj)</option>
              <option value="custom">Prilagođeni paket</option>
            </select>
          </div>
          <div class="form-group">
            <label for="message">Dodatne napomene:</label>
            <textarea id="message" rows="3"></textarea>
          </div>
          <button type="submit" class="btn">Zatraži ponudu</button>
        </form>
      </section>
    </main>

    <?php
      include "dijelovi/podnozje.php";
    ?>
