<?php
$config = $GLOBALS['config'];
$price = $config['price'];
?>
<div class='popup' id='pricep'>
    <i class='fa fa-close'></i>
    <h1>Request Pricing</h1>
    <?php echo do_shortcode($price); ?>
</div>