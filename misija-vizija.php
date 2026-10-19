<?php
// TSD-4RT | IN | 19.10.2026.
?>
    <?php
      $naslovStranice = "Misija i vizija";
      $trenutnaStranica = "misija-vizija";

      include "dijelovi/zaglavlje.php";
    ?>

    <main>
      <h1 class="section-title">Misija i vizija tvrtke</h1>
      <p class="section-subtitle">
        Vrijednosti i dugoročni ciljevi koji vode naše poslovanje
      </p>

      <div class="grid-container">
        <div class="card">
          <img
            src="https://images.unsplash.com/photo-1510511459019-5dda7724fd87?auto=format&fit=crop&w=600&q=80"
            alt="Futuristički digitalni štit i zaštita integriteta podataka"
            class="card-img"
          />
          <h3>Naša misija</h3>
          <p>
            Zaštititi digitalni integritet, povjerljivost podataka i kontinuitet
            poslovanja naših klijenata kroz implementaciju najsuvremenijih
            sigurnosnih tehnologija i stalnu edukaciju djelatnika.
          </p>
        </div>

        <div class="card">
          <img
            src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&w=600&q=80"
            alt="Moderna radna stanica i visoka tehnologija koja predstavlja viziju razvoja"
            class="card-img"
          />
          <h3>Naša vizija</h3>
          <p>
            Postati regionalni lider u području ofenzivne i defenzivne
            informacijske sigurnosti te izgraditi digitalno društvo otporno na
            kibernetičke prijetnje budućnosti.
          </p>
        </div>

        <div class="card">
          <img
            src="https://images.unsplash.com/photo-1521737711867-e3b97375f902?auto=format&fit=crop&w=600&q=80"
            alt="Poslovni tim u raspravi koji simbolizira transparentnost i profesionalni integritet"
            class="card-img"
          />
          <h3>Temeljne vrijednosti</h3>
          <p>
            Integritet, diskrecija, transparentnost u izvještavanju i stalna
            tehnička izvrsnost temelj su svakog našeg partnerstva.
          </p>
        </div>
      </div>

      <!-- Kontakt forma prije podnožja -->
      <section class="form-section">
        <h2 class="section-title">Podijelite s nama vašu viziju sigurnosti</h2>
        <p class="section-subtitle">
          Zajedno možemo osigurati vašu tvrtku za godine koje dolaze.
        </p>
        <form class="contact-form">
          <div class="form-group">
            <label for="name">Ime i prezime:</label>
            <input type="text" id="name" required />
          </div>
          <div class="form-group">
            <label for="email">Email adresa:</label>
            <input type="email" id="email" required />
          </div>
          <div class="form-group">
            <label for="message">Poruka:</label>
            <textarea id="message" rows="4" required></textarea>
          </div>
          <button type="submit" class="btn">Pošalji</button>
        </form>
      </section>
    </main>

    <?php
      include "dijelovi/podnozje.php";
    ?>
