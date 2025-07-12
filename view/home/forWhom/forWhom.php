<?php
$cssTime = filemtime('../../view/home/forWhom/forWhom.css'); // ejemplo: '../Home/5.Video/video.css'
$jsTime = filemtime('../../');   // ejemplo: '../Home/5.Video/video.js'
?>
<link rel="stylesheet" href="../../view/home/forWhom/forWhom.css?v=<?= $cssTime ?>">
<main class="forWhom" id="forWhom">
  <div class="forWhom_wrapper">
    <div class="forWhom_img_container">
      <h1>D'LARCS</h1>
     <img src="../../view/home/forWhom/img/logo_blanco.png" alt="">


    </div>
    <div class="forWhom_data_container">
      <div class="forWhom_data">
        <div class="forWhom_description">
          <h1>Quienes somos? <br>Creadores de sitios web</h1>
          <p>¡Hola! Somos D’larcs, un equipo apasionado por crear experiencias
             digitales únicas. Diseñamos sitios web que incluyen páginas informativas,
             blogs creativos, catálogos modernos y tiendas online listas para vender.
             Nos adaptamos a tus ideas y necesidades, creando proyectos a tu medida.
             Combinamos creatividad, tecnología y estrategia para que tu presencia
             online destaque. Con nosotros, tu web no solo funciona, ¡conquista!</p>
        </div>
        <div class="forWhom_skills-container">
          <h2>skils</h2>
          <ul>
            <li class="forWhom_skill">
            <div class="load_bar">
              <div class="load_bar_bar bar_80">80%</div>
            </div>
            <span class="forWhom_skill_name">Puntualidad</span>
            </li>

            <li class="forWhom_skill">
            <div class="load_bar">
              <div class="load_bar_bar bar_60">60%</div>
            </div>
            <span class="forWhom_skill_name">Accesibilidad</span>
            </li>

            <li class="forWhom_skill">
            <div class="load_bar">
              <div class="load_bar_bar bar_80">80%</div>
            </div>
            <span class="forWhom_skill_name">Concejos</span>
            </li>

            <li class="forWhom_skill">
            <div class="load_bar">
              <div class="load_bar_bar bar_70">70%</div>
            </div>
            <span class="forWhom_skill_name">Guía</span>
            </li>

            <li class="forWhom_skill">
            <div class="load_bar">
              <div class="load_bar_bar bar_90">90%</div>
            </div>
            <span class="forWhom_skill_name">Personalidad</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</main>
<script src="../../?v=<?= $jsTime ?>" type="text/javascript"></script>
