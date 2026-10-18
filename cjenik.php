<?php
// TSD-4RT | IN | 18.10.2026.
$naslovStranice = "Cjenovnik usluga";
$trenutnaStranica = "cjenik";

// C1 — Konstanta za stopu PDV-a
const PDV = 0.25;

// Usluga 1
$naziv1 = "Procjena rizika";
$opis1 = "Sveobuhvatna procjena sigurnosnih rizika za digitalnu infrastrukturu tvrtke.";
$cijenaBezPdv1 = 450;
$pdv1 = $cijenaBezPdv1 * PDV;
$ukupno1 = $cijenaBezPdv1 + $pdv1;
// Razina 2: -15% za članove, zaokruženo na cijeli euro
$clanovi1 = round($ukupno1 * 0.85);

// Usluga 2
$naziv2 = "Sigurnosna analiza";
$opis2 = "Detaljna penetracijska provjera ranjivosti i sigurnosnih protokola sustava.";
$cijenaBezPdv2 = 1280;
$pdv2 = $cijenaBezPdv2 * PDV;
$ukupno2 = $cijenaBezPdv2 + $pdv2;
$clanovi2 = round($ukupno2 * 0.85);

// Usluga 3
$naziv3 = "Edukacija zaposlenika";
$opis3 = "Interaktivne radionice o prepoznavanju phishing prijetnji i socijalnog inženjeringa.";
$cijenaBezPdv3 = 300;
$pdv3 = $cijenaBezPdv3 * PDV;
$ukupno3 = $cijenaBezPdv3 + $pdv3;
$clanovi3 = round($ukupno3 * 0.85);

// Varijable za pakete u karticama
$paket1_naziv = "Basic Audit";
$paket1_cijena = "850";

$paket2_naziv = "Pro Pentest";
$paket2_cijena = "2.200";

$paket3_naziv = "Enterprise SOC";
$paket3_cijena = "1.500";

