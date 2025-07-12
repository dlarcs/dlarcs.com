

<?php
$cssTime = filemtime('../../view/home/slider/slider.css'); // ejemplo: '../Home/5.Video/video.css'
$jsTime = filemtime('../../view/home/slider/slider.js');   // ejemplo: '../Home/5.Video/video.js'
?>
<link rel="stylesheet" href="../../view/home/slider/slider.css?v=<?= $cssTime ?>">
<section class="slideHome">
  <div id="container_img" class="container_img">
    <div class="img_slider">
      <div class="logo_menu">
       <a href="index.php"><img class="menu" src="<?php echo '../../view/global/footer/img/logo.png?v=' . filemtime('view/global/footer/img/logo.png'); ?>" alt=""></a>
      </div>
      <h2>D'LARCS</h2>
      <h3>Incluye Hosting y Dominio por un año.</h3>
    </div>
    <div class="img_slider">
      <div class="logo_menu">
       <a href="index.php"><img class="menu" src="<?php echo '../../view/global/footer/img/logo.png?v=' . filemtime('view/global/footer/img/logo.png'); ?>" alt=""></a>
      </div>
      <h2>D'LARCS</h2>
      <h3>Tu negocio digital, desde la raíz hasta la nube.</h3>
    </div>
    <div class="img_slider">
      <div class="logo_menu">
       <a href="index.php"><img class="menu" src="<?php echo '../../view/global/footer/img/logo.png?v=' . filemtime('view/global/footer/img/logo.png'); ?>" alt=""></a>
      </div>
      <h2>D'LARCS</h2>
      <h3>Animaciones y objetos en 3D</h3>
    </div>
    <div class="img_slider">
      <div class="logo_menu">
       <a href="index.php"><img class="menu" src="<?php echo '../../view/global/footer/img/logo.png?v=' . filemtime('view/global/footer/img/logo.png'); ?>" alt=""></a>
      </div>
      <h2>D'LARCS</h2>
      <h3>Descuento para estudiantes</h3>
    </div>
    <div class="img_slider">
      <div class="logo_menu">
       <a href="index.php"><img class="menu" src="<?php echo '../../view/global/footer/img/logo.png?v=' . filemtime('view/global/footer/img/logo.png'); ?>" alt=""></a>
      </div>
      <h2>D'LARCS</h2>
      <h3>Las mejores páginas</h3>
    </div>
  </div>
  <div class="slider_arrow">
    <img id="left_slider" src="../../view/home/slider/img/left.png" alt="">
  </div>
  <div class="slider_arrow">
    <img id="right_slider"src="../../view/home/slider/img/right.png" alt="">
  </div>
</section>
<script src="../../view/home/slider/slider.js?v=<?= $jsTime ?>" type="text/javascript"></script>
