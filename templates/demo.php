<?php
$config = $GLOBALS['config'];
$active = $config['demo-is-active'];
$req_demo_active = $config['req-demo-is-active'];
$desc = $config['demo_desc'];
$video = $config['demo_video'];
?>
<?php if($active == true): ?>
<section class='demo' id='demo'>
    <h2>Demo</h2>

    <iframe src="<?= $video ?>" class='video' width="640" height="360" frameborder="0"
            webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

    <?php if($req_demo_active == true): ?><a href='#demop' class='btn green round' data-popup='demop'>Get Free Consultation</a><?php endif; ?>
    <p><?= $desc ?></p>
</section>
<?php endif; ?>