<?php
$cssTime = filemtime('../../view/global/footer/footer.css'); // ejemplo: '../Home/5.Video/video.css'
$jsTime = filemtime('');   // ejemplo: '../Home/5.Video/video.js'
?>
<link rel="stylesheet" href="../../../view/examples/plan_profesional/plan_profesional.css?v=<?= $cssTime ?>">
<body>

  <header>
    <h1>Mi Sitio Profesional</h1>
    <p>Diseñado para mostrar todo lo que ofrece tu marca o empresa</p>
  </header>

  <nav>
    <span>Inicio</span>
    <span>Servicios</span>
    <span>Galería</span>
    <span>Acerca de nosotros</span>
    <span>Contacto</span>
  </nav>

  <section class="section">
    <h2>Servicios</h2>
    <div class="servicios">
      <div class="servicio">Diseño Web</div>
      <div class="servicio">Branding</div>
      <div class="servicio">Marketing Digital</div>
      <div class="servicio">SEO</div>
    </div>
  </section>

  <section class="section">
    <h2>Galería de Proyectos</h2>
    <div class="galeria">
      <img src="https://via.placeholder.com/250x180" alt="gal1">
      <img src="https://via.placeholder.com/250x180" alt="gal2">
      <img src="https://via.placeholder.com/250x180" alt="gal3">
      <img src="https://via.placeholder.com/250x180" alt="gal4">
    </div>
  </section>

  <section class="section">
    <h2>Acerca de Nosotros</h2>
    <div class="sobre-nosotros">
      <p>Somos un equipo apasionado por crear experiencias digitales efectivas y visualmente atractivas. Con años de experiencia en diseño, desarrollo y marketing, ayudamos a empresas a destacar en el mundo digital.</p>
      <p>Nuestra filosofía es crear con propósito, conectar con el usuario y entregar resultados tangibles.</p>
    </div>
  </section>

  <section class="section">
    <h2>Nuestro Equipo</h2>
    <div class="equipo">
      <img src="https://via.placeholder.com/250x180" alt="persona1">
      <img src="https://via.placeholder.com/250x180" alt="persona2">
      <img src="https://via.placeholder.com/250x180" alt="persona3">
    </div>
  </section>

  <section class="section">
    <h2>Testimonios</h2>
    <div class="testimonios">
      <div class="testimonio">“Excelente trabajo y atención.”</div>
      <div class="testimonio">“Mi página web aumentó las ventas.”</div>
      <div class="testimonio">“Muy profesionales y creativos.”</div>
    </div>
  </section>

  <section class="section contacto">
    <h2>Contáctanos</h2>
    <form>
      <input type="text" placeholder="Nombre completo" />
      <input type="email" placeholder="Correo electrónico" />
      <textarea rows="4" placeholder="Tu mensaje..."></textarea>
      <input type="submit" value="Enviar" />
    </form>
  </section>

  <footer>
    &copy; 2025 Sitio Profesional. Todos los derechos reservados.
  </footer>

</body>
<script src="?v=<?= $jsTime ?>" type="text/javascript"></script>
