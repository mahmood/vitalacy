<?php
$layout = $config['homepage-blocks']['enabled'];
//header
get_header();

if ($layout) {
    foreach ($layout as $key => $value) {

        switch ($key) {

            case 'intro':
                //Intro Section
                get_template_part('templates/intro');
                break;

            case 'properties':
                //Properties Section
                get_template_part('templates/properties');
                break;

            case 'problem':
                //Problem Section
                get_template_part('templates/problem');
                break;

            case 'products':
                //Products Section
                get_template_part('templates/products');
                break;

            case 'solutions':
                //Solutions Section
                get_template_part('templates/solutions');
                break;

            case 'demo':
                //Demo Section
                get_template_part('templates/demo');
                break;

            case 'about':
                //About Section
                get_template_part('templates/about');
                break;

            case 'team':
                //About Section
                get_template_part('templates/team');
                break;

            case 'contact':
                //Contact
                get_template_part('templates/contact');
                break;

        }
    }
}

//popups
get_template_part('templates/popups/req_demo');
get_template_part('templates/popups/price');


//footer
get_footer();
