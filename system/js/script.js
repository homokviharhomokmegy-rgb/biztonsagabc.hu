/* system/js/script.js
 * Alap JavaScript fájl a biztonsagabc.hu számára
 * Hely: system/js/script.js
 * Létrehozva: 2026-08-03 by GitHub Copilot
 */

// Kis segédfüggvények és eseménykezelők
(function(){
  'use strict';

  // Jelzés a konzolban, hogy a script betöltődött
  if (typeof console !== 'undefined' && console.log) {
    console.log('biztonsagabc.hu — script.js betöltve');
  }

  // Accessibility: first Tab feltérképezése (keyboard fokusz stílusokhoz)
  var handleFirstTab = function(e){
    if (e.key === 'Tab'){
      document.documentElement.classList.add('user-is-tabbing');
      window.removeEventListener('keydown', handleFirstTab);
    }
  };
  window.addEventListener('keydown', handleFirstTab);

  // Egyszerű menü toggle (ha később lesz egy olyan elemünk)
  document.addEventListener('DOMContentLoaded', function(){
    var toggles = document.querySelectorAll('[data-toggle="menu"]');
    toggles.forEach(function(toggle){
      toggle.addEventListener('click', function(e){
        var targetSelector = toggle.getAttribute('data-target');
        if (!targetSelector) return;
        var target = document.querySelector(targetSelector);
        if (!target) return;
        target.classList.toggle('open');
        toggle.setAttribute('aria-expanded', target.classList.contains('open'));
      });
    });
  });

})();
