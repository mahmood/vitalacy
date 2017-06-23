<?php
$config = $GLOBALS['config'];
$facebook = $config['facebook'];
$twitter = $config['twitter'];
$linkedin = $config['linkedin'];
$active = $config['footer-is-active'];
$motto = $config['motto'];
$footer_logo = $config['footer-logo']['url'];
?>
<?php if($active == true): ?>
<footer>

    <?php if(!empty($footer_logo) && isset($footer_logo)){?>
            <img src='<?= $footer_logo ?>' alt="logo">
        <?php }else{?>
            <img src='<?php bloginfo('template_url') ?>/assets/img/logo-white.png' alt="logo">
        <?php } ?>

    <p><?= nl2br($motto) ?></p>
    <div class="social">
        <a href="<?= $twitter ?>" target="_blank" class="icon-button twitter"><i
                class="fa fa-twitter"></i><span></span></a>
        <a href="<?= $facebook ?>" target="_blank" class="icon-button facebook"><i
                class="fa fa-facebook"></i><span></span></a>
        <a href="<?= $linkedin ?>" target="_blank" class="icon-button google-plus"><i
                class="fa fa-linkedin"></i><span></span></a>
    </div>
</footer>
<?php endif; ?>


<script src='<?php bloginfo('template_url') ?>/assets/scripts/libs.js'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src='<?php bloginfo('template_url') ?>/assets/scripts/slick.min.js'></script>
<script src='<?php bloginfo('template_url') ?>/assets/scripts/main.js'></script>
<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-90074309-1', 'auto');
    ga('send', 'pageview');

</script>

<?php wp_footer(); ?>
</body>
</html>
