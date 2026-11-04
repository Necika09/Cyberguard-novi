<?php
// TSD-4RT | IN | 04.11.2026.

$naslovStranice = "Zaprimljeni upiti";
$trenutnaStranica = "upiti";

include "dijelovi/zaglavlje.php";

$putanja = __DIR__ . "/podaci/upiti.json";
$upiti = file_exists($putanja) ? (json_decode(file_get_contents($putanja), true) ?? []) : [];

$trazi = trim($_GET["trazi"] ?? "");

$kronoloskiUpiti = array_reverse($upiti);

$ukupnoUpita = count($kronoloskiUpiti);
$prikazanoUpita = 0;
?>

    <main>
      <div class="upiti-header">
        <div>
          <h1 class="section-title">Zaprimljeni upiti klijenata</h1>
          <p class="section-subtitle">
            Evidencija i status sigurnosnih upita zaprimljenih putem obrasca
          </p>
        </div>
        <a href="kontakt.php" class="btn btn-secondary">← Natrag na kontakt</a>
      </div>

      <section class="card filter-card">
        <form method="get" action="upiti.php" class="search-form">
          <input
            type="text"
            name="trazi"
            class="search-input"
            placeholder="Pretraži po imenu, e-pošti, usluzi ili sadržaju..."
            value="<?php echo htmlspecialchars($trazi); ?>"
          />
          <button type="submit" class="btn">Traži</button>
          <?php if ($trazi !== ""): ?>
            <a href="upiti.php" class="btn btn-outline">Poništi filter</a>
          <?php endif; ?>
        </form>
      </section>

      <section class="card upiti-sekcija">
        <?php if ($ukupnoUpita === 0): ?>
          <p class="nema-upita">Trenutno nema zaprimljenih upita u sustavu.</p>
        <?php else: ?>
          <div class="tabela-responzivno">
            <table class="tabela-upiti">
              <thead>
                <tr>
                  <th style="width: 5%;">ID</th>
                  <th style="width: 14%;">Datum i vrijeme</th>
                  <th style="width: 16%;">Klijent</th>
                  <th style="width: 18%;">E-pošta</th>
                  <th style="width: 17%;">Usluga</th>
                  <th style="width: 22%;">Poruka</th>
                  <th style="width: 8%; text-align: center;">Radnja</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ($kronoloskiUpiti as $u):
                  if ($trazi !== "") {
                      $uImenu = mb_stripos($u["ime"] ?? "", $trazi) !== false;
                      $uEmailu = mb_stripos($u["email"] ?? "", $trazi) !== false;
                      $uUsluzi = mb_stripos($u["usluga"] ?? "", $trazi) !== false;
                      $uPoruci = mb_stripos($u["poruka"] ?? "", $trazi) !== false;

                      if (!$uImenu && !$uEmailu && !$uUsluzi && !$uPoruci) {
                          continue;
                      }
                  }

                  $prikazanoUpita++;
                  $jeAktivan = !empty($u["aktivan"]);
                  $klasaRetka = $jeAktivan ? "table-success" : "";
                ?>
                  <tr class="<?php echo $klasaRetka; ?>">
                    <td><strong>#<?php echo htmlspecialchars((string)($u["id"] ?? "")); ?></strong></td>
                    <td><small class="vrijeme-tekst"><?php echo htmlspecialchars($u["vrijeme"] ?? ""); ?></small></td>
                    <td>
                      <strong><?php echo htmlspecialchars($u["ime"] ?? ""); ?></strong>
                      <?php if ($jeAktivan): ?>
                        <span class="badge-aktivan">Aktivan</span>
                      <?php endif; ?>
                    </td>
                    <td>
                      <a href="mailto:<?php echo htmlspecialchars($u["email"] ?? ""); ?>" class="email-link">
                        <?php echo htmlspecialchars($u["email"] ?? ""); ?>
                      </a>
                    </td>
                    <td>
                      <span class="usluga-oznaka">
                        <?php echo htmlspecialchars($u["usluga"] ?? ""); ?>
                      </span>
                    </td>
                    <td>
                      <div class="poruka-skracena">
                        <?php echo nl2br(htmlspecialchars($u["poruka"] ?? "")); ?>
                      </div>
                    </td>
                    <td style="text-align: center;">
                      <form action="brisanje.php" method="post" onsubmit="return confirm('Sigurno želite trajno obrisati upit #<?php echo (int)($u['id'] ?? 0); ?>?');">
                        <input type="hidden" name="id" value="<?php echo htmlspecialchars((string)($u["id"] ?? "")); ?>">
                        <button type="submit" class="btn-obrisi" title="Obriši upit">Obriši</button>
                      </form>
                    </td>
                  </tr>
                <?php endforeach; ?>

                <?php if ($prikazanoUpita === 0): ?>
                  <tr>
                    <td colspan="7" class="text-center" style="padding: 2rem; color: #64748b;">
                      Niti jedan upit ne odgovara traženom pojmu „<strong><?php echo htmlspecialchars($trazi); ?></strong>”.
                    </td>
                  </tr>
                <?php endif; ?>
              </tbody>
            </table>
          </div>

          <div class="brojac-upita">
            Prikazano <strong><?php echo $prikazanoUpita; ?></strong> od ukupno <strong><?php echo $ukupnoUpita; ?></strong> upita.
          </div>
        <?php endif; ?>
      </section>
    </main>

    <?php
      include "dijelovi/podnozje.php";
    ?>
