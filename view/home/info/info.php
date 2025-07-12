<?php
$cssTime = filemtime('../../view/home/info/info.css'); // ejemplo: '../Home/5.Video/video.css'
$jsTime = filemtime('');   // ejemplo: '../Home/5.Video/video.js'
?>
<link rel="stylesheet" href="../../view/home/info/info.css?v=<?= $cssTime ?>">
<section class="seccion_info">
  <div class="container">
    <h1>Informate</h1>
    <div class="box">

      <div class="box_info">
        <img src="../../view/home/info/img/monitor.png" alt="">
        <h3>Diseño Web Profesional</h3>
        <p>Es la creación de páginas web funcionales, atractivas y adaptadas a
          todos los dispositivos. Representa tu negocio, emprendimiento o marca en
          internet, transmitiendo confianza, rapidez y seguridad.</p>
      </div>
      <div class="box_info">
        <img src="../../view/home/info/img/mapa-2.png" alt="">
        <h3>Negocios Locales, Nacionales e Internacionales</h3>
        <p>Son páginas web adaptadas al alcance de tu negocio, ya sea local, nacional o global.
            Te ayudan a mostrar tus productos, atraer clientes y facilitar el contacto o la compra desde cualquier lugar.
            Además, pueden crearse en español, inglés y francés para ampliar tu alcance en distintos idiomas.</p>
      </div>
      <div class="box_info">
        <img src="../../view/home/info/img/carrito.png" alt="">
        <h3>Tiendas Online (E-Commerce)</h3>
        <p> Son páginas web donde puedes vender productos o infoicios por internet, de forma automática y segura.
            Permiten a los clientes ver, elegir y pagar desde cualquier lugar.
            Son ideales para hacer crecer tu negocio sin depender de un local físico.</p>
      </div>
      <div class="box_info">
        <img src="../../view/home/info/img/celular.png" alt="">
        <h3>Optimización Multidispositivo</h3>
        <p>  Tu página web se adapta automáticamente a cualquier pantalla,
             ya sea celular, tablet o computador.
             Garantiza una buena experiencia para todos los usuarios, sin importar el dispositivo que usen.
             Es clave para atraer más visitantes y mejorar tu presencia online.</p>
      </div>
      <div class="box_info">
        <img src="../../view/home/info/img/herramienta.png" alt="">
        <h3> Mantenimiento y Soporte Técnico</h3>
        <p> Es el infoicio que garantiza que tu página web funcione correctamente en todo momento.
            Incluye actualizaciones, solución de errores y mejoras de seguridad.
            Te ayuda a mantener tu sitio rápido, seguro y sin fallas para tus visitantes por 3 meses</p>
      </div>
    </div>

      <h1>Idiomas</h1>
      <div class="box ">
          <div class="box_info">
            <h3>Español (Latino)</h3>
            <p>Nuestras páginas web se desarrollan originalmente en español,
              pensando en conectar de forma clara y efectiva con el público.</p>
          </div>
          <div class="box_info">
            <h3>Inglés Británico e inglés Americano)</h3>
            <p>Inglés británico o inglés americano, según el público al que quieras llegar.
                Adaptamos el idioma y estilo para que tu mensaje sea claro y profesional.
                </p>
          </div>
          <div class="box_info">
            <h3>Francés (Metropolitano y Canadiense)</h3>
            <p>Francés metropolitano o francés canadiense, según tu mercado objetivo.
                Adaptamos el idioma y las expresiones para lograr una comunicación auténtica.
                </p>
          </div>
        </div>
  </div>

  <a href="https://wa.me/573138846378" target="_blank"><button class="boton rojo" type="button " name="button ">Cotiza, haz click aquí</buttom></a>
    </section>
<script src="../../view/home/info/info.js?v=<?= filemtime('') ?>"></script>
