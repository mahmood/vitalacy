<?php
$config = $GLOBALS['config'];
$demo = $config['demo'];
?>
<div class='popup' id='demop'>
    <i class='fa fa-close'></i>
    <h1>Request a Demo</h1>
    <?php echo do_shortcode($demo); ?>
</div>