<?php
$cssTime = filemtime('../../view/global/nav/nav.css'); // ejemplo: '../Home/5.Video/video.css'
$jsTime = filemtime('../../view/global/nav/menu.js');   // ejemplo: '../Home/5.Video/video.js'
?>
<link rel="stylesheet" href="../../../view/examples/portafolio_Web/portafolio_web.css?v=<?= $cssTime ?>">
<header>
    <h1>Mi Portafolio Web</h1>
</header>

  <nav>
    <span>Inicio</span>
    <span>Proyectos</span>
    <span>Sobre mí</span>
    <span>Contacto</span>
  </nav>

  <section class="section banner">
    <h2>¡Hola! Soy Diseñador Web</h2>
    <p>Bienvenido a mi portafolio. Aquí puedes ver mis proyectos, habilidades y cómo contactarme.</p>
  </section>

  <section class="section">
    <h2>Proyectos</h2>
    <div class="proyectos">
      <div class="proyecto-box">Proyecto 1</div>
      <div class="proyecto-box">Proyecto 2</div>
      <div class="proyecto-box">Proyecto 3</div>
      <div class="proyecto-box">Proyecto 4</div>
    </div>
  </section>

  <section class="section">
    <h2>Habilidades</h2>
    <div class="habilidades">
      <div class="habilidad-box">HTML</div>
      <div class="habilidad-box">CSS</div>
      <div class="habilidad-box">JavaScript</div>
      <div class="habilidad-box">Photoshop</div>
    </div>
  </section>

  <section class="section sobre-mi">
    <h2>Sobre mí</h2>
    <p>Soy un diseñador web apasionado por crear sitios modernos, funcionales y atractivos. Tengo experiencia en diseño responsivo, branding y desarrollo frontend.</p>
  </section>

  <section class="section contacto">
    <h2>Contacto</h2>
    <form>
      <input type="text" placeholder="Nombre">
      <input type="email" placeholder="Correo electrónico">
      <textarea rows="4" placeholder="Tu mensaje..."></textarea>
      <input type="submit" value="Enviar">
    </form>
  </section>

  <footer>
    &copy; 2025 Mi Portafolio. Todos los derechos reservados.
  </footer>

</body>
 <script src="../../?v=<?= $jsTime ?>" type="text/javascript"></script>
