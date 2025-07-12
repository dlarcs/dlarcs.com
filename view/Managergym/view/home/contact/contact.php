

<?php
$cssTime = filemtime('../../view/home/contact/contact.css'); // ejemplo: '../Home/5.Video/video.css'
$jsTime = filemtime('../../');   // ejemplo: '../Home/5.Video/video.js'
?>
<link rel="stylesheet" href="../../view/home/contact/contact.css?v=<?= $cssTime ?>">
  <section class="form" id="contact">
    <h2 class="form_title">Contact</h2>
    <form class="form_form">
        <div class="form_input_container">
          <label for=""> Nombre
            <input type="text" placeholder="Carlos" >
          </label>
        </div>

        <div class="form_input_container">
          <label for=""> Apellido
            <input type="text" placeholder="Rodriguez">
          </label>
        </div>

        <div class="form_input_container">
          <label for=""> E-mail
            <input type="email" placeholder="Ejemplo@gmail.com">
          </label>
        </div>

        <div class="form_input_container">
          <label for=""> Mensaje
            <textarea placeholder="Tu mensaje"></textarea>
          </label>
        </div>
        <div class="form_input_container">
          <input type="submit" name="enviar" value="Enviar">
        </div>
    </form>
  </section>
<script src="../../?v=<?= $jsTime ?>" type="text/javascript"></script>
