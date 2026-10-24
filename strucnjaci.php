<?php
// TSD-4RT | IN | 24.10.2026.
?>
    <?php
      $naslovStranice = "Stručnjaci";
      $trenutnaStranica = "strucnjaci";

      include "dijelovi/zaglavlje.php";
    ?>

    <main>
      <h1 class="section-title">Zaposleni stručnjaci</h1>
      <p class="section-subtitle">
        Upoznajte inženjere i etičke hakere koji brinu o vašim podacima
      </p>

      <div class="grid-container">
        <div class="card">
          <img
            src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=600&q=80"
            alt="Portret Marka Kovačevića, glavnog etičkog hakera tvrtke CyberGuard"
            class="expert-img"
          />
          <h3>Marko Kovačević, mag. ing. comp.</h3>
          <p><strong>Uloga:</strong> Glavni etički haker (Lead Pentester)</p>
          <p>
            Specijaliziran za napredna probijanja web aplikacija i otkrivanje
            ranjivosti nultog dana (Zero-Day). Posjeduje certifikate OSCP i
            CRTP.
          </p>
        </div>
        <div class="card">
          <img
            src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=600&q=80"
            alt="Portret Ane Babić, voditeljice SOC centra tvrtke CyberGuard"
            class="expert-img"
          />
          <h3>Ana Babić, dipl. ing.</h3>
          <p>
            <strong>Uloga:</strong> Voditeljica SOC centra (Security Operations
            Center)
          </p>
          <p>
            Ima preko 8 godina iskustva u analizi zlonamjernog koda (malware
            analysis) i forenzici sigurnosnih incidenata na enterprise mrežama.
          </p>
        </div>
        <div class="card">
          <img
            src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=600&q=80"
            alt="Portret Luke Novaka, arhitekta mrežne sigurnosti tvrtke CyberGuard"
            class="expert-img"
          />
          <h3>Luka Novak</h3>
          <p><strong>Uloga:</strong> Arhitekt mrežne sigurnosti</p>
          <p>
            Stručnjak za vatrozide nove generacije (NGFW), segmentaciju
            infrastrukture i implementaciju Zero-Trust arhitekture u
            organizacijama.
          </p>
        </div>
      </div>

      <section class="form-section">
        <h2 class="section-title">Savjetovanje s inženjerom</h2>
        <p class="section-subtitle">
          Postavite izravno pitanje našem stručnom timu.
        </p>
        <form class="contact-form">
          <div class="form-group">
            <label for="name">Vaše ime:</label>
            <input type="text" id="name" required />
          </div>
          <div class="form-group">
            <label for="email">Vaš email:</label>
            <input type="email" id="email" required />
          </div>
          <div class="form-group">
            <label for="message">Pitanje za stručnjaka:</label>
            <textarea id="message" rows="4" required></textarea>
          </div>
          <button type="submit" class="btn">Zatraži savjet</button>
        </form>
      </section>
    </main>

    <?php
      include "dijelovi/podnozje.php";
    ?>
