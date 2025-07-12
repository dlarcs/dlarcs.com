<?php
$cssTime = filemtime('../../view/global/nav/nav.css'); // ejemplo: '../Home/5.Video/video.css'
$jsTime = filemtime('../../view/global/nav/menu.js');   // ejemplo: '../Home/5.Video/video.js'
?>
<link rel="stylesheet" href="../../../view/examples/catalogo/catalogo.css?v=<?= $cssTime ?>">
<body>

  <header>
    <h1>Catálogo de Productos</h1>
  </header>

  <nav>
    <span>Inicio</span>
    <span>Categorías</span>
    <span>Ofertas</span>
    <span>Contacto</span>
  </nav>

  <section class="section intro">
    <h2>Explora nuestra colección</h2>
    <p>Descubre los productos más populares de nuestra tienda. ¡Calidad, estilo y buen precio!</p>
  </section>

  <section class="section">
    <h2>Productos</h2>
    <div class="catalogo">
      <div class="producto">
        <img src="https://via.placeholder.com/200x150" alt="Producto 1" />
        <h3>Producto 1</h3>
        <p>Descripción breve del producto.</p>
        <span>$45.000</span>
      </div>
      <div class="producto">
        <img src="https://via.placeholder.com/200x150" alt="Producto 2" />
        <h3>Producto 2</h3>
        <p>Descripción breve del producto.</p>
        <span>$39.900</span>
      </div>
      <div class="producto">
        <img src="https://via.placeholder.com/200x150" alt="Producto 3" />
        <h3>Producto 3</h3>
        <p>Descripción breve del producto.</p>
        <span>$55.000</span>
      </div>
      <div class="producto">
        <img src="https://via.placeholder.com/200x150" alt="Producto 4" />
        <h3>Producto 4</h3>
        <p>Descripción breve del producto.</p>
        <span>$25.000</span>
      </div>
      <div class="producto">
        <img src="https://via.placeholder.com/200x150" alt="Producto 5" />
        <h3>Producto 5</h3>
        <p>Descripción breve del producto.</p>
        <span>$45.000</span>
      </div>
      <div class="producto">
        <img src="https://via.placeholder.com/200x150" alt="Producto 6" />
        <h3>Producto 6</h3>
        <p>Descripción breve del producto.</p>
        <span>$39.900</span>
      </div>
      <div class="producto">
        <img src="https://via.placeholder.com/200x150" alt="Producto 7" />
        <h3>Producto 7</h3>
        <p>Descripción breve del producto.</p>
        <span>$55.000</span>
      </div>
      <div class="producto">
        <img src="https://via.placeholder.com/200x150" alt="Producto 8" />
        <h3>Producto 8</h3>
        <p>Descripción breve del producto.</p>
        <span>$25.000</span>
      </div>
      <div class="producto">
        <img src="https://via.placeholder.com/200x150" alt="Producto 9" />
        <h3>Producto 9</h3>
        <p>Descripción breve del producto.</p>
        <span>$45.000</span>
      </div>
      <div class="producto">
        <img src="https://via.placeholder.com/200x150" alt="Producto 10" />
        <h3>Producto 10</h3>
        <p>Descripción breve del producto.</p>
        <span>$39.900</span>
      </div>
      <div class="producto">
        <img src="https://via.placeholder.com/200x150" alt="Producto 11" />
        <h3>Producto 11</h3>
        <p>Descripción breve del producto.</p>
        <span>$55.000</span>
      </div>
      <div class="producto">
        <img src="https://via.placeholder.com/200x150" alt="Producto 12" />
        <h3>Producto 12</h3>
        <p>Descripción breve del producto.</p>
        <span>$25.000</span>
      </div>
    </div>
  </section>

  <section class="section contacto">
    <h2>Contacto</h2>
    <form>
      <input type="text" placeholder="Nombre" />
      <input type="email" placeholder="Correo electrónico" />
      <textarea rows="4" placeholder="Tu mensaje..."></textarea>
      <input type="submit" value="Enviar" />
    </form>
  </section>

  <footer>
    &copy; 2025 Catálogo Digital. Todos los derechos reservados.
  </footer>

</body>
 <script src="../../?v=<?= $jsTime ?>" type="text/javascript"></script>
