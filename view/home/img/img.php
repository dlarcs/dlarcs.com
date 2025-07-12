

<?php
$cssTime = filemtime('../../view/home/img/img.css'); // ejemplo: '../Home/5.Video/video.css'
$jsTime = filemtime('');   // ejemplo: '../Home/5.Video/video.js'
?>
<link rel="stylesheet" href="../../view/home/img/img.css?v=<?= $cssTime ?>">
<section class="img">

</section>
<script src="?v=<?= $jsTime ?>" type="text/javascript"></script>
