<?php
$cssTime = filemtime('../../view/global/footer/footer.css'); // ejemplo: '../Home/5.Video/video.css'
$jsTime = filemtime('');   // ejemplo: '../Home/5.Video/video.js'
?>
<link rel="stylesheet" href="../../../view/examples/basico_informativo/basico_informativo.css?v=<?= $cssTime ?>">
</head>
<body>

  <header>
    <h1>Aquí encontraras lo esencial para una página web</h1>
    <a href="../../../view/home/index.php" style="color: white; position: absolute; left: 10px; top:50px;">
  Volver
</a>

  </header>
  <nav>
    <span>Inicio</span>
    <span>Productos</span>
    <span>Ubicación</span>
    <span>Acerca de nosotros</span>
  </nav>

  <section class="section slider">
    <h2>Slider: Aqui se colocan imagenes, videos, promociones o servicios que se quieran destacar</h2>
  </section>

  <section class="section">
    <h2>Productos</h2>
    <div class="productos">
      <div class="producto-box">Productos</div>
      <div class="producto-box">Servicios</div>
      <div class="producto-box">Información</div>
      <div class="producto-box">O articulos</div>
    </div>
  </section>

  <section class="section">
    <h2>Ubicación</h2>
    <div class="ubicacion">Mapa o croquis para que tus clientes lleguen facilmente a tu negocio</div>
  </section>

  <!-- <section class="section contacto">
    <h2>Contáctanos</h2>
    <form>
      <input type="text" placeholder="Nombre">
      <input type="email" placeholder="Correo electrónico">
      <textarea rows="4" placeholder="Escribe tu mensaje..."></textarea>
      <input type="submit" value="Enviar">
    </form>
  </section> -->

  <section class="section acerca">
    <h2>Acerca de Nosotros</h2>
    <p>
      Breve descripción con imagenes o solo texto de como es tu actividad.
    </p>
  </section>

  <footer>
    &copy; 2025 Mi Empresa. Todos los derechos reservados.
  </footer>

</body>
<script src="?v=<?= $jsTime ?>" type="text/javascript"></script>
