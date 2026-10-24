<?php
// TSD-4RT | IN | 24.10.2026.
$naslovStranice = "Kontakt";
$trenutnaStranica = "kontakt";

include "dijelovi/zaglavlje.php";
?>

    <main>
      <h1 class="section-title">Kontaktirajte nas</h1>
      <p class="section-subtitle">
        Naš tim za hitne intervencije i podršku dostupan je 24/7
      </p>

      <div class="grid-container">
        <div class="card">
          <img
            src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=600&q=80"
            alt="Zgrada poslovnog sjedišta tvrtke CyberGuard"
            class="card-img"
          />
          <h3>Sjedište tvrtke</h3>
          <p><strong>Adresa:</strong> Gundulićeva 14, 43500 Daruvar</p>
          <p><strong>Telefon:</strong> +385 (0)1 555 4321</p>
          <p><strong>Email:</strong> info@cyberguard.hr</p>
        </div>

        <div class="card">
          <img
            src="https://images.unsplash.com/photo-1563986768494-4dee2763ff3f?auto=format&fit=crop&w=600&q=80"
            alt="Upozorenje o hitnom kibernetičkom incidentu i odziv CERT tima"
            class="card-img"
          />
          <h3>Hitni sigurnosni incidenti (CERT)</h3>
          <p>
            U slučaju aktivnog ransomware ili hakerskog napada nazovite dežurnog
            inženjera:
          </p>
          <p><strong>SOS linija:</strong> +385 800 999 112</p>
          <p><strong>Enkripcija:</strong> PGP ključ dostupan na zahtjev</p>
        </div>
      </div>

      <section style="margin-bottom: 2.5rem">
        <h2 class="section-title">Naša lokacija</h2>
        <p class="section-subtitle">
          Posjetite naš razvojni i operativni centar
        </p>
        <div class="map-container">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2791.671725464257!2d17.21841251270514!3d45.597143570955886!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476798b3c16f69d3%3A0x9ad0d9698a09a02!2sTehni%C4%8Dka%20%C5%A1kola%20Daruvar!5e0!3m2!1shr!2shr!4v1789415130025!5m2!1shr!2shr"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="strict-origin-when-cross-origin"
          ></iframe>
        </div>
      </section>
      
      <!-- Stilovi kalendara (osiguravaju ispravan prikaz neovisno o kešu preglednika) -->
      <style>
        .kalendar-sekcija {
          margin-bottom: 2.5rem;
          padding: 2rem;
          background-color: #ffffff;
          border: 1px solid #cbd5e1;
          border-radius: 8px;
        }
        .kalendar-naslov {
          margin-bottom: 0.5rem;
          text-align: left;
        }
        .kalendar-podnaslov {
          margin-bottom: 1.5rem;
          text-align: left;
        }
        .tabela-kalendar {
          width: 100% !important;
          border-collapse: collapse !important;
          table-layout: fixed !important;
          background-color: #ffffff;
          border: 1px solid #cbd5e1;
          border-radius: 8px;
          overflow: hidden;
          box-shadow: 0 2px 6px rgba(15, 23, 42, 0.04);
        }
        .tabela-kalendar th {
          background-color: #0b2545 !important;
          color: #ffffff !important;
          padding: 0.85rem 0.5rem !important;
          font-size: 0.95rem;
          font-weight: 600;
          text-align: center !important;
          border: 1px solid #1e3a5f !important;
          letter-spacing: 0.5px;
        }
        .tabela-kalendar th.th-vikend {
          background-color: #081d38 !important;
          color: #93c5fd !important;
        }
        .tabela-kalendar td {
          height: 52px !important;
          text-align: center !important;
          vertical-align: middle !important;
          font-size: 0.95rem;
          border: 1px solid #cbd5e1 !important;
          transition: all 0.15s ease;
        }
        .tabela-kalendar td.kalendar-prazno {
          background-color: #f8fafc !important;
        }
        .tabela-kalendar td.kalendar-dan {
          font-weight: 600;
          color: #0f172a;
          background-color: #ffffff;
        }
        .tabela-kalendar td.kalendar-dan:hover {
          background-color: #eff6ff !important;
          color: #0969da !important;
          cursor: pointer;
        }
        .tabela-kalendar td.vikend {
          background-color: #f1f5f9 !important;
          color: #94a3b8 !important;
          font-weight: 500;
        }
        .tabela-kalendar td.vikend:hover {
          background-color: #e2e8f0 !important;
        }
        .tabela-kalendar td.danas {
          background-color: #0969da !important;
          color: #ffffff !important;
          font-weight: 700 !important;
          box-shadow: inset 0 0 0 2px #1d4ed8;
        }
      </style>

      <section class="card kalendar-sekcija">
          <?php
          $mjesec = (int)date('n');
          $godina = (int)date('Y');
          $danasDan = (int)date('j');

          $naziviMjeseci = [
              1 => "Siječanj", 2 => "Veljača", 3 => "Ožujak", 4 => "Travanj",
              5 => "Svibanj", 6 => "Lipanj", 7 => "Srpanj", 8 => "Kolovoz",
              9 => "Rujan", 10 => "Listopad", 11 => "Studeni", 12 => "Prosinac"
          ];
          $imeMjeseca = $naziviMjeseci[$mjesec] ?? date('F');

          $ukupnoDana = (int)date('t', mktime(0, 0, 0, $mjesec, 1, $godina));

          $prviDanTjedan = (int)date('N', mktime(0, 0, 0, $mjesec, 1, $godina));
          $pocetniPrazni = $prviDanTjedan - 1;
          ?>

          <h2 class="section-title kalendar-naslov">Dostupnost termina — <?php echo "{$imeMjeseca} {$godina}."; ?></h2>
          <p class="section-subtitle kalendar-podnaslov">
            Pregled slobodnih termina za sigurnosne procjene i konzultacije (subote i nedjelje su neradni dani)
          </p>

          <div class="tabela-responzivno">
              <table class="tabela-kalendar">
                  <thead>
                      <tr>
                          <th>Po</th>
                          <th>Ut</th>
                          <th>Sr</th>
                          <th>Če</th>
                          <th>Pe</th>
                          <th class="th-vikend">Su</th>
                          <th class="th-vikend">Ne</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                      <?php
                      $pozicija = 0;

                      for ($p = 0; $p < $pocetniPrazni; $p++) {
                          echo '<td class="kalendar-prazno"></td>';
                          $pozicija++;
                      }

                      for ($dan = 1; $dan <= $ukupnoDana; $dan++) {
                          $klase = ['kalendar-dan'];

                          if ($pozicija === 5 || $pozicija === 6) {
                              $klase[] = 'vikend';
                          }

                          if ($dan === $danasDan) {
                              $klase[] = 'danas';
                          }

                          $klasaString = implode(' ', $klase);
                          echo "<td class=\"{$klasaString}\">{$dan}</td>";
                          $pozicija++;

                          if ($pozicija === 7 && $dan < $ukupnoDana) {
                              echo "</tr>\n<tr>";
                              $pozicija = 0;
                          }
                      }

                      if ($pozicija > 0 && $pozicija < 7) {
                          while ($pozicija < 7) {
                              echo '<td class="kalendar-prazno"></td>';
                              $pozicija++;
                          }
                      }
                      ?>
                      </tr>
                  </tbody>
              </table>
          </div>
      </section>

      <section class="form-section">
        <h2 class="section-title">Pošaljite nam poruku</h2>
        <p class="section-subtitle">
          Ispunite obrazac u nastavku i naš tim će vam se javiti unutar 24 sata.
        </p>
        <form class="contact-form" id="kontaktForma">
          <div class="form-group">
            <label for="ime">Ime i prezime:</label>
            <input
              type="text"
              id="ime"
              name="ime"
              placeholder="Unesite vaše ime i prezime"
              required
            />
          </div>
          <div class="form-group">
            <label for="email">E-mail adresa:</label>
            <input
              type="email"
              id="email"
              name="email"
              placeholder="npr. ivan.horvat@tvrtka.hr"
              required
            />
          </div>

          <div class="form-group">
            <label for="broj_zaposlenika">Broj zaposlenika u vašoj tvrtki:</label>
            <select id="broj_zaposlenika" name="broj_zaposlenika">
              <option value="">-- Odaberite broj zaposlenika --</option>
              <?php
              for ($z = 10; $z <= 200; $z += 10) {
                  echo "<option value=\"{$z}\">{$z} zaposlenika</option>\n";
              }
              ?>
            </select>
          </div>

          <div class="form-group">
            <label for="godina_osnutka">Godina osnutka tvrtke:</label>
            <select id="godina_osnutka" name="godina_osnutka">
              <option value="">-- Odaberite godinu --</option>
              <?php
              $trenutnaGodina = (int)date('Y');
              for ($god = $trenutnaGodina; $god >= 1990; $god--) {
                  echo "<option value=\"{$god}\">{$god}.</option>\n";
              }
              ?>
            </select>
          </div>

          <div class="form-group">
            <label for="razlog">Razlog javljanja:</label>
            <select id="razlog" name="razlog">
              <option value="upit">Opći upit o uslugama</option>
              <option value="incident">Prijava sigurnosnog incidenta</option>
              <option value="edukacija">Edukacija zaposlenika</option>
              <option value="suradnja">Poslovna suradnja</option>
            </select>
          </div>
          <div class="form-group">
            <label for="poruka">Vaša poruka (minimalno 20 znakova):</label>
            <textarea
              id="poruka"
              name="poruka"
              rows="5"
              placeholder="Opišite detaljno vaš upit ili incident..."
              required
            ></textarea>
            <small
              id="porukaGreska"
              style="
                color: #ef4444;
                display: none;
                font-weight: 600;
                margin-top: 0.35rem;
              "
            >
              Poruka mora sadržavati minimalno 20 znakova!
            </small>
          </div>
          <button type="submit" class="btn">Pošalji poruku</button>
        </form>
      </section>
    </main>

    <?php
      include "dijelovi/podnozje.php";
    ?>
