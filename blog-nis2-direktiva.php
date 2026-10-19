<?php
// TSD-4RT | IN | 19.10.2026.
?>
    <!-- Zaglavlje -->
    <?php
      $naslovStranice = "NIS2 direktiva u RH";
      $trenutnaStranica = "blog-nis2-direktiva";

      include "dijelovi/zaglavlje.php";
    ?>

    <main>
      <p style="margin-bottom: 1.5rem">
        <a
          href="novosti.php"
          style="
            color: var(--brand-blue);
            text-decoration: none;
            font-weight: 600;
          "
          >← Povratak na sve novosti</a
        >
      </p>

      <article class="card" style="margin-bottom: 3rem; padding: 2.5rem">
        <p
          style="
            font-family: var(--font-mono);
            font-size: 0.85rem;
            color: var(--brand-blue);
            margin-bottom: 0.5rem;
            text-transform: uppercase;
          "
        >
          Objavljeno: 28. kolovoza 2026. | Kategorija: Zakonska usklađenost
        </p>
        <h1
          style="
            font-size: 2.3rem;
            color: var(--brand-navy);
            margin-bottom: 1rem;
            line-height: 1.3;
          "
        >
          Priprema za implementaciju NIS2 direktive u RH
        </h1>

        <img
          src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?auto=format&fit=crop&w=1200&q=80"
          alt="Globalna kibernetička povezanost i usklađenost s europskim standardima kibernetičke sigurnosti"
          class="article-hero-img"
        />

        <div
          style="
            background-color: var(--bg-page);
            padding: 1rem 1.5rem;
            border-left: 4px solid var(--brand-blue);
            margin-bottom: 2rem;
          "
        >
          <strong>Autor:</strong> Ana Babić, dipl. ing. (Voditeljica SOC centra)
        </div>

        <div
          style="
            color: var(--text-body);
            font-size: 1.05rem;
            line-height: 1.8;
            display: flex;
            flex-direction: column;
            gap: 1.25rem;
          "
        >
          <p>
            Usklađivanje s europskom direktivom NIS2 (Network and Information
            Security Directive) postao je jedan od primarnih regulatornih
            zadataka za domaće organizacije. Novi Zakon o kibernetičkoj
            sigurnosti znatno proširuje opseg obveznika.
          </p>

          <h3
            style="
              color: var(--brand-navy);
              font-size: 1.35rem;
              margin-top: 1rem;
            "
          >
            1. Tko su obveznici?
          </h3>
          <p>
            Za razliku od izvorne direktive, NIS2 obuhvaća srednje i velike
            organizacije iz energetskog sektora, transporta, zdravstva,
            bankarstva, digitalne infrastrukture, javne uprave, ali i pružatelje
            IT usluga te lance opskrbe.
          </p>

          <h3
            style="
              color: var(--brand-navy);
              font-size: 1.35rem;
              margin-top: 1rem;
            "
          >
            2. Ključni stupovi usklađenosti
          </h3>
          <ul
            style="
              margin-left: 1.5rem;
              display: flex;
              flex-direction: column;
              gap: 0.5rem;
            "
          >
            <li>
              <strong>Upravljanje rizicima:</strong> Provedba redovitih analiza
              rizika i sigurnosnih revizija cjelokupne infrastrukture.
            </li>
            <li>
              <strong>Upravljanje incidentima:</strong> Obveza prijavljivanja
              značajnih incidenata nadležnom tijelu unutar 24 sata od saznanja.
            </li>
            <li>
              <strong>Sigurnost lanca opskrbe:</strong> Provjera kibernetičkih
              standarda vanjskih dobavljača i partnera s pristupom mrežama.
            </li>
            <li>
              <strong>Kontinuitet poslovanja:</strong> Planovi oporavka nakon
              katastrofe (Disaster Recovery) i redovite sigurnosne kopije
              (Backup).
            </li>
          </ul>

          <h3
            style="
              color: var(--brand-navy);
              font-size: 1.35rem;
              margin-top: 1rem;
            "
          >
            3. Odgovornost uprave
          </h3>
          <p>
            NIS2 uvodi izravnu osobnu odgovornost članova upravnih tijela
            organizacije u slučaju neprovođenja zakonskih mjera zaštite. Uprave
            su dužne proći obuku o kibernetičkoj sigurnosti i aktivno nadzirati
            upravljanje sigurnosnim rizicima.
          </p>
        </div>
      </article>

      <!-- Kontakt forma prije podnožja -->
      <section class="form-section">
        <h2 class="section-title">Provjerite usklađenost vaše organizacije</h2>
        <p class="section-subtitle">
          Zatražite inicijalni NIS2 GAP audit s našim certifikovanim auditorima.
        </p>
        <form class="contact-form">
          <div class="form-group">
            <label for="name">Ime i prezime:</label>
            <input type="text" id="name" required placeholder="Vaše ime" />
          </div>
          <div class="form-group">
            <label for="email">Poslovna email adresa:</label>
            <input
              type="email"
              id="email"
              required
              placeholder="adresa@tvrtka.hr"
            />
          </div>
          <div class="form-group">
            <label for="message">Naziv i djelatnost organizacije:</label>
            <textarea
              id="message"
              rows="3"
              required
              placeholder="Kratak opis poslovnog sektora i trenutnog stanja zaštite..."
            ></textarea>
          </div>
          <button type="submit" class="btn">Zatraži NIS2 audit</button>
        </form>
      </section>
    </main>

    <?php
      include "dijelovi/podnozje.php";
    ?>
