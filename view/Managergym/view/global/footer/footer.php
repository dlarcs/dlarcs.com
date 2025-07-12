<?php
$cssTime = filemtime('../../view/global/footer/footer.css'); // ejemplo: '../Home/5.Video/video.css'
$jsTime = filemtime('');   // ejemplo: '../Home/5.Video/video.js'
?>
<link rel="stylesheet" href="../../view/global/footer/footer.css?v=<?= $cssTime ?>">
<footer id="footer">
  <strong>MANAGERGYM </strong> - @Copyright
</footer>
<script src="?v=<?= $jsTime ?>" type="text/javascript"></script>
