<?php
// TSD-4RT | IN | 18.10.2026.
?>
    <?php
      $naslovStranice = "O nama";
      $trenutnaStranica = "o-nama";

      include "dijelovi/zaglavlje.php";
    ?>

    <main>
      <h1 class="section-title">O nama</h1>
      <p class="section-subtitle">Tko stoji iza vaše kibernetičke obrane</p>

      <div class="grid-container">
        <div class="card">
          <img
            src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=600&q=80"
            alt="Tim inženjera računalstva surađuje na analizi digitalne sigurnosti"
            class="card-img"
          />
          <h3>Naša priča</h3>
          <p>
            CyberGuard Solutions osnovan je od strane inženjera računalstva s
            ciljem pružanja najvišeg stupnja zaštite domaćim i međunarodnim
            tvrtkama. Prepoznajemo prijetnje prije nego one postanu incidenti.
          </p>
        </div>
        <div class="card">
          <img
            src="https://images.unsplash.com/photo-1563986768609-322da13575f3?auto=format&fit=crop&w=600&q=80"
            alt="Simbol digitalnog certifikata i kriptografske zaštite podataka"
            class="card-img"
          />
          <h3>Naši certifikati</h3>
          <p>
            Naš tim posjeduje vodeće svjetske certifikate: OSCP (Offensive
            Security Certified Professional), CISSP, CEH (Certified Ethical
            Hacker) te ISO/IEC 27001 Lead Auditor.
          </p>
        </div>
        <div class="card">
          <img
            src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?auto=format&fit=crop&w=600&q=80"
            alt="Tehnički pristup analizi mrežnih paketa i hardverske sigurnosti"
            class="card-img"
          />
          <h3>Pristup radu</h3>
          <p>
            Kombiniramo automatizirane sigurnosne alate s manualnom provjerom
            iskusnih etičkih hakera, jamčeći nultu toleranciju na lažno
            pozitivne rezultate.
          </p>
        </div>
      </div>

      <!-- Kontakt forma prije podnožja -->
      <section class="form-section">
        <h2 class="section-title">Zainteresirani za suradnju?</h2>
        <p class="section-subtitle">
          Obratite nam se s povjerenjem za sva pitanja o našem timu i
          metodologiji.
        </p>
        <form class="contact-form">
          <div class="form-group">
            <label for="name">Ime i prezime:</label>
            <input type="text" id="name" required placeholder="Vaše ime" />
          </div>
          <div class="form-group">
            <label for="email">Email adresa:</label>
            <input
              type="email"
              id="email"
              required
              placeholder="vas.email@domena.hr"
            />
          </div>
          <div class="form-group">
            <label for="message">Poruka:</label>
            <textarea
              id="message"
              rows="4"
              required
              placeholder="Vaša poruka..."
            ></textarea>
          </div>
          <button type="submit" class="btn">Pošalji</button>
        </form>
      </section>
    </main>

    <?php
      include "dijelovi/podnozje.php";
    ?>
