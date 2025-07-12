

<?php
$cssTime = filemtime('../../view/home/main/main.css'); // ejemplo: '../Home/5.Video/video.css'
$jsTime = filemtime('../../');   // ejemplo: '../Home/5.Video/video.js'
?>
<link rel="stylesheet" href="../../view/home/main/main.css?v=<?= $cssTime ?>">
<main class="profile" id="profile">
  <div class="profile_wrapper">
    <div class="profile_img_container">
      <h1>El mejor Gimnasio</h1>
      <img class="profile_img" src="../../../../view/Managergym/view/home/section/img/img_negro.png" alt="">
    </div>
    <div class="profile_data_container">
      <div class="profile_data">
        <div class="profile_description">
          <h1>Quienes somos? El mejor gimnasio</h1>
          <p>Lorem ipsum dolmod tempor incididunt utaboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="profile_skills-container">
          <h2>skils</h2>
          <ul>
            <li class="profile_skill">
            <div class="load_bar">
              <div class="load_bar_bar bar_80">80%</div>
            </div>
            <span class="profile_skill_name">Puntualidad</span>
            </li>

            <li class="profile_skill">
            <div class="load_bar">
              <div class="load_bar_bar bar_60">60%</div>
            </div>
            <span class="profile_skill_name">Accesibilidad</span>
            </li>

            <li class="profile_skill">
            <div class="load_bar">
              <div class="load_bar_bar bar_80">80%</div>
            </div>
            <span class="profile_skill_name">Concejos</span>
            </li>

            <li class="profile_skill">
            <div class="load_bar">
              <div class="load_bar_bar bar_70">70%</div>
            </div>
            <span class="profile_skill_name">Guía</span>
            </li>

            <li class="profile_skill">
            <div class="load_bar">
              <div class="load_bar_bar bar_90">90%</div>
            </div>
            <span class="profile_skill_name">Personalidad</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</main>
<script src="../../?v=<?= $jsTime ?>" type="text/javascript"></script>
