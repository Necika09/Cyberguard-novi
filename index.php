<?php
// TSD-4RT | IN | 24.10.2026.

$sat = (int) date("G");

if ($sat < 12) {
    $pozdrav = "Dobro jutro";
} elseif ($sat < 18) {
    $pozdrav = "Dobar dan";
} else {
    $pozdrav = "Dobra večer";
}
?>
    <?php
      $naslovStranice = "Početna";
      $trenutnaStranica = "index";

      include "dijelovi/zaglavlje.php";
    ?>

    <main>
      <section class="hero">
        <p class="hero-pozdrav">
          <?php echo $pozdrav; ?>! Dobrodošli u CyberGuard Solutions.
        </p>
        <h1>Sigurnost vaših digitalnih sustava na prvom mjestu</h1>
        <p>
          Pružamo cjelovita rješenja za zaštitu od kibernetičkih prijetnji,
          penetracijska testiranja i 24/7 nadzor sigurnosnih incidenata.
        </p>
        <a href="kontakt.php" class="btn">Zatražite sigurnosnu procjenu</a>
      </section>

      <?php

      $recenzije = [
          [
              "ime" => "Marko Horvat",
              "tvrtka" => "Adria Logistics d.o.o.",
              "ocjena" => 5,
              "tekst" => "Nakon penetracijskog testiranja otkrili smo kritične propuste u web trgovini prije puštanja u rad. Vrhunska i brza usluga!"
          ],
          [
              "ime" => "Ivana Kovač",
              "tvrtka" => "TechFin Solutions",
              "ocjena" => 4,
              "tekst" => "Edukacija zaposlenika o phishing napadima drastično je smanjila broj sumnjivih klikova. Preporuka za svaki tim."
          ],
          [
              "ime" => "Davor Novak",
              "tvrtka" => "Alpha Medika",
              "ocjena" => 5,
              "tekst" => "Implementacija SOC nadzora donijela nam je miran san i potpunu usklađenost sa strogim sigurnosnim regulativama."
          ]
        ];
      ?>

      <section class="card recenzije-sekcija">
          <h2 class="section-title">Što kažu naši klijenti</h2>
          <p class="section-subtitle">Iskustva tvrtki koje su povjerile sigurnost svojih sustava CyberGuard timu</p>

          <div class="grid-container recenzije-grid">
              <?php foreach ($recenzije as $r): ?>
                  <div class="card recenzija-kartica">
                      <div class="recenzija-zvjezdice">
                          <?php
                          // Pune zvjezdice pomoću petlje
                          for ($z = 1; $z <= $r['ocjena']; $z++) {
                              echo '<span class="zvijezda-puna">★</span>';
                          }
                          // Prazne zvjezdice do ukupno 5
                          for ($p = 1; $p <= (5 - $r['ocjena']); $p++) {
                              echo '<span class="zvijezda-prazna">☆</span>';
                          }
                          ?>
                      </div>
                      <p class="recenzija-tekst">"<?php echo $r['tekst']; ?>"</p>
                      <div class="recenzija-autor">
                          <strong><?php echo $r['ime']; ?></strong><br>
                          <small><?php echo $r['tvrtka']; ?></small>
                      </div>
                  </div>
              <?php endforeach; ?>
          </div>
      </section>

      <h2 class="section-title">Ključna područja zaštite</h2>
      <p class="section-subtitle">
        Stručna rješenja prilagođena modernim poslovnim izazovima
      </p>

      <div class="grid-container">
        <div class="card">
          <img
            src="https://images.unsplash.com/photo-1526374965328-7f61d4dc18c5?auto=format&fit=crop&w=600&q=80"
            alt="Zaslon s programskim kodom i analizom ranjivosti za penetracijsko testiranje"
            class="card-img"
          />
          <h3>Penetracijska testiranja</h3>
          <p>
            Etičko hakiranje i detaljna analiza ranjivosti vaših web aplikacija,
            mreža i infrastrukture prije nego ih napadači iskoriste.
          </p>
        </div>
        <div class="card">
          <img
            src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?auto=format&fit=crop&w=600&q=80"
            alt="Sigurnosno-operativni centar s više monitora za nadzor mrežnog prometa 24/7"
            class="card-img"
          />
          <h3>SOC Nadzor (24/7)</h3>
          <p>
            Kontinuirani nadzor mrežnog prometa i trenutni odgovor na sigurnosne
            incidente u realnom vremenu.
          </p>
        </div>
        <div class="card">
          <img
            src="https://images.unsplash.com/photo-1450133064473-71024230f91b?auto=format&fit=crop&w=600&q=80"
            alt="Poslovni dokumenti i revizija usklađenosti s ISO standardima i NIS2 regulativom"
            class="card-img"
          />
          <h3>Usklađenost i auditi</h3>
          <p>
            Implementacija i priprema za ISO 27001, NIS2 direktivu i GDPR
            standarde zaštite podataka.
          </p>
        </div>
      </div>

      <section class="form-section">
        <h2 class="section-title">Brzi kontakt</h2>
        <p class="section-subtitle">
          Trebate hitnu pomoć ili analizu sustava? Javite nam se.
        </p>
        <form class="contact-form">
          <div class="form-group">
            <label for="name">Ime i prezime:</label>
            <input
              type="text"
              id="name"
              name="name"
              required
              placeholder="npr. Ivan Horvat"
            />
          </div>
          <div class="form-group">
            <label for="email">Poslovna email adresa:</label>
            <input
              type="email"
              id="email"
              name="email"
              required
              placeholder="ivan@tvrtka.hr"
            />
          </div>
          <div class="form-group">
            <label for="service">Vrsta usluge:</label>
            <select id="service" name="service">
              <option value="audit">Sigurnosni audit</option>
              <option value="pentest">Penetracijsko testiranje</option>
              <option value="soc">24/7 Nadzor</option>
              <option value="drugo">Ostali upiti</option>
            </select>
          </div>
          <div class="form-group">
            <label for="message">Opis upita:</label>
            <textarea
              id="message"
              name="message"
              rows="4"
              required
              placeholder="Opišite vašu infrastrukturu ili problem..."
            ></textarea>
          </div>
          <button type="submit" class="btn">Pošalji upit</button>
        </form>
      </section>
    </main>

    <?php
      include "dijelovi/podnozje.php";
    ?>
