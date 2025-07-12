<?php
$cssTime = filemtime('../../view/global/menu/menu.css'); // ejemplo: '../Home/5.Video/video.css'
$jsTime = filemtime('../../');   // ejemplo: '../Home/5.Video/video.js'
?>
<link rel="stylesheet" href="../../view/global/menu/menu.css?v=<?= $cssTime ?>">

   <header class="header_menu">
     <div class="container_name">
       <img src="../../view/global/menu/img/logo_blanco.png" alt="">
       <h1>D'LARCS</h1>
     </div>
     <input class="header_checkbox" type="checkbox" id="open_menu">
     <label for="open_menu" class="header_open_nav_buttom" role="button">☰</label>
     <label for="open_menu" class="header_close_nav_buttom" role="button">X</label>
     <nav class="header_nav">
       <ul class="header_nav_list">
         <li class="header_nav_item"> <a href="../../index.php">Inicio</a></li>
         <li class="header_nav_item"> <a href="../../view/servicios/index.php">Planes y servicios</a> </li>
         <li class="header_nav_item"> <a href="../../view/galery/index.php">Galería</a></li>
         <li class="header_nav_item"> <a href="../../view/animaciones/index.php">Animaciones</a> </li>
         <li class="header_nav_item"> <a href="../../view/portfolio/index.php">Portafolio</a> </li>
       </ul>
     </nav>
   </header>
 <script src="../../?v=<?= $jsTime ?>" type="text/javascript"></script>
