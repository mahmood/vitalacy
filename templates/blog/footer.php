<?php
    $config = $GLOBALS['config'];
    $facebook = $config['facebook'];
    $twitter = $config['twitter'];
    $linkedin = $config['linkedin'];
    $motto = $config['motto'];
    $footer_logo = $config['footer-logo']['url'];
?>
<footer id="blog-footer">
    <img src='<?= get_template_directory_uri() ?>/assets/blog/images/logo-white.png' alt="logo">

    <p><?= $motto ?></p>
    <div class="social">
        <a href="<?= $twitter ?>" target="_blank" class="icon-button twitter"><i
                  class="fa fa-twitter"></i><span></span></a>
        <a href="<?= $facebook ?>" target="_blank" class="icon-button facebook"><i
                  class="fa fa-facebook"></i><span></span></a>
        <a href="<?= $linkedin ?>" target="_blank" class="icon-button google-plus"><i
                  class="fa fa-linkedin"></i><span></span></a>
    </div>
</footer>
<script src="<?php bloginfo('template_url') ?>/assets/blog/scripts/lib/jquery.js"></script>
<script src="<?php bloginfo('template_url') ?>/assets/blog/scripts/lib/browser.js"></script>
<script src="<?php bloginfo('template_url') ?>/assets/blog/scripts/lib/slick.min.js"></script>
<script src="<?php bloginfo('template_url') ?>/assets/blog/scripts/main.js"></script>
<?php wp_footer(); ?>
</body>

</html>