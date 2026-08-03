<?php
declare(strict_types=1);
/**
 * index.php - alap kezdőlap a biztonsagabc.hu számára
 * Létrehozva: 2026-08-03 by GitHub Copilot
 * Módosítva: Bootstrap navbar és alap layout hozzáadva
 */

// Alap hibakezelés (éles környezetben érdemes kikapcsolni a kijelzést és naplózni)
ini_set('display_errors', '0');
error_reporting(E_ALL);

// Alap HTTP fejléc
header('Content-Type: text/html; charset=utf-8');

?><!doctype html>
<html lang="hu">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Biztonság ABC</title>

  <!-- Bootstrap CSS (CDN) -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Saját stíluslap -->
  <link rel="stylesheet" href="system/css/style.css">
</head>
<body>
  <!-- Bootstrap navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
      <a class="navbar-brand" href="#">Biztonság ABC</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Navigáció kapcsolása">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="mainNavbar">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Kezdőlap</a></li>
          <li class="nav-item"><a class="nav-link" href="#about">Rólunk</a></li>
          <li class="nav-item"><a class="nav-link" href="#services">Szolgáltatások</a></li>
          <li class="nav-item"><a class="nav-link" href="#contact">Kapcsolat</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero / jumbotron -->
  <header class="py-5 bg-light border-bottom">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-8">
          <h1 class="display-5 fw-bold">Üdvözöl a biztonsagabc.hu</h1>
          <p class="lead text-muted">Egyszerű, áttekinthető tananyagok és tippek a biztonság alapjairól — kezdőknek és haladóknak egyaránt.</p>
          <p class="mt-4"><a class="btn btn-primary btn-lg" href="#services">Tudj meg többet</a></p>
        </div>
        <div class="col-md-4 text-md-end mt-3 mt-md-0">
          <!-- Itt lehet egy logó vagy kép -->
          <img src="" alt="" class="img-fluid" style="max-height:120px;" aria-hidden="true">
        </div>
      </div>
    </div>
  </header>

  <!-- Fő tartalom -->
  <main class="py-5">
    <div class="container">
      <div class="row g-4">
        <div class="col-lg-8">
          <section id="about" class="mb-4">
            <h2>Rólunk</h2>
            <p class="text-muted">Ez az oldal a biztonság alapjait foglalja össze érthető formában. Friss cikkekkel, útmutatókkal és gyakorlati tippekkel segítünk biztonságosabbá tenni mindennapi digitális életét.</p>
          </section>

          <section id="services" class="mb-4">
            <h2>Szolgáltatások</h2>
            <div class="row row-cols-1 row-cols-md-2 g-3">
              <div class="col">
                <div class="card h-100">
                  <div class="card-body">
                    <h5 class="card-title">Cikkek és útmutatók</h5>
                    <p class="card-text">Részletes, könnyen követhető leírások a legfontosabb biztonsági témákban.</p>
                    <a href="#" class="btn btn-outline-primary">Olvass tovább</a>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100">
                  <div class="card-body">
                    <h5 class="card-title">Gyakorlati tippek</h5>
                    <p class="card-text">Egyszerű lépések a fiókok és eszközök védelméhez.</p>
                    <a href="#" class="btn btn-outline-primary">Tudj meg többet</a>
                  </div>
                </div>
              </div>
            </div>
          </section>

        </div>

        <aside class="col-lg-4">
          <div class="card mb-3">
            <div class="card-body">
              <h5 class="card-title">Gyors linkek</h5>
              <ul class="list-unstyled mb-0">
                <li><a href="#">Kezdőlépések</a></li>
                <li><a href="#">Jelszókezelés</a></li>
                <li><a href="#">Adatvédelem</a></li>
              </ul>
            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Kapcsolat</h5>
              <p class="card-text text-muted">Kérdésed van? Írj nekünk az info@biztonsagabc.hu címre.</p>
            </div>
          </div>
        </aside>
      </div>
    </div>
  </main>

  <!-- Lábléc -->
  <footer class="py-4 bg-dark text-light">
    <div class="container d-flex justify-content-between align-items-center">
      <small>&copy; <?php echo date('Y'); ?> biztonsagabc.hu</small>
      <nav>
        <a href="#" class="text-decoration-none text-light me-3">Adatvédelem</a>
        <a href="#" class="text-decoration-none text-light">Impresszum</a>
      </nav>
    </div>
  </footer>

  <!-- Bootstrap JS (bundle includes Popper) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" defer></script>
  <!-- Saját JavaScript -->
  <script src="system/js/script.js" defer></script>
</body>
</html>
