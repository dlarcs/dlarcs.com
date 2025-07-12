<?php
$cssTime = filemtime('../../view/global/menu/menu.css'); // ejemplo: '../Home/5.Video/video.css'
$jsTime = filemtime('../../');   // ejemplo: '../Home/5.Video/video.js'
?>
<link rel="stylesheet" href="../../view/global/menu/menu.css?v=<?= $cssTime ?>">

   <header class="header_menu">
     <input class="header_checkbox" type="checkbox" id="open_menu">
     <label for="open_menu" class="header_open_nav_buttom" role="button">=</label>
     <div class="header_logo_container">
       <img src="../../../../view/Managergym/view/home/section/img/img-blanco.png" class="header_logo">
     </div>
     <nav class="header_nav">
       <ul class="header_nav_list">
         <li class="header_nav_item"> <a href="#open_menu">Inicio</a> </li>
         <li class="header_nav_item"> <a href="#portfolio">Portafolio</a> </li>
         <li class="header_nav_item"> <a href="#contact">Contactanos</a> </li>
         <li class="header_nav_item"> <a href="#footer">Pie de página</a> </li>
       </ul>
     </nav>
   </header>
 <script src="../../?v=<?= $jsTime ?>" type="text/javascript"></script>
