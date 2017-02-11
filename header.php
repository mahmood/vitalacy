<?php
$config = $GLOBALS['config'];
$logo_url = $config['logo']['url'];
$intro_title = $config['intro-title'];
$intro_desc = $config['intro-desc'];
?>
<html>
<head>
    <title><?php if (is_home () ) { bloginfo('name'); } elseif ( is_category() ) { single_cat_title(); echo ' - ' ; bloginfo('name'); }
    elseif (is_single() ) { single_post_title(); }
    elseif (is_page() ) { bloginfo('name'); echo ': '; single_post_title(); }
    else { wp_title('',true); } ?></title>
    <link rel='stylesheet' href='<?php bloginfo('template_url') ?>/assets/styles/font-awesome.min.css'>
    <link rel='stylesheet' href='<?php bloginfo('stylesheet_url'); ?>'>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, user-scalable=no'>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="alternate" type="application/rss+xml" title="<?php printf(__('%s RSS Feed', 'kubrick'), get_bloginfo('name')); ?>" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="alternate" type="application/atom+xml" title="<?php printf(__('%s Atom Feed', 'kubrick'), get_bloginfo('name')); ?>" href="<?php bloginfo('atom_url'); ?>" /> 
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php wp_head(); ?>
</head>
<body>
<header>
    <a href='#menu' class='tablet menu'></a>
    <a href='/' class='logo-link'>
        <?php if(!empty($logo_url) && isset($logo_url)) {?>
            <img src='<?php echo $logo_url ?>' width='65' class='logo'>
        <?php }else{ ?>
        <img src='<?php bloginfo('template_url') ?>/assets/img/logo.png' width='65' class='logo'>
        <?php } ?>
        <img src='<?php bloginfo('template_url') ?>/assets/img/mobile-logo-2x.png' width='20' class='logo-mobile'>
    </a>

    <nav>
        <!--<a href='#problem'>Problem</a>-->
        <a href='#solution'>Products</a>
        <a href='#packages'>Solutions</a>
        <!--<a href='#demo'>Demo</a>-->
        <a href='#about'>About</a>
        <a href='#contact'>Contact</a>
        <a href='https://admin.vitalacy.com' class='btn small blue btnLogin'>Login</a>
    </nav>
</header>
<div id='header-placeholder'></div>