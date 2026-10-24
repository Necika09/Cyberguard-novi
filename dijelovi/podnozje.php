<?php
// TSD-4RT | IN | 24.10.2026.

$godinaOsnutka = 2019;
$godineRada = (int)date("Y") - $godinaOsnutka;

$siroviEmail = "  Info@SigurnaMreza.HR ";
$cistiEmail = strtolower(trim($siroviEmail));

$dan = (int)date("N");
$sat = (int)date("G");

if ($dan >= 1 && $dan <= 5 && $sat >= 8 && $sat < 16) {
    $statusPoruka = "Otvoreno — radimo do 16:00";
    $statusKlasa = "status-otvoreno";
} elseif ($dan === 6 && $sat >= 9 && $sat < 13) {
    $statusPoruka = "Otvoreno — radimo do 13:00";
    $statusKlasa = "status-otvoreno";
} else {
    if ($dan >= 1 && $dan <= 5 && $sat < 8) {
        $statusPoruka = "Zatvoreno — otvaramo danas u 8:00";
    } elseif ($dan >= 1 && $dan <= 4 && $sat >= 16) {
        $statusPoruka = "Zatvoreno — otvaramo sutra u 8:00";
    } elseif ($dan === 5 && $sat >= 16) {
        $statusPoruka = "Zatvoreno — otvaramo sutra u 9:00";
    } elseif ($dan === 6 && $sat < 9) {
        $statusPoruka = "Zatvoreno — otvaramo danas u 9:00";
    } else {
        $statusPoruka = "Zatvoreno — otvaramo u ponedjeljak u 8:00";
    }
    $statusKlasa = "status-zatvoreno";
}
?>
    <footer>
      <div class="footer-container">
        <div class="footer-col">
          <h4>CyberGuard Solutions</h4>
          <p>
            Vodeća tvrtka za kibernetičku sigurnost i zaštitu digitalne imovine.
          </p>
          <p class="footer-godine-rada">
            Na tržištu od <?php echo $godinaOsnutka; ?>. — već <?php echo $godineRada; ?> godina
          </p>
          <p class="footer-kontakt-stavka">
            <strong>Adresa:</strong> Gundulićeva 14, 43500 Daruvar (Tehnička škola Daruvar)
          </p>
          <p class="footer-email-stavka">
            <strong>E-mail:</strong> 
            <a href="mailto:<?php echo $cistiEmail; ?>" class="footer-email-link">
              <?php echo $cistiEmail; ?>
            </a>
          </p>
          <div class="footer-map-container">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2791.671725464257!2d17.21841251270514!3d45.597143570955886!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476798b3c16f69d3%3A0x9ad0d9698a09a02!2sTehni%C4%8Dka%20%C5%A1kola%20Daruvar!5e0!3m2!1shr!2shr!4v1789415130025!5m2!1shr!2shr"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="strict-origin-when-cross-origin"
            ></iframe>
          </div>
        </div>

        <div class="footer-col">
          <h4>Radno vrijeme</h4>
          <table class="tabela-radno-vrijeme">
            <tbody>
              <?php
              for ($i = 1; $i <= 7; $i++) {
                  $nazivDana = match ($i) {
                      1 => "Ponedjeljak",
                      2 => "Utorak",
                      3 => "Srijeda",
                      4 => "Četvrtak",
                      5 => "Petak",
                      6 => "Subota",
                      7 => "Nedjelja"
                  };

                  $satiRada = match ($i) {
                      1, 2, 3, 4, 5 => "08:00 – 16:00",
                      6             => "09:00 – 13:00",
                      7             => "Zatvoreno"
                  };

                  $redKlasa = ($i === $dan) ? ' class="dan-aktivno"' : '';

                  echo "<tr{$redKlasa}><td>{$nazivDana}</td><td>{$satiRada}</td></tr>\n              ";
              }
              ?>
            </tbody>
          </table>

          <div class="status-oznaka <?php echo $statusKlasa; ?>">
            <span class="status-tocka">&#9679;</span>
            <span><?php echo $statusPoruka; ?></span>
          </div>
        </div>

        <div class="footer-col">
          <h4>Pratite nas</h4>
          <p>
            <a
              href="https://www.instagram.com/tsd_daruvar/"
              target="_blank"
              rel="noopener noreferrer"
            >
              📷 Instagram: @tsd_daruvar
            </a>
          </p>
          <p>
            <a
              href="https://www.facebook.com/tsdaruvar/"
              target="_blank"
              rel="noopener noreferrer"
            >
              📘 Facebook: Tehnička škola Daruvar
            </a>
          </p>
        </div>

        <div class="footer-col">
          <h4>Newsletter</h4>
          <p>
            Pretplatite se na mjesečni sigurnosni bilten i analize prijetnji:
          </p>
          <form action="https://formspree.io/f/xgavklve" method="POST">
            <label>
              Email:
              <input type="email" name="email" required />
            </label>
            <button type="submit" class="btn">Prijava</button>
          </form>
        </div>
      </div>
      <div class="footer-bottom">
        <p>&copy; <?php echo date("Y"); ?> CyberGuard Solutions d.o.o. Sva prava pridržana.</p>
      </div>
    </footer>

    <aside id="cookie-banner" class="cookie-banner">
      <h4>Obavijest o kolačićima</h4>
      <p>
        Ova web stranica koristi nužne kolačiće kako bi osigurala ispravan rad i
        visoku razinu sigurnosti vaših podataka.
      </p>
      <div class="cookie-actions">
        <button id="accept-cookies" class="btn">Prihvaćam sve</button>
      </div>
    </aside>

    <script src="js/script.js"></script>
  </body>
</html>
