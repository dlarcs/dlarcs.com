<?php
$cssTime = filemtime('../../view/animaciones/seccion1/box.css'); // ejemplo: '../Home/5.Video/video.css'
?>
<link rel="stylesheet" href="../../view/animaciones/seccion1/box.css?v=<?= $cssTime ?>">

<section class="seccion1">
  <!-- slider blog -->
        <div class="container-title-port">
            <h1>Slider en carrusel tipo tarjeta <span> 2D</span></h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                 sed do eiusmod tempor incididunt ut labore et dolore magna
                 aliqua.
              </p>
        </div>
        <div class="wrapper">
            <div class="container">
                <input type="radio" name="slide" id="c1" checked>
                <label for="c1" class="card cardImg1">
                    <div class="row">
                        <div class="icon">1</div>
                        <div class="description">
                            <h4>Winter</h4>
                        </div>
                    </div>
                </label>
                <input type="radio" name="slide" id="c2" >
                <label for="c2" class="card cardImg2">
                    <div class="row">
                        <div class="icon">2</div>
                        <div class="description">
                            <h4>Digital Technology</h4>
                        </div>
                    </div>
                </label>
                <input type="radio" name="slide" id="c3" >
                <label for="c3" class="card cardImg3">
                    <div class="row">
                        <div class="icon">3</div>
                        <div class="description">
                            <h4>Globalization</h4>
                        </div>
                    </div>
                </label>
                <input type="radio" name="slide" id="c4" >
                <label for="c4" class="card cardImg4">
                    <div class="row">
                        <div class="icon">4</div>
                        <div class="description">
                            <h4>New technologies</h4>
                        </div>
                    </div>
                </label>

            </div>
        </div>
</section>
<script src="" type="text/javascript">
</script>
