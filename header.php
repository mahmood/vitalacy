<?php
$config = $GLOBALS['config'];
$logo_url = $config['logo']['url'];
$intro_title = $config['intro-title'];
$intro_desc = $config['intro-desc'];
?>
<html lang="en">
<head>
    <title><?php if (is_home () ) { bloginfo('name'); } elseif ( is_category() ) { single_cat_title(); echo ' - ' ; bloginfo('name'); }
    elseif (is_single() ) { single_post_title(); }
    elseif (is_page() ) { bloginfo('name'); echo ': '; single_post_title(); }
    else { wp_title('',true); } ?></title>
    <link rel='stylesheet' href='<?php bloginfo('template_url') ?>/assets/styles/font-awesome.min.css'>
    <link rel='stylesheet' href='<?php bloginfo('template_url') ?>/assets/styles/owl.carousel.min.css'>
    <link rel='stylesheet' href='<?php bloginfo('template_url') ?>/assets/styles/owl.theme.default.min.css'>
    <link rel='stylesheet' href='<?php bloginfo('stylesheet_url'); ?>'>
    <meta charset='utf-8'>
    <meta http-equiv="content-language" content="en">
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
            <img src='<?php echo $logo_url ?>' width='65' alt="logo" class='logo'>
        <?php }else{ ?>
            <div class="logo-new">
                <img src='<?php bloginfo('template_url') ?>/assets/blog/images/svg/blue-logo.svg' alt="logo" width='65' class='logo'>
            </div>
        <?php } ?>
        <img src='<?php bloginfo('template_url') ?>/assets/img/mobile-logo-2x.png' alt="logo" width='20' class='logo-mobile'>
    </a>

    <nav>
        <a href='#solution'>Products</a>
        <a href='#packages'>Solutions</a>
        <a href='<?php bloginfo('url') ?>/blog'>Blog</a>
        <a href='#about'>About</a>
        <a href='#contact'>Contact</a>
        <a href='https://admin.vitalacy.com' class='btn small blue btnLogin no-tablet'>Login</a>
        <a href='https://admin.vitalacy.com' class='tablet'>Login</a>
    </nav>
</header>
<div id='header-placeholder'></div>
