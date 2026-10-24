<?php
// TSD-4RT | IN | 24.10.2026.
$naslovStranice = "Cjenovnik usluga";
$trenutnaStranica = "cjenik";

const PDV = 0.25;

$usluge = [
    [
        "naziv" => "Procjena rizika",
        "opis" => "Sveobuhvatna procjena sigurnosnih rizika za digitalnu infrastrukturu tvrtke.",
        "cijenaBezPdv" => 450
    ],
    [
        "naziv" => "Sigurnosna analiza",
        "opis" => "Detaljna penetracijska provjera ranjivosti i sigurnosnih protokola sustava.",
        "cijenaBezPdv" => 1280
    ],
    [
        "naziv" => "Edukacija zaposlenika",
        "opis" => "Interaktivne radionice o prepoznavanju phishing prijetnji i socijalnog inženjeringa.",
        "cijenaBezPdv" => 300
    ]
];

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

      <div class="grid-container">
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
                <th class="tekst-desno">PDV (25%)</th>
                <th class="tekst-desno">Ukupno</th>
                <th class="tekst-desno th-clanovi">Za članove (−15%)</th>
              </tr>
            </thead>
            <tbody>
              <?php
              for ($i = 0; $i < count($usluge); $i++):
                  $u = $usluge[$i];
                  $cijenaBezPdv = $u["cijenaBezPdv"];
                  $pdv = $cijenaBezPdv * PDV;
                  $ukupno = $cijenaBezPdv + $pdv;
                  $clanovi = round($ukupno * 0.85);
              ?>
              <tr>
                <td class="td-naziv">
                  <?php echo $u["naziv"]; ?>
                  <?php if ($cijenaBezPdv < 500): ?>
                    <span class="oznaka-povoljno">Povoljno</span>
                  <?php endif; ?>
                </td>
                <td class="td-opis">
                  <?php echo mb_substr($u["opis"], 0, 40) . "…"; ?>
                </td>
                <td class="td-broj">
                  <?php echo number_format($cijenaBezPdv, 2, ',', '.'); ?> €
                </td>
                <td class="td-pdv">
                  <?php echo number_format($pdv, 2, ',', '.'); ?> €
                </td>
                <td class="td-ukupno">
                  <?php echo number_format($ukupno, 2, ',', '.'); ?> €
                  <?php if ($ukupno > 1000): ?>
                    <?php 
                      $rata = round($ukupno / 3, 2); 
                      $zbrojRata = $rata * 3;
                    ?>
                    <div class="rate-box">
                      3 rate po <?php echo number_format($rata, 2, ',', '.'); ?> €<br>
                      <span class="rate-zbroj">(zbroj: <?php echo number_format($zbrojRata, 2, ',', '.'); ?> €)</span>
                    </div>
                  <?php endif; ?>
                </td>
                <td class="td-clanovi">
                  <?php echo number_format($clanovi, 2, ',', '.'); ?> €
                </td>
              </tr>
              <?php endfor; ?>
            </tbody>
          </table>
        </div>

        <p class="cjenik-azurirano">
          Cijene ažurirane: <strong><?php echo date("j. n. Y."); ?></strong>
        </p>
      </section>

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
