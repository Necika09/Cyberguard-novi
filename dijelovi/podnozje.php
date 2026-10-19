<?php
// TSD-4RT | IN | 19.10.2026.

// Razina 1 (Blok 5): Godina osnutka i izračun godina rada
$godinaOsnutka = 2019;
$godineRada = (int)date("Y") - $godinaOsnutka;

// Razina 1 (Blok 5): E-mail s razmacima očišćen pomoću trim() i strtolower()
$siroviEmail = "  Info@SigurnaMreza.HR ";
$cistiEmail = strtolower(trim($siroviEmail));

// C1 (Blok 6): Dan i sat te provjera radnog vremena
$dan = (int) date("N");   // 1 = ponedjeljak … 7 = nedjelja
$sat = (int) date("G");   // sat bez vodeće nule, 0–23

// Testiranje za C2 (odkomentiraj za provjeru određenog termina, pa ponovno zakomentiraj):
// $dan = 5; $sat = 16;

if ($dan >= 1 && $dan <= 5 && $sat >= 8 && $sat < 16) {
    $porukaRadnoVrijeme = "Otvoreno — radimo do 16:00";
    $klasaRadnoVrijeme = "status-otvoreno";
} elseif ($dan === 6 && $sat >= 9 && $sat < 13) {
    $porukaRadnoVrijeme = "Otvoreno — radimo do 13:00";
    $klasaRadnoVrijeme = "status-otvoreno";
} else {
    $porukaRadnoVrijeme = "Zatvoreno";
    $klasaRadnoVrijeme = "status-zatvoreno";
}
?>
    <footer>
      <div class="footer-container">
        <!-- 1. Stupac: O tvrtki i lokacija -->
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

        <!-- 2. Stupac: Radno vrijeme (C1) -->
        <div class="footer-col">
          <h4>Radno vrijeme</h4>
          <table class="tabela-radno-vrijeme">
            <tbody>
              <tr>
                <td>Ponedjeljak – Petak:</td>
                <td>08:00 – 16:00</td>
              </tr>
              <tr>
                <td>Subota:</td>
                <td>09:00 – 13:00</td>
              </tr>
              <tr>
                <td>Nedjelja:</td>
                <td>Zatvoreno</td>
              </tr>
            </tbody>
          </table>
          <p class="status-oznaka <?php echo $klasaRadnoVrijeme; ?>">
            <span class="status-tocka">●</span> <?php echo $porukaRadnoVrijeme; ?>
          </p>
        </div>

        <!-- 3. Stupac: Društvene mreže -->
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

        <!-- 4. Stupac: Newsletter -->
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

    <!-- Obvezni kolačići -->
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
