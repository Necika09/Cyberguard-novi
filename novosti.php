<?php
// TSD-4RT | IN | 19.10.2026.
?>
    <!-- Zaglavlje -->
    <?php
      $naslovStranice = "Novosti";
      $trenutnaStranica = "novosti";

      include "dijelovi/zaglavlje.php";
    ?>

    <main>
      <h1 class="section-title">Novosti i stručni blogovi</h1>
      <p class="section-subtitle">
        Analize najnovijih ranjivosti, prijetnji i savjeti za bolju obranu
      </p>

      <div class="grid-container">
        <!-- Članak 1: Phishing -->
        <article class="card">
          <img
            src="https://images.unsplash.com/photo-1563986768609-322da13575f3?auto=format&fit=crop&w=800&q=80"
            alt="Grafički prikaz kibernetičkog napada i lažnih e-mail poruka"
            class="card-img"
          />
          <h3>
            <a
              href="blog-phishing-napadi.php"
              style="color: inherit; text-decoration: none"
            >
              Kako prepoznati ciljane Phishing napade nove generacije
            </a>
          </h3>
          <p>
            <small>Objavljeno: 10. rujna 2026. | Autor: Marko Kovačević</small>
          </p>
          <br />
          <p>
            Napadači sve češće koriste napredne jezične modele za izradu
            savršeno prilagođenih e-mail poruka. Saznajte kako educirati
            zaposlenike i prepoznati zamke.
          </p>
          <br />
          <p>
            <a
              href="blog-phishing-napadi.php"
              class="btn"
              style="padding: 0.5rem 1rem; font-size: 0.85rem"
            >
              Pročitaj članak
            </a>
          </p>
        </article>

        <!-- Članak 2: NIS2 direktiva -->
        <article class="card">
          <img
            src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?auto=format&fit=crop&w=800&q=80"
            alt="Digitalna mrežna povezanost i europska regulativa za sigurnost sustava"
            class="card-img"
          />
          <h3>
            <a
              href="blog-nis2-direktiva.php"
              style="color: inherit; text-decoration: none"
            >
              Priprema za implementaciju NIS2 direktive u RH
            </a>
          </h3>
          <p>
            <small>Objavljeno: 28. kolovoza 2026. | Autor: Ana Babić</small>
          </p>
          <br />
          <p>
            Europska regulativa donosi strože zahtjeve za kibernetičku otpornost
            ključnih i važnih subjekata. Donosimo korak-po-korak kontrolnu
            listu.
          </p>
          <br />
          <p>
            <a
              href="blog-nis2-direktiva.php"
              class="btn"
              style="padding: 0.5rem 1rem; font-size: 0.85rem"
            >
              Pročitaj članak
            </a>
          </p>
        </article>

        <!-- Članak 3: Zaštita oblaka -->
        <article class="card">
          <img
            src="https://images.unsplash.com/photo-1544197150-b99a580bb7a8?auto=format&fit=crop&w=800&q=80"
            alt="Serveri i podatkovni centar u oblaku s mrežnom opremom"
            class="card-img"
          />
          <h3>
            <a
              href="blog-zastita-oblaka.php"
              style="color: inherit; text-decoration: none"
            >
              5 ključnih postavki za zaštitu poslužitelja u oblaku
            </a>
          </h3>
          <p>
            <small>Objavljeno: 15. kolovoza 2026. | Autor: Luka Novak</small>
          </p>
          <br />
          <p>
            Pogrešne konfiguracije IAM uloga i javno dostupni spremnici podataka
            i dalje su najčešći uzrok curenja informacija. Evo kako ih
            osigurati.
          </p>
          <br />
          <p>
            <a
              href="blog-zastita-oblaka.php"
              class="btn"
              style="padding: 0.5rem 1rem; font-size: 0.85rem"
            >
              Pročitaj članak
            </a>
          </p>
        </article>
      </div>

      <!-- Forma za prijedlog teme -->
      <section class="form-section">
        <h2 class="section-title">Predložite temu za blog</h2>
        <p class="section-subtitle">
          Zanima vas specifična sigurnosna tema? Pošaljite nam prijedlog.
        </p>
        <form class="contact-form">
          <div class="form-group">
            <label for="name">Ime:</label>
            <input type="text" id="name" required />
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" required />
          </div>
          <div class="form-group">
            <label for="message">Prijedlog teme:</label>
            <textarea id="message" rows="3" required></textarea>
          </div>
          <button type="submit" class="btn">Pošalji prijedlog</button>
        </form>
      </section>
    </main>

    <!-- Podnožje -->
    <?php
      include "dijelovi/podnozje.php";
    ?>
