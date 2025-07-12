<?php
$cssTime = filemtime('../../view/global/footer/footer.css'); // ejemplo: '../Home/5.Video/video.css'
$jsTime = filemtime('');   // ejemplo: '../Home/5.Video/video.js'
?>
<link rel="stylesheet" href="../../../view/examples/premium/premium.css?v=<?= $cssTime ?>">
<body>

  <header>
    <h1>Sitio Web Premium</h1>
    <p>Diseño avanzado, contenido profesional, y presencia total</p>
  </header>

  <nav>
    <span>Inicio</span>
    <span>Tienda</span>
    <span>Galería</span>
    <span>Nosotros</span>
    <span>Testimonios</span>
    <span>FAQ</span>
    <span>Contacto</span>
  </nav>

  <section class="section">
    <h2>Tienda Destacada</h2>
    <div class="grid">
      <div class="card">Producto 1</div>
      <div class="card">Producto 2</div>
      <div class="card">Producto 3</div>
      <div class="card">Producto 4</div>
    </div>
  </section>

  <section class="section">
    <h2>Últimos del Blog</h2>
    <div class="grid">
      <div class="card">Blog 1</div>
      <div class="card">Blog 2</div>
      <div class="card">Blog 3</div>
    </div>
  </section>

  <section class="section">
    <h2>Galería Multimedia</h2>
    <div class="grid">
      <div class="card">Foto 1</div>
      <div class="card">Foto 2</div>
      <div class="card">Video 1</div>
      <div class="card">Evento 1</div>
    </div>
  </section>

  <section class="section about">
    <h2>Sobre Nosotros</h2>
    <p>Somos una empresa dedicada a ofrecer soluciones digitales y creativas para negocios de todo tipo. Nos enfocamos en calidad, innovación y resultados.</p>
    <p>Nuestra misión es llevar tu marca al siguiente nivel. Nuestra visión es ser referentes en experiencia digital.</p>
  </section>

  <section class="section">
    <h2>Nuestro Equipo</h2>
    <div class="grid">
      <div class="card">Líder Creativo</div>
      <div class="card">Desarrollador</div>
      <div class="card">Diseñador UX</div>
      <div class="card">Marketing</div>
    </div>
  </section>

  <section class="section">
    <h2>Testimonios</h2>
    <div class="grid">
      <div class="card">"Increíble experiencia con su equipo."</div>
      <div class="card">"¡Mi tienda ahora vende más!"</div>
      <div class="card">"Profesionales desde el primer contacto."</div>
    </div>
  </section>

  <section class="section faq">
    <h2>Preguntas Frecuentes</h2>
    <h3>¿Cómo contrato el servicio?</h3>
    <p>Contáctanos mediante el formulario o por WhatsApp para comenzar.</p>
    <h3>¿Qué incluye el plan premium?</h3>
    <p>Incluye diseño web completo, SEO básico, hosting, dominio, y soporte.</p>
  </section>

  <section class="section contacto">
    <h2>Contáctanos</h2>
    <form>
      <input type="text" placeholder="Nombre" />
      <input type="email" placeholder="Correo" />
      <textarea rows="4" placeholder="Mensaje..."></textarea>
      <input type="submit" value="Enviar" />
    </form>
  </section>

  <section class="section newsletter">
    <h2>Suscríbete al Boletín</h2>
    <form>
      <input type="email" placeholder="Correo electrónico" />
      <input type="submit" value="Suscribirme" />
    </form>
  </section>

  <footer>
    <p>&copy; 2025 Sitio Web Premium. Todos los derechos reservados.</p>
    <p>Síguenos: Facebook | Instagram | YouTube | LinkedIn</p>
  </footer>

</body>
<script src="?v=<?= $jsTime ?>" type="text/javascript"></script>
