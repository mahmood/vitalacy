<?php
$config = $GLOBALS['config'];
$active = $config['about-is-active'];
$ceo_message_active  = $config['ceo-message-is-active'];
$about_desc = $config['about-desc'];
$ceo_message = $config['ceo-message'];
$ceo_name = $config['ceo-name'];
?>
<?php if($active == true): ?>
<section class='about' id='about'>
    <div class='slide'>
        <div class='top-part'>
            <h1>About Us</h1>
            <div class='flex-row half-elements title'>
                <div class='text'>
                    <p><?= nl2br($about_desc) ?></p>
                </div>

                <?php if($ceo_message_active == true): ?>
                <div class='q'>
                    <p class='quote'>&ldquo;<?= $ceo_message ?>&rdquo;</p>
                    <span class='author'><?= $ceo_name ?></span>
                </div>
                <?php endif ?>
            </div>
        </div>
</section>
<?php endif; ?>