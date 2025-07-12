<?php
$cssTime = filemtime('../../view/global/nav/nav.css'); // ejemplo: '../Home/5.Video/video.css'
$jsTime = filemtime('../../view/global/nav/menu.js');   // ejemplo: '../Home/5.Video/video.js'
?>
<link rel="stylesheet" href="../../../view/examples/tienda/tienda.css?v=<?= $cssTime ?>">
<body>

  <header>
    <h1>Tienda Online</h1>
  </header>

  <nav>
    <span>Inicio</span>
    <span>Productos</span>
    <span>Categorías</span>
    <span>Contacto</span>
  </nav>

  <section class="section banner">
    <h2>Bienvenido a nuestra tienda</h2>
    <p>Explora nuestros productos y descubre grandes ofertas cada semana.</p>
  </section>

  <section class="section">
    <h2>Nuestros Productos</h2>

    <div class="categorias">👚 Ropa</div>
    <div class="productos">
      <div class="item">
        <img src="https://via.placeholder.com/220x160" alt="Producto 1" />
        <h3>Camisa Casual</h3>
        <p>Fresca, cómoda y moderna.</p>
        <span>$49.900</span>
        <button>Comprar</button>
      </div>
      <div class="item">
        <img src="https://via.placeholder.com/220x160" alt="Producto 2" />
        <h3>Chaqueta Jeans</h3>
        <p>Estilo clásico para toda ocasión.</p>
        <span>$89.000</span>
        <button>Comprar</button>
      </div>
    </div>

    <div class="categorias">👜 Accesorios</div>
    <div class="productos">
      <div class="item">
        <img src="https://via.placeholder.com/220x160" alt="Producto 3" />
        <h3>Bolso de mano</h3>
        <p>Elegancia y utilidad.</p>
        <span>$59.500</span>
        <button>Comprar</button>
      </div>
      <div class="item">
        <img src="https://via.placeholder.com/220x160" alt="Producto 4" />
        <h3>Gorra deportiva</h3>
        <p>Protección y estilo en uno.</p>
        <span>$25.000</span>
        <button>Comprar</button>
      </div>
    </div>

    <div class="categorias">👟 Calzado</div>
    <div class="productos">
      <div class="item">
        <img src="https://via.placeholder.com/220x160" alt="Producto 5" />
        <h3>Zapatillas Urbanas</h3>
        <p>Comodidad y diseño moderno.</p>
        <span>$115.000</span>
        <button>Comprar</button>
      </div>
      <div class="item">
        <img src="https://via.placeholder.com/220x160" alt="Producto 6" />
        <h3>Botines de cuero</h3>
        <p>Perfectos para clima frío.</p>
        <span>$140.000</span>
        <button>Comprar</button>
      </div>
    </div>
  </section>

  <section class="section contacto">
    <h2>Contacto</h2>
    <form>
      <input type="text" placeholder="Nombre completo" />
      <input type="email" placeholder="Correo electrónico" />
      <textarea rows="4" placeholder="Escríbenos un mensaje..."></textarea>
      <input type="submit" value="Enviar" />
    </form>
  </section>

  <footer>
    &copy; 2025 Tienda Online. Todos los derechos reservados.
  </footer>

</body> <script src="../../?v=<?= $jsTime ?>" type="text/javascript"></script>
