

<?php
$cssTime = filemtime('../../view/home/section/section.css'); // ejemplo: '../Home/5.Video/video.css'
$jsTime = filemtime('../../');   // ejemplo: '../Home/5.Video/video.js'
?>
<link rel="stylesheet" href="../../view/home/section/section.css?v=<?= $cssTime ?>">
<section class="portfolio" id="portfolio">
  <h2 class="portfolio_titlle">SECCION DE PORTAFOLIO</h2>
  <div class="portfolio_proyect_container">
    <div class="portfolio_proyect">
      <h2 class="proyect_portfolio_name">PROYECT</h2>
    </div>
    <div class="portfolio_proyect">
      <h2 class="proyect_portfolio_name">PROYECT</h2>
    </div>
    <div class="portfolio_proyect">
      <h2 class="proyect_portfolio_name">PROYECT</h2>
    </div>
    <div class="portfolio_proyect">
      <h2 class="proyect_portfolio_name">PROYECT</h2>
    </div>
    <div class="portfolio_proyect">
      <h2 class="proyect_portfolio_name">PROYECT</h2>
    </div>
    <div class="portfolio_proyect">
      <h2 class="proyect_portfolio_name">PROYECT</h2>
    </div>
  </div>
</section>
<script src="../../?v=<?= $jsTime ?>" type="text/javascript"></script>
