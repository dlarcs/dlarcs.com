<?php
$cssTime = filemtime('../../view/global/footer/footer.css'); // ejemplo: '../Home/5.Video/video.css'
$jsTime = filemtime('');   // ejemplo: '../Home/5.Video/video.js'
?>
<link rel="stylesheet" href="../../view/global/footer/footer.css?v=<?= $cssTime ?>">

<footer>
    <div class="footer_container">
      <div class="logo_footer">
       <a href="index.php"><img class="menu" src="<?php echo '../../view/global/footer/img/logo.png?v=' . filemtime('../../view/global/footer/img/logo.png'); ?>" alt=""></a>
      </div>
        <div class="footer_nav">
            <ul>
                <li><a href="../../../view/pages/home/index.php">Inicio</a></li>
                <li><a href="https://wa.me/573138846378" target="_blank">Contactanos</a></li>
            </ul>
        </div>
    </div>
    <div class="footer_bottom">
          <a href="../../view/termCondition/index.php" target="_blank">&copy; 2025 D'LARCS. Todos los derechos reservados.</a>
    </div>
</footer>
<script src="?v=<?= $jsTime ?>" type="text/javascript"></script>
