<?php
$config = $GLOBALS['config'];
$intro_title = $config['intro-title'];
$intro_desc = $config['intro-desc'];
$intro_shot = $config['intro-shot']['url'];
?>
<section class='top'>
    <div class='description'>
        <h1><?php echo $intro_title ?></h1>

        <p>A hygiene compliance system battling the spread of healthcare acquired infections.</p>

        <a href='#demop' data-popup='demop' class='btn'>Request a Demo</a>
    </div>
    <?php if(!empty($intro_shot) && isset($intro_shot)) {?>
        <img src='<?php echo $intro_shot ?>' width='630'>
    <?php }else{ ?>
        <img src='<?php bloginfo('template_url') ?>/assets/img/dashboard-comp.jpg' width='630'>
    <?php } ?>

</section>