<?php
// TSD-4RT | IN | 19.10.2026.
?>
    <?php
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

      <!-- Karta lokacije na stranici za kontakt -->
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

      <!-- Funkcionalna forma za kontakt -->
      <section class="form-section">
        <h2 class="section-title">Pošaljite izravan upit</h2>
        <p class="section-subtitle">
          Ispunite obrazac u nastavku i odgovorit ćemo unutar nekoliko sati.
        </p>
        <form class="contact-form" method="POST">
          <div class="form-group">
            <label for="contact-name">Ime i prezime:</label>
            <input
              type="text"
              id="contact-name"
              name="name"
              required
              placeholder="Vaše puno ime"
            />
          </div>
          <div class="form-group">
            <label for="contact-email">Email adresa:</label>
            <input
              type="email"
              id="contact-email"
              name="email"
              required
              placeholder="adresa@tvrtka.hr"
            />
          </div>
          <div class="form-group">
            <label for="contact-phone">Broj telefona (opcionalno):</label>
            <input
              type="tel"
              id="contact-phone"
              name="phone"
              placeholder="+385 91 123 4567"
            />
          </div>
          <!-- Padajući izbornik 1: Broj zaposlenika -->
          <div class="form-group">
              <label for="broj_zaposlenika">Broj zaposlenika:</label>
              <select name="broj_zaposlenika" id="broj_zaposlenika">
                  <option value="">-- Odaberite broj zaposlenika --</option>
                  <?php
                  for ($z = 10; $z <= 200; $z += 10) {
                      echo "<option value=\"{$z}\">{$z} zaposlenika</option>\n";
                  }
                  ?>
              </select>
          </div>
          <!-- Padajući izbornik 2: Godina osnutka tvrtke -->
          <div class="form-group">
              <label for="godina_osnutka">Godina osnutka vaše tvrtke:</label>
              <select name="godina_osnutka" id="godina_osnutka">
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
            <label for="contact-subject">Predmet upita:</label>
            <input
              type="text"
              id="contact-subject"
              name="subject"
              required
              placeholder="Sigurnosna procjena / Ponuda"
            />
          </div>
          <div class="form-group">
            <label for="contact-message">Poruka:</label>
            <textarea
              id="contact-message"
              name="message"
              rows="5"
              required
              placeholder="Navedite detalje vašeg upita..."
            ></textarea>
          </div>
          <button type="submit" class="btn">Pošalji poruku</button>
        </form>
      </section>
    </main>

    <?php
      include "dijelovi/podnozje.php";
    ?>
