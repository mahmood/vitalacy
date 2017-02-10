<?php
$config = $GLOBALS['config'];
$active = $config['demo-is-active'];
$req_demo_active = $config['req-demo-is-active'];
$desc = $config['demo_desc'];
$video = $config['demo_video'];
?>
<?php if($active == true): ?>
<section class='demo' id='demo'>
    <h1>Demo</h1>

    <iframe src="<?= $video ?>" class='video' width="640" height="360" frameborder="0"
            webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

    <?php if($req_demo_active == true): ?><a href='#demop' class='btn' data-popup='demop'>Request a Demo</a><?php endif; ?>
    <p><?= $desc ?></p>
</section>
<?php endif; ?>