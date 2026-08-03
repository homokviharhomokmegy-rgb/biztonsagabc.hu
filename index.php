<?php
declare(strict_types=1);
/**
 * index.php - alap kezdőlap a biztonsagabc.hu számára
 * Létrehozva: 2026-08-03 by GitHub Copilot
 */

// Alap hibakezelés (éles környezetben érdemes kikapcsolni a kijelzést és naplózni)
ini_set('display_errors', '0');
error_reporting(E_ALL);

// Alap HTTP fejléc
header('Content-Type: text/html; charset=utf-8');

// Egyszerű router: ha később bővítjük, ide jöhetnek útvonalak
// Példa: if (isset($_GET['page']) && $_GET['page'] === 'about') { ... }

?><!doctype html>
<html lang="hu">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Biztonság ABC</title>
  <!-- Stíluslap bekapcsolva -->
  <link rel="stylesheet" href="system/css/style.css">
  <style>
    /* Kis fallback stílusok ha a CSS nem töltődik be */
    body { font-family: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial; line-height:1.6; padding:2rem; }
    header { margin-bottom:1.5rem }
    footer { margin-top:2rem; color:#666; font-size:0.9rem }
  </style>
</head>
<body>
  <header class="site-header container">
    <h1>Üdvözöl a biztonsagabc.hu!</h1>
  </header>

  <main class="site-main container">
    <p>Ez egy alap index.php fájl. Szerkeszd és bővítsd a projekt igényei szerint.</p>
    <p>PHP verzió: <?php echo PHP_VERSION; ?></p>
  </main>

  <footer class="site-footer container">
    <small>&copy; <?php echo date('Y'); ?> biztonsagabc.hu</small>
  </footer>
</body>
</html>
