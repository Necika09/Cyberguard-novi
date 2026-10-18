<?php
// TSD-4RT | IN | 18.10.2026.
?>
    <!-- Zaglavlje -->
    <?php
      $naslovStranice = "Zaštita oblaka";
      $trenutnaStranica = "blog-zastita-oblaka";

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
          Objavljeno: 15. kolovoza 2026. | Kategorija: Sigurnost u oblaku (Cloud
          Security)
        </p>
        <h1
          style="
            font-size: 2.3rem;
            color: var(--brand-navy);
            margin-bottom: 1rem;
            line-height: 1.3;
          "
        >
          5 ključnih postavki za zaštitu poslužitelja u oblaku
        </h1>

        <img
          src="https://images.unsplash.com/photo-1544197150-b99a580bb7a8?auto=format&fit=crop&w=1200&q=80"
          alt="Infrastruktura poslužitelja u oblaku i podatkovni centar visoke dostupnosti"
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
          <strong>Autor:</strong> Luka Novak (Arhitekt mrežne sigurnosti)
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
            Migracija poslovanja na poslužitelje u oblaku (AWS, Azure, Google
            Cloud) donosi skalabilnost, ali stvara i novu površinu za napade. U
            praksi većina curenja podataka ne nastaje zbog grešaka samog
            pružatelja usluga, već zbog pogrešnih sigurnosnih postavki
            korisnika.
          </p>

          <h3
            style="
              color: var(--brand-navy);
              font-size: 1.35rem;
              margin-top: 1rem;
            "
          >
            1. Princip najmanjih privilegija (Principle of Least Privilege)
          </h3>
          <p>
            Identitet i pristup (IAM) temelj su cloud sigurnosti. Svakoj ulozi,
            servisu ili korisniku dodijelite samo one dozvole koje su mu nužno
            potrebne za obavljanje posla. Izbjegavajte trajne administratorske
            ovlasti.
          </p>

          <h3
            style="
              color: var(--brand-navy);
              font-size: 1.35rem;
              margin-top: 1rem;
            "
          >
            2. Blokiranje javnog pristupa spremnicima podataka
          </h3>
          <p>
            Javno otvoreni S3 / Blob spremnici i dalje su jedan od najčešćih
            uzroka masovnog curenja podataka. Uvijek uključite globalno pravilo
            <em>Block Public Access</em> na razini cijelog računa.
          </p>

          <h3
            style="
              color: var(--brand-navy);
              font-size: 1.35rem;
              margin-top: 1rem;
            "
          >
            3. Enkripcija u mirovanju i u prijenosu
          </h3>
          <p>
            Aktivirajte automatsku enkripciju svih pohranjenih volumena podataka
            koristeći prilagođene ključeve (KMS), uz obavezno forsiranje HTTPS /
            TLS 1.3 protokola za svu mrežnu komunikaciju.
          </p>

          <h3
            style="
              color: var(--brand-navy);
              font-size: 1.35rem;
              margin-top: 1rem;
            "
          >
            4. Centralizirano bilježenje događaja (Audit Logging)
          </h3>
          <p>
            Zapisnici aktivnosti (npr. AWS CloudTrail ili Azure Monitor) moraju
            biti uključeni u svim regijama i zaštićeni od brisanja. Bez audit
            zapisa nemoguće je provesti forenziku nakon upada.
          </p>

          <h3
            style="
              color: var(--brand-navy);
              font-size: 1.35rem;
              margin-top: 1rem;
            "
          >
            5. Segmentacija mreže i virtualni vatrozidi
          </h3>
          <p>
            Razdvojite baze podataka, aplikacijske poslužitelje i javne servise
            u zasebne podmreže (Subnets). Pristup bazama podataka nikada ne
            smije biti moguć izravno s javnog interneta.
          </p>
        </div>
      </article>

      <!-- Kontakt forma prije podnožja -->
      <section class="form-section">
        <h2 class="section-title">
          Zatražite reviziju vaše infrastrukture u oblaku
        </h2>
        <p class="section-subtitle">
          Pregledat ćemo konfiguraciju vaših AWS, Azure ili GCP resursa i
          otkriti propuste.
        </p>
        <form class="contact-form">
          <div class="form-group">
            <label for="name">Ime i prezime:</label>
            <input type="text" id="name" required placeholder="Vaše ime" />
          </div>
          <div class="form-group">
            <label for="email">Poslovni email:</label>
            <input
              type="email"
              id="email"
              required
              placeholder="adresa@tvrtka.hr"
            />
          </div>
          <div class="form-group">
            <label for="message">Korištena cloud platforma i opseg:</label>
            <textarea
              id="message"
              rows="3"
              required
              placeholder="AWS, Azure, GCP ili privatni oblak..."
            ></textarea>
          </div>
          <button type="submit" class="btn">Zatraži reviziju</button>
        </form>
      </section>
    </main>

    <?php
      include "dijelovi/podnozje.php";
    ?>
