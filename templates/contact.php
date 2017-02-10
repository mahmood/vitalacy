<?php
$config = $GLOBALS['config'];
$active = $config['contact-is-active'];
$address = $config['address'];
$phone = $config['phone'];
$email = $config['email'];
$office_image = $config['office-image']['url'];
 ?>
 <?php if($active == true): ?>
<section class='contact' id='contact'>
    <h1>Contact Us</h1>

    <div class='address'>
        <?php if(!empty($office_image) && isset($office_image)){?>
            <div class='map'
                style='background-image: url(<?= $office_image ?>); background-repeat: no-repeat; background-size: cover;'>
            </div>
        <?php }else{?>
            <div class='map'
                style='background-image: url(<?php bloginfo('template_url') ?>/assets/img/vitalacy-office-photo.jpg); background-repeat: no-repeat; background-size: cover;'>
            </div>
        <?php } ?>

        <div class='text'>
            <p class='title'>Address</p>
            <p class='content'><?= nl2br($address); ?></p>

            <p class='title'>Phone</p>
            <p class='content'><?= $phone ?></p>

            <p class='title'>Email</p>
            <p class='content'><a href="mailto:<?=$email?>"><?= $email ?></a></p>
        </div>
    </div>

    <div class='form'>
        <h2>What are you waiting for?</h2>

        <p>Our specialists will work with you to identify a custom tailored solution for your healthcare
            organization.</p>

        <a href="mailto:<?=$email?>" class='btn'>Email us</a>
    </div>
</section>
<?php endif; ?>