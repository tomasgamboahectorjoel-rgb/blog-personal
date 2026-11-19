/* Menú móvil, tema, escritura automática y red neuronal de fondo. */
(function () {
  "use strict";

  var sinMovimiento = window.matchMedia && window.matchMedia("(prefers-reduced-motion: reduce)").matches;

  /* ---------- Menú móvil ---------- */
  var botonMenu = document.querySelector(".boton-menu");
  var menu = document.getElementById("menu-principal");
  if (botonMenu && menu) {
    botonMenu.addEventListener("click", function () {
      var abierto = menu.classList.toggle("abierto");
      botonMenu.setAttribute("aria-expanded", abierto ? "true" : "false");
    });
  }

  /* ---------- Tema claro u oscuro ---------- */
  var botonTema = document.querySelector(".boton-tema");
  if (botonTema) {
    botonTema.addEventListener("click", function () {
      var raiz = document.documentElement;
      var nuevo = raiz.getAttribute("data-tema") === "claro" ? "oscuro" : "claro";
      raiz.setAttribute("data-tema", nuevo);
      try { localStorage.setItem("tema", nuevo); } catch (err) {}
      leerColor();
    });
  }

  /* ---------- Frases que se escriben solas ---------- */
  var destino = document.querySelector("[data-escribir]");
  if (destino && !sinMovimiento) {
    var frases = [];
    try { frases = JSON.parse(destino.getAttribute("data-escribir")); } catch (err) {}
    if (frases.length > 1) {
      var f = 0, i = 0, borrando = false;
      var paso = function () {
        var frase = frases[f];
        if (!borrando) {
          i++;
          destino.textContent = frase.slice(0, i);
          if (i === frase.length) { borrando = true; return setTimeout(paso, 1700); }
          return setTimeout(paso, 55);
        }
        i--;
        destino.textContent = frase.slice(0, i);
        if (i === 0) { borrando = false; f = (f + 1) % frases.length; return setTimeout(paso, 350); }
        setTimeout(paso, 28);
      };
      destino.textContent = "";
      setTimeout(paso, 400);
    }
  }

  /* ---------- Red neuronal de fondo ---------- */
  var lienzo = document.getElementById("red-neuronal");
  var color = "34, 211, 238";

  function leerColor() {
    var v = getComputedStyle(document.documentElement).getPropertyValue("--red-rgb").trim();
    if (v) { color = v; }
    if (lienzo && sinMovimiento) { dibujar(); }
  }

  var ctx, ancho, alto, nodos = [], raton = { x: -1000, y: -1000 }, corriendo = false;

  function iniciar() {
    var dpr = Math.min(window.devicePixelRatio || 1, 2);
    ancho = lienzo.clientWidth;
    alto = lienzo.clientHeight;
    lienzo.width = ancho * dpr;
    lienzo.height = alto * dpr;
    ctx.setTransform(dpr, 0, 0, dpr, 0, 0);
    var cantidad = Math.round(Math.min(85, (ancho * alto) / 17000));
    nodos = [];
    for (var n = 0; n < cantidad; n++) {
      nodos.push({
        x: Math.random() * ancho,
        y: Math.random() * alto,
        vx: (Math.random() - 0.5) * 0.35,
        vy: (Math.random() - 0.5) * 0.35,
        r: 1 + Math.random() * 1.6
      });
    }
  }

  function dibujar() {
    ctx.clearRect(0, 0, ancho, alto);
    var distMax = 135, a, b, dx, dy, d;
    for (a = 0; a < nodos.length; a++) {
      var p = nodos[a];
      if (!sinMovimiento) {
        p.x += p.vx; p.y += p.vy;
        if (p.x < 0 || p.x > ancho) { p.vx *= -1; }
        if (p.y < 0 || p.y > alto) { p.vy *= -1; }
      }
      for (b = a + 1; b < nodos.length; b++) {
        var q = nodos[b];
        dx = p.x - q.x; dy = p.y - q.y;
        d = Math.sqrt(dx * dx + dy * dy);
        if (d < distMax) {
          ctx.strokeStyle = "rgba(" + color + "," + (0.22 * (1 - d / distMax)).toFixed(3) + ")";
          ctx.lineWidth = 1;
          ctx.beginPath(); ctx.moveTo(p.x, p.y); ctx.lineTo(q.x, q.y); ctx.stroke();
        }
      }
      dx = p.x - raton.x; dy = p.y - raton.y;
      d = Math.sqrt(dx * dx + dy * dy);
      if (d < 170) {
        ctx.strokeStyle = "rgba(" + color + "," + (0.5 * (1 - d / 170)).toFixed(3) + ")";
        ctx.beginPath(); ctx.moveTo(p.x, p.y); ctx.lineTo(raton.x, raton.y); ctx.stroke();
      }
      ctx.fillStyle = "rgba(" + color + ",0.75)";
      ctx.beginPath(); ctx.arc(p.x, p.y, p.r, 0, Math.PI * 2); ctx.fill();
    }
  }

  function bucle() {
    if (!corriendo) { return; }
    dibujar();
    requestAnimationFrame(bucle);
  }

  if (lienzo && lienzo.getContext) {
    ctx = lienzo.getContext("2d");
    leerColor();
    iniciar();
    window.addEventListener("resize", function () { iniciar(); if (sinMovimiento) { dibujar(); } });
    if (sinMovimiento) {
      dibujar();
    } else {
      window.addEventListener("mousemove", function (ev) { raton.x = ev.clientX; raton.y = ev.clientY; });
      window.addEventListener("mouseleave", function () { raton.x = -1000; raton.y = -1000; });
      document.addEventListener("visibilitychange", function () {
        corriendo = !document.hidden;
        if (corriendo) { bucle(); }
      });
      corriendo = true;
      bucle();
    }
  }
})();
