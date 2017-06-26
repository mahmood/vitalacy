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
<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/3344892.js"></script>
<!-- Hotjar Tracking Code for www.vitalacy.com -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:523279,hjsv:5};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');
</script>
<?php wp_footer(); ?>
</body>

</html>