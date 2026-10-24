<?php
// TSD-4RT | IN | 19.10.2026.
$naslovStranice = "Cjenovnik usluga";
$trenutnaStranica = "cjenik";

// C1 — Konstanta za stopu PDV-a
const PDV = 0.25;

// Blok 7 — C1: Postavke za mjesečno održavanje računala
$cijenaPoRacunalu = 12;      // 12 € po računalu
$popustPrag = 20;            // Za 20 i više računala
$popustPostotak = 0.10;      // 10 % popusta

// Usluga 1
$naziv1 = "Procjena rizika";
$opis1 = "Sveobuhvatna procjena sigurnosnih rizika za digitalnu infrastrukturu tvrtke.";
$cijenaBezPdv1 = 450;
$pdv1 = $cijenaBezPdv1 * PDV;
$ukupno1 = $cijenaBezPdv1 + $pdv1;
// Razina 2 (Blok 5): -15% za članove, zaokruženo na cijeli euro
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
            <small>/ jednokratno</small>
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
            <small>/ po sustavu</small>
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
            <small>/ mjesečno</small>
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

      <!-- 2. Tablica usluga s opisima, popustom za članove, opcijom rata i oznakom "Povoljno" (Razina 1) -->
      <section class="card cjenik-tabela-sekcija">
        <h2 class="section-title cjenik-tabela-naslov">Struktura cijena s PDV-om</h2>
        <p class="section-subtitle cjenik-tabela-podnaslov">
          Prikaz pojedinačnih cijena, stopa PDV-a, pogodnosti za članove te mogućnosti obročnog plaćanja:
        </p>

        <div class="tabela-responzivno">
          <table class="tabela-usluga">
            <thead>
              <tr>
                <th>Usluga</th>
                <th>Opis usluge</th>
                <th class="tekst-desno">Bez PDV-a</th>
                <th class="tekst-desno">PDV (25 %)</th>
                <th class="tekst-desno">Ukupno</th>
                <th class="tekst-desno th-clanovi">Za članove (−15 %)</th>
              </tr>
            </thead>
            <tbody>
              <!-- Usluga 1 -->
              <tr>
                <td class="td-naziv" data-label="Usluga">
                  <?php echo $naziv1; ?>
                  <?php if ($cijenaBezPdv1 < 500): ?>
                    <span class="oznaka-povoljno">Povoljno</span>
                  <?php endif; ?>
                </td>
                <td class="td-opis" data-label="Opis usluge">
                  <?php echo mb_substr($opis1, 0, 40) . "…"; ?>
                </td>
                <td class="td-broj" data-label="Bez PDV-a">
                  <?php echo number_format($cijenaBezPdv1, 2, ',', '.'); ?> €
                </td>
                <td class="td-pdv" data-label="PDV (25 %)">
                  <?php echo number_format($pdv1, 2, ',', '.'); ?> €
                </td>
                <td class="td-ukupno" data-label="Ukupno s PDV-om">
                  <?php echo number_format($ukupno1, 2, ',', '.'); ?> €
                  <?php if ($ukupno1 > 1000): ?>
                    <?php 
                      $rata1 = round($ukupno1 / 3, 2); 
                      $zbrojRata1 = $rata1 * 3;
                    ?>
                    <div class="rate-box">
                      3 × <?php echo number_format($rata1, 2, ',', '.'); ?> €
                      <?php if ($zbrojRata1 != $ukupno1): ?>
                        <div class="rate-zbroj">(zadnja: <?php echo number_format($ukupno1 - ($rata1 * 2), 2, ',', '.'); ?> €)</div>
                      <?php endif; ?>
                    </div>
                  <?php endif; ?>
                </td>
                <td class="td-clanovi" data-label="Za članove (-15 %)">
                  <?php echo number_format($clanovi1, 2, ',', '.'); ?> €
                </td>
              </tr>

              <!-- Usluga 2 -->
              <tr>
                <td class="td-naziv" data-label="Usluga">
                  <?php echo $naziv2; ?>
                  <?php if ($cijenaBezPdv2 < 500): ?>
                    <span class="oznaka-povoljno">Povoljno</span>
                  <?php endif; ?>
                </td>
                <td class="td-opis" data-label="Opis usluge">
                  <?php echo mb_substr($opis2, 0, 40) . "…"; ?>
                </td>
                <td class="td-broj" data-label="Bez PDV-a">
                  <?php echo number_format($cijenaBezPdv2, 2, ',', '.'); ?> €
                </td>
                <td class="td-pdv" data-label="PDV (25 %)">
                  <?php echo number_format($pdv2, 2, ',', '.'); ?> €
                </td>
                <td class="td-ukupno" data-label="Ukupno s PDV-om">
                  <?php echo number_format($ukupno2, 2, ',', '.'); ?> €
                  <?php if ($ukupno2 > 1000): ?>
                    <?php 
                      $rata2 = round($ukupno2 / 3, 2); 
                      $zbrojRata2 = $rata2 * 3;
                    ?>
                    <div class="rate-box">
                      3 × <?php echo number_format($rata2, 2, ',', '.'); ?> €
                      <?php if ($zbrojRata2 != $ukupno2): ?>
                        <div class="rate-zbroj">(zadnja: <?php echo number_format($ukupno2 - ($rata2 * 2), 2, ',', '.'); ?> €)</div>
                      <?php endif; ?>
                    </div>
                  <?php endif; ?>
                </td>
                <td class="td-clanovi" data-label="Za članove (-15 %)">
                  <?php echo number_format($clanovi2, 2, ',', '.'); ?> €
                </td>
              </tr>

              <!-- Usluga 3 -->
              <tr>
                <td class="td-naziv" data-label="Usluga">
                  <?php echo $naziv3; ?>
                  <?php if ($cijenaBezPdv3 < 500): ?>
                    <span class="oznaka-povoljno">Povoljno</span>
                  <?php endif; ?>
                </td>
                <td class="td-opis" data-label="Opis usluge">
                  <?php echo mb_substr($opis3, 0, 40) . "…"; ?>
                </td>
                <td class="td-broj" data-label="Bez PDV-a">
                  <?php echo number_format($cijenaBezPdv3, 2, ',', '.'); ?> €
                </td>
                <td class="td-pdv" data-label="PDV (25 %)">
                  <?php echo number_format($pdv3, 2, ',', '.'); ?> €
                </td>
                <td class="td-ukupno" data-label="Ukupno s PDV-om">
                  <?php echo number_format($ukupno3, 2, ',', '.'); ?> €
                  <?php if ($ukupno3 > 1000): ?>
                    <?php 
                      $rata3 = round($ukupno3 / 3, 2); 
                      $zbrojRata3 = $rata3 * 3;
                    ?>
                    <div class="rate-box">
                      3 × <?php echo number_format($rata3, 2, ',', '.'); ?> €
                      <?php if ($zbrojRata3 != $ukupno3): ?>
                        <div class="rate-zbroj">(zadnja: <?php echo number_format($ukupno3 - ($rata3 * 2), 2, ',', '.'); ?> €)</div>
                      <?php endif; ?>
                    </div>
                  <?php endif; ?>
                </td>
                <td class="td-clanovi" data-label="Za članove (-15 %)">
                  <?php echo number_format($clanovi3, 2, ',', '.'); ?> €
                </td>
              </tr>
            </tbody>
          </table>
        </div>

        <p class="cjenik-azurirano">
          <em>* Cjenik je ažuriran na dan: <?php echo date("d.m.Y."); ?>. Sve cijene izražene su u eurima (€).</em>
        </p>
      </section>

      <!-- Blok 7 — C1: Tablica mjesečnog održavanja računala generirana pomoću petlje for -->
      <section class="card cjenik-tabela-sekcija">
        <h2 class="section-title cjenik-tabela-naslov">Cjenik održavanja računala</h2>
        <p class="section-subtitle cjenik-tabela-podnaslov">
          Mjesečno održavanje radnih stanica uz automatski popust od 10 % za 20 i više računala:
        </p>

        <div class="tabela-responzivno">
          <table class="tabela-usluga">
            <thead>
              <tr>
                <th>Broj računala</th>
                <th class="tekst-desno">Mjesečno</th>
                <th class="tekst-desno">Napomena</th>
              </tr>
            </thead>
            <tbody>
              <?php
              for ($brojRacunala = 5; $brojRacunala <= 50; $brojRacunala += 5) {
                  $osnovnaCijena = $brojRacunala * $cijenaPoRacunalu;
                  $imaPopust = ($brojRacunala >= $popustPrag);

                  if ($imaPopust) {
                      $konacnaCijena = $osnovnaCijena * (1 - $popustPostotak);
                      $klasaReda = 'class="red-popust"';
                      $napomena = '<span class="oznaka-povoljno">10 % popusta</span>';
                  } else {
                      $konacnaCijena = $osnovnaCijena;
                      $klasaReda = '';
                      $napomena = 'Redovna cijena';
                  }

                  $formatiranaCijena = number_format($konacnaCijena, 2, ',', '.') . ' €';

                  echo "<tr {$klasaReda}>";
                  echo "<td class=\"td-naziv\" data-label=\"Broj računala\"><strong>{$brojRacunala}</strong> računala</td>";
                  echo "<td class=\"td-ukupno\" data-label=\"Mjesečno\">{$formatiranaCijena}</td>";
                  echo "<td class=\"td-clanovi\" data-label=\"Napomena\">{$napomena}</td>";
                  echo "</tr>\n";
              }
              ?>
            </tbody>
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