include "dijelovi/zaglavlje.php";
?>

    <main>
      <h1 class="section-title">Cjenovnik usluga</h1>
      <p class="section-subtitle">
        Jasni i transparentni paketi zaštite prilagođeni veličini vašeg
        poslovanja
      </p>

      <!-- 1. Glavni paketi (kartice sa slikama) -->
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

      <!-- 2. Razina 2 i 3: Tablica usluga s opisima, popustom za članove i opcijom rata za iznose > 1000 € -->
      <section class="card" style="margin-bottom: 3.5rem; border-top: 3px solid var(--brand-blue);">
        <h2 class="section-title" style="font-size: 1.5rem; margin-bottom: 0.5rem;">Struktura cijena s PDV-om</h2>
        <p class="section-subtitle" style="margin-bottom: 1.5rem;">
          Prikaz pojedinačnih cijena, stopa PDV-a, pogodnosti za članove te mogućnosti obročnog plaćanja:
        </p>

        <div style="overflow-x: auto;">
          <table style="width: 100%; border-collapse: collapse; font-size: 0.95rem;">
            <thead>
              <tr style="background-color: var(--brand-navy); color: #ffffff;">
                <th style="padding: 12px 16px; border: 1px solid var(--border-color); text-align: left; font-weight: 600;">Usluga</th>
                <th style="padding: 12px 16px; border: 1px solid var(--border-color); text-align: left; font-weight: 600;">Opis usluge</th>
                <th style="padding: 12px 16px; border: 1px solid var(--border-color); text-align: right; font-weight: 600;">Bez PDV-a</th>
                <th style="padding: 12px 16px; border: 1px solid var(--border-color); text-align: right; font-weight: 600;">PDV (25 %)</th>
                <th style="padding: 12px 16px; border: 1px solid var(--border-color); text-align: right; font-weight: 600;">Ukupno</th>
                <th style="padding: 12px 16px; border: 1px solid var(--border-color); text-align: right; font-weight: 600; color: #a5d8ff;">Za članove (−15 %)</th>
              </tr>
            </thead>
            <tbody>
              <!-- Usluga 1 -->
              <tr style="border-bottom: 1px solid var(--border-color); background-color: var(--bg-surface);">
                <td style="padding: 12px 16px; border: 1px solid var(--border-color); color: var(--text-heading); font-weight: 600;">
                  <?php echo $naziv1; ?>
                </td>
                <td style="padding: 12px 16px; border: 1px solid var(--border-color); color: var(--text-muted); font-size: 0.9rem;">
                  <?php echo mb_substr($opis1, 0, 40) . "…"; ?>
                </td>
                <td style="padding: 12px 16px; border: 1px solid var(--border-color); text-align: right; font-family: var(--font-mono);">
                  <?php echo number_format($cijenaBezPdv1, 2, ',', '.'); ?> €
                </td>
                <td style="padding: 12px 16px; border: 1px solid var(--border-color); text-align: right; font-family: var(--font-mono); color: var(--text-muted);">
                  <?php echo number_format($pdv1, 2, ',', '.'); ?> €
                </td>
                <td style="padding: 12px 16px; border: 1px solid var(--border-color); text-align: right; font-family: var(--font-mono); font-weight: 600;">
                  <?php echo number_format($ukupno1, 2, ',', '.'); ?> €
                  <?php if ($ukupno1 > 1000): ?>
                    <?php 
                      $rata1 = round($ukupno1 / 3, 2); 
                      $zbrojRata1 = $rata1 * 3;
                    ?>
                    <div style="font-size: 0.78rem; font-weight: normal; color: var(--brand-blue); margin-top: 4px;">
                      Moguće plaćanje u 3 rate po <?php echo number_format($rata1, 2, ',', '.'); ?> €<br>
                      <span style="color: var(--text-muted);">(zbroj: <?php echo number_format($zbrojRata1, 2, ',', '.'); ?> €)</span>
                    </div>
                  <?php endif; ?>
                </td>
                <td style="padding: 12px 16px; border: 1px solid var(--border-color); text-align: right; font-family: var(--font-mono); font-weight: 700; color: var(--brand-blue);">
                  <?php echo number_format($clanovi1, 2, ',', '.'); ?> €
                </td>
              </tr>

              <!-- Usluga 2 -->
              <tr style="border-bottom: 1px solid var(--border-color); background-color: var(--bg-surface);">
                <td style="padding: 12px 16px; border: 1px solid var(--border-color); color: var(--text-heading); font-weight: 600;">
                  <?php echo $naziv2; ?>
                </td>
                <td style="padding: 12px 16px; border: 1px solid var(--border-color); color: var(--text-muted); font-size: 0.9rem;">
                  <?php echo mb_substr($opis2, 0, 40) . "…"; ?>
                </td>
                <td style="padding: 12px 16px; border: 1px solid var(--border-color); text-align: right; font-family: var(--font-mono);">
                  <?php echo number_format($cijenaBezPdv2, 2, ',', '.'); ?> €
                </td>
                <td style="padding: 12px 16px; border: 1px solid var(--border-color); text-align: right; font-family: var(--font-mono); color: var(--text-muted);">
                  <?php echo number_format($pdv2, 2, ',', '.'); ?> €
                </td>
                <td style="padding: 12px 16px; border: 1px solid var(--border-color); text-align: right; font-family: var(--font-mono); font-weight: 600;">
                  <?php echo number_format($ukupno2, 2, ',', '.'); ?> €
                  <?php if ($ukupno2 > 1000): ?>
                    <?php 
                      $rata2 = round($ukupno2 / 3, 2); 
                      $zbrojRata2 = $rata2 * 3;
                    ?>
                    <div style="font-size: 0.78rem; font-weight: normal; color: var(--brand-blue); margin-top: 4px;">
                      Moguće plaćanje u 3 rate po <?php echo number_format($rata2, 2, ',', '.'); ?> €<br>
                      <span style="color: var(--text-muted);">(zbroj: <?php echo number_format($zbrojRata2, 2, ',', '.'); ?> €)</span>
                    </div>
                  <?php endif; ?>
                </td>
                <td style="padding: 12px 16px; border: 1px solid var(--border-color); text-align: right; font-family: var(--font-mono); font-weight: 700; color: var(--brand-blue);">
                  <?php echo number_format($clanovi2, 2, ',', '.'); ?> €
                </td>
              </tr>

              <!-- Usluga 3 -->
              <tr style="border-bottom: 1px solid var(--border-color); background-color: var(--bg-surface);">
                <td style="padding: 12px 16px; border: 1px solid var(--border-color); color: var(--text-heading); font-weight: 600;">
                  <?php echo $naziv3; ?>
                </td>
                <td style="padding: 12px 16px; border: 1px solid var(--border-color); color: var(--text-muted); font-size: 0.9rem;">
                  <?php echo mb_substr($opis3, 0, 40) . "…"; ?>
                </td>
                <td style="padding: 12px 16px; border: 1px solid var(--border-color); text-align: right; font-family: var(--font-mono);">
                  <?php echo number_format($cijenaBezPdv3, 2, ',', '.'); ?> €
                </td>
                <td style="padding: 12px 16px; border: 1px solid var(--border-color); text-align: right; font-family: var(--font-mono); color: var(--text-muted);">
                  <?php echo number_format($pdv3, 2, ',', '.'); ?> €
                </td>
                <td style="padding: 12px 16px; border: 1px solid var(--border-color); text-align: right; font-family: var(--font-mono); font-weight: 600;">
                  <?php echo number_format($ukupno3, 2, ',', '.'); ?> €
                  <?php if ($ukupno3 > 1000): ?>
                    <?php 
                      $rata3 = round($ukupno3 / 3, 2); 
                      $zbrojRata3 = $rata3 * 3;
                    ?>
                    <div style="font-size: 0.78rem; font-weight: normal; color: var(--brand-blue); margin-top: 4px;">
                      Moguće plaćanje u 3 rate po <?php echo number_format($rata3, 2, ',', '.'); ?> €<br>
                      <span style="color: var(--text-muted);">(zbroj: <?php echo number_format($zbrojRata3, 2, ',', '.'); ?> €)</span>
                    </div>
                  <?php endif; ?>
                </td>
                <td style="padding: 12px 16px; border: 1px solid var(--border-color); text-align: right; font-family: var(--font-mono); font-weight: 700; color: var(--brand-blue);">
                  <?php echo number_format($clanovi3, 2, ',', '.'); ?> €
                </td>
              </tr>
            </tbody>
          </table>
        </div>

        <p style="margin-top: 15px; font-size: 0.9rem; color: var(--text-muted);">
          Cijene ažurirane: <strong><?php echo date("j. n. Y."); ?></strong>
        </p>
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
