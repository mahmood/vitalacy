<?php

/**
 * ReduxFramework Barebones Sample Config File
 * For full documentation, please visit: http://docs.reduxframework.com/
 */

if ( ! class_exists( 'Redux' ) ) {
	return;
}

// This is your option name where all the Redux data is stored.
$opt_name = "config";

/**
 * ---> SET ARGUMENTS
 * All the possible arguments for Redux.
 * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
 * */

$theme = wp_get_theme(); // For use with some settings. Not necessary.

$args = array(
	// TYPICAL -> Change these values as you need/desire
	'opt_name'             => $opt_name,
	// This is where your data is stored in the database and also becomes your global variable name.
	'display_name'         => $theme->get( 'Name' ),
	// Name that appears at the top of your panel
	'display_version'      => $theme->get( 'Version' ),
	// Version that appears at the top of your panel
	'menu_type'            => 'menu',
	//Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
	'allow_sub_menu'       => true,
	// Show the sections below the admin menu item or not
	'menu_title'           => __( 'Theme Options', 'redux-framework-demo' ),
	'page_title'           => __( 'Theme Options', 'redux-framework-demo' ),
	// You will need to generate a Google API key to use this feature.
	// Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
	'google_api_key'       => '',
	// Set it you want google fonts to update weekly. A google_api_key value is required.
	'google_update_weekly' => false,
	// Must be defined to add google fonts to the typography module
	'async_typography'     => true,
	// Use a asynchronous font on the front end or font string
	//'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
	'admin_bar'            => true,
	// Show the panel pages on the admin bar
	'admin_bar_icon'       => 'dashicons-portfolio',
	// Choose an icon for the admin bar menu
	'admin_bar_priority'   => 50,
	// Choose an priority for the admin bar menu
	'global_variable'      => '',
	// Set a different name for your global variable other than the opt_name
	'dev_mode'             => false,
	// Show the time the page took to load, etc
	'update_notice'        => false,
	// If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
	'customizer'           => true,
	// Enable basic customizer support
	//'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initsially.
	//'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

	// OPTIONAL -> Give you extra features
	'page_priority'        => null,
	// Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
	'page_parent'          => 'themes.php',
	// For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
	'page_permissions'     => 'manage_options',
	// Permissions needed to access the options panel.
	'menu_icon'            => '',
	// Specify a custom URL to an icon
	'last_tab'             => '',
	// Force your panel to always open to a specific tab (by id)
	'page_icon'            => 'icon-themes',
	// Icon displayed in the admin panel next to your menu_title
	'page_slug'            => '_options',
	// Page slug used to denote the panel
	'save_defaults'        => true,
	// On load save the defaults to DB before user clicks save or not
	'default_show'         => false,
	// If true, shows the default value next to each field that is not the default value.
	'default_mark'         => '',
	// What to print by the field's title if the value shown is default. Suggested: *
	'show_import_export'   => true,
	// Shows the Import/Export panel when not used as a field.

	// CAREFUL -> These options are for advanced use only
	'transient_time'       => 60 * MINUTE_IN_SECONDS,
	'output'               => true,
	// Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
	'output_tag'           => true,
	// Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
	// 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

	// FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
	'database'             => '',
	// possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!

	'use_cdn' => true,
	// If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

	//'compiler'             => true,

	// HINTS
	'hints'   => array(
		'icon'          => 'el el-question-sign',
		'icon_position' => 'right',
		'icon_color'    => 'lightgray',
		'icon_size'     => 'normal',
		'tip_style'     => array(
			'color'   => 'light',
			'shadow'  => true,
			'rounded' => false,
			'style'   => '',
		),
		'tip_position'  => array(
			'my' => 'top left',
			'at' => 'bottom right',
		),
		'tip_effect'    => array(
			'show' => array(
				'effect'   => 'slide',
				'duration' => '500',
				'event'    => 'mouseover',
			),
			'hide' => array(
				'effect'   => 'slide',
				'duration' => '500',
				'event'    => 'click mouseleave',
			),
		),
	)
);

// ADMIN BAR LINKS -> Setup custom links in the admin bar menu as external items.
//    $args['admin_bar_links'][] = array(
//        'id'    => 'redux-docs',
//        'href'  => 'http://docs.reduxframework.com/',
//        'title' => __( 'Documentation', 'redux-framework-demo' ),
//    );
//
//    $args['admin_bar_links'][] = array(
//        //'id'    => 'redux-support',
//        'href'  => 'https://github.com/ReduxFramework/redux-framework/issues',
//        'title' => __( 'Support', 'redux-framework-demo' ),
//    );
//
//    $args['admin_bar_links'][] = array(
//        'id'    => 'redux-extensions',
//        'href'  => 'reduxframework.com/extensions',
//        'title' => __( 'Extensions', 'redux-framework-demo' ),
//    );

// SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
//    $args['share_icons'][] = array(
//        'url'   => 'https://github.com/ReduxFramework/ReduxFramework',
//        'title' => 'Visit us on GitHub',
//        'icon'  => 'el el-github'
//        //'img'   => '', // You can use icon OR img. IMG needs to be a full URL.
//    );
//    $args['share_icons'][] = array(
//        'url'   => 'https://www.facebook.com/pages/Redux-Framework/243141545850368',
//        'title' => 'Like us on Facebook',
//        'icon'  => 'el el-facebook'
//    );
//    $args['share_icons'][] = array(
//        'url'   => 'http://twitter.com/reduxframework',
//        'title' => 'Follow us on Twitter',
//        'icon'  => 'el el-twitter'
//    );
//    $args['share_icons'][] = array(
//        'url'   => 'http://www.linkedin.com/company/redux-framework',
//        'title' => 'Find us on LinkedIn',
//        'icon'  => 'el el-linkedin'
//    );

// Panel Intro text -> before the form
//    if ( ! isset( $args['global_variable'] ) || $args['global_variable'] !== false ) {
//        if ( ! empty( $args['global_variable'] ) ) {
//            $v = $args['global_variable'];
//        } else {
//            $v = str_replace( '-', '_', $args['opt_name'] );
//        }
//        $args['intro_text'] = sprintf( __( '<p>Did you know that Redux sets a global variable for you? To access any of your saved options from within your code you can use your global variable: <strong>$%1$s</strong></p>', 'redux-framework-demo' ), $v );
//    } else {
//        $args['intro_text'] = __( '<p>This text is displayed above the options panel. It isn\'t required, but more info is always better! The intro_text field accepts all HTML.</p>', 'redux-framework-demo' );
//    }

// Add content after the form.
//    $args['footer_text'] = __( '<p>This text is displayed below the options panel. It isn\'t required, but more info is always better! The footer_text field accepts all HTML.</p>', 'redux-framework-demo' );

Redux::setArgs( $opt_name, $args );

/*
 * ---> END ARGUMENTS
 */

/*
 * ---> START HELP TABS
 */

$tabs = array(
	array(
		'id'      => 'redux-help-tab-1',
		'title'   => __( 'Theme Information 1', 'redux-framework-demo' ),
		'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo' )
	),
	array(
		'id'      => 'redux-help-tab-2',
		'title'   => __( 'Theme Information 2', 'redux-framework-demo' ),
		'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo' )
	)
);
Redux::setHelpTab( $opt_name, $tabs );

// Set the help sidebar
$content = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'redux-framework-demo' );
Redux::setHelpSidebar( $opt_name, $content );


/*
 * <--- END HELP TABS
 */


/*
 *
 * ---> START SECTIONS
 *
 */

/*

	As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for


 */

// -> START Basic Fields
Redux::setSection( $opt_name, array(
	'title'  => __( 'MainPage', 'redux-framework-demo' ),
	'id'     => 'main',
	'desc'   => __( '', 'redux-framework-demo' ),
	'icon'   => 'el el-home',
	'fields' => array(
        array(
            'id'       => 'logo',
            'type'     => 'media',
            'url'      => true,
            'title'    => __( 'logo', 'redux-framework-demo' ),
            'compiler' => 'true',
            'subtitle' => __( 'Upload logo', 'redux-framework-demo' ),
        ),
        array(
            'id'         => 'intro-title',
            'type'       => 'Text',
            'section_id' => 'intro-title',
            'title'      => 'Intro Title',
            'subtitle'   => 'Enter intro title',
            'default'    => 'First ever automated "Do No Harm" system.'
        ),
        array(
            'id'         => 'intro-desc',
            'type'       => 'Textarea',
            'section_id' => 'intro-desc',
            'title'      => 'Intro Title',
            'subtitle'   => 'Enter intro description',
            'default'    => 'A hygiene compliance system battling the spread of healthcare acquired infections.'
        ),
        array(
            'id'       => 'intro-shot',
            'type'     => 'media',
            'url'      => true,
            'title'    => __( 'intro Screenshot', 'redux-framework-demo' ),
            'compiler' => 'true',
            'subtitle' => __( 'Upload intro Screenshot', 'redux-framework-demo' ),
        ),
	)
) );


Redux::setSection( $opt_name, array(
    'title' => __( 'Social', 'redux-framework-demo' ),
    'id'    => 'social',
    'desc'  => __( 'Social icon links', 'redux-framework-demo' ),
    'icon'  => 'el el-twitter',
    'subsection' => true,
    'fields' => array (
        array(
            'id'         => 'facebook',
            'type'       => 'Text',
            'section_id' => 'social_facebook',
            'title'      => 'Facebook',
            'subtitle'   => 'Enter facebook url',
            'default'    => 'http://facebook.com/vitalacyinc/'
        ),
        array(
            'id'         => 'twitter',
            'type'       => 'Text',
            'section_id' => 'social_twitter',
            'title'      => 'Twitter',
            'subtitle'   => 'Enter twitter url',
            'default'    => 'http://twitter.com/vitalacyinc'
        ),
        array(
            'id'         => 'linkedin',
            'type'       => 'Text',
            'section_id' => 'social_linkedin',
            'title'      => 'Linkedin',
            'subtitle'   => 'Enter linkedin url',
            'default'    => 'http://linkedin.com/company/vitalacy/'
        ),
    )
) );


Redux::setSection( $opt_name, array(
    'title' => __( 'Properties', 'redux-framework-demo' ),
    'id'    => 'properties',
    'desc'  => __( 'Properties section', 'redux-framework-demo' ),
    'icon'  => 'el el-align-center',
    'subsection' => true,
    'fields' => array (
        array(
            'id' => 'section-start-1',
            'type' => 'section',
            'title' => __('#1', 'redux-framework-demo'),
            'indent' => true
        ),
        array(
            'id'         => 'properties_1_title',
            'type'       => 'Text',
            'section_id' => 'properties_1_title',
            'title'      => 'Title',
            'default'    => 'save lives'
        ),
        array(
            'id'         => 'properties_1_desc',
            'type'       => 'Textarea',
            'section_id' => 'properties_1_desc',
            'title'      => 'Description',
            'default'    => 'Protect your vulnerable patients from a preventable infection'
        ),
        array(
            'id' => 'section-end-1',
            'type' => 'section',
            'indent' => true
        ),

        array(
            'id' => 'section-start-2',
            'type' => 'section',
            'title' => __('#2', 'redux-framework-demo'),
            'indent' => true
        ),
        array(
            'id'         => 'properties_2_title',
            'type'       => 'Text',
            'section_id' => 'properties_2_title',
            'title'      => 'Title',
            'default'    => 'find the problem'
        ),
        array(
            'id'         => 'properties_2_desc',
            'type'       => 'Textarea',
            'section_id' => 'properties_2_desc',
            'title'      => 'Description',
            'default'    => 'Gather accurate compliance and wash quality data among your clinical staff'
        ),
        array(
            'id' => 'section-end-2',
            'type' => 'section',
            'indent' => true
        ),

        array(
            'id' => 'section-start-3',
            'type' => 'section',
            'title' => __('#3', 'redux-framework-demo'),
            'indent' => true
        ),
        array(
            'id'         => 'properties_3_title',
            'type'       => 'Text',
            'section_id' => 'properties_3_title',
            'title'      => 'Title',
            'default'    => 'change habits'
        ),
        array(
            'id'         => 'properties_3_desc',
            'type'       => 'Textarea',
            'section_id' => 'properties_3_desc',
            'title'      => 'Description',
            'default'    => 'Provide constant reminders for staff to perform hand hygiene at the point of patient contact'
        ),
        array(
            'id' => 'section-end-3',
            'type' => 'section',
            'indent' => true
        ),
    )
) );


//Redux::setSection( $opt_name, array(
//    'title' => __( 'Contact information', 'redux-framework-demo' ),
//    'id'    => 'main_contact',
//    'desc'  => __( 'Contact information', 'redux-framework-demo' ),
//    'icon'  => 'el el-info-circle',
//    'subsection' => true,
//    'fields' => array (
//        array(
//            'id'         => 'telphone',
//            'type'       => 'Text',
//            'section_id' => 'contact_telphone',
//            'title'      => 'Telphone Number',
//            'subtitle'   => 'Enter telphone number'
//        ),
//        array(
//            'id'         => 'hours',
//            'type'       => 'Text',
//            'section_id' => 'contact_hours',
//            'title'      => 'Open hours',
//            'subtitle'   => 'Enter open hours'
//        ),
//        array(
//            'id'         => 'address',
//            'type'       => 'Text',
//            'section_id' => 'contact_address',
//            'title'      => 'Address',
//            'subtitle'   => 'Enter address'
//        )
//    )
//) );
//
//Redux::setSection( $opt_name, array(
//    'title' => __( 'About', 'redux-framework-demo' ),
//    'id'    => 'main_about',
//    'desc'  => __( 'About', 'redux-framework-demo' ),
//    'icon'  => 'el el-edit',
//    'subsection' => true,
//    'fields' => array (
//        array(
//            'id'         => 'title',
//            'type'       => 'Text',
//            'section_id' => 'about_title',
//            'title'      => 'About title',
//            'subtitle'   => 'Enter about title'
//        ),
//        array(
//            'id'         => 'description',
//            'type'       => 'Textarea',
//            'section_id' => 'about_description',
//            'title'      => 'About Description',
//            'subtitle'   => 'Enter about description'
//        )
//    )
//) );

//Redux::setSection( $opt_name, array(
//    'title' => __( 'Services', 'redux-framework-demo' ),
//    'id'    => 'main_services',
//    'desc'  => __( 'Services', 'redux-framework-demo' ),
//    'icon'  => 'el el-briefcase',
//    'subsection' => true,
//    'fields' => array (
//        array(
//            'id'       => 'services-is-active',
//            'type'     => 'switch',
//            'title'    => __('Active', 'redux-framework-demo'),
//            'subtitle' => __('active this section?', 'redux-framework-demo'),
//            'default'  => true,
//        ),
//        array(
//            'id'         => 'Corporate',
//            'type'       => 'Textarea',
//            'section_id' => 'about_corporate',
//            'title'      => 'Corporate & Creative Office',
//            'subtitle'   => 'Enter description'
//        ),
//        array(
//            'id'         => 'Hospitality',
//            'type'       => 'Textarea',
//            'section_id' => 'about_hospitality',
//            'title'      => 'Hospitality',
//            'subtitle'   => 'Enter description'
//        ),
//        array(
//            'id'         => 'Education',
//            'type'       => 'Textarea',
//            'section_id' => 'about_education',
//            'title'      => 'Education',
//            'subtitle'   => 'Enter description'
//        ),
//        array(
//            'id'         => 'Technology',
//            'type'       => 'Textarea',
//            'section_id' => 'about_technology',
//            'title'      => 'Technology',
//            'subtitle'   => 'Enter description'
//        ),
//        array(
//            'id'         => 'Retail',
//            'type'       => 'Textarea',
//            'section_id' => 'about_retail',
//            'title'      => 'Retail',
//            'subtitle'   => 'Enter description'
//        ),
//        array(
//            'id'         => 'Medical',
//            'type'       => 'Textarea',
//            'section_id' => 'about_medical',
//            'title'      => 'Medical',
//            'subtitle'   => 'Enter description'
//        ),
//    )
//) );
//
//Redux::setSection( $opt_name, array(
//    'title' => __( 'Customers Comment', 'redux-framework-demo' ),
//    'id'    => 'main_customers',
//    'desc'  => __( 'Customers Comment', 'redux-framework-demo' ),
//    'icon'  => 'el el-comment',
//    'subsection' => true,
//    'fields' => array (
//        array(
//            'id'       => 'comment-is-active',
//            'type'     => 'switch',
//            'title'    => __('Active', 'redux-framework-demo'),
//            'subtitle' => __('active this section?', 'redux-framework-demo'),
//            'default'  => true,
//        ),
//        array(
//            'id' => 'section-start-1',
//            'type' => 'section',
//            'title' => __('Comment #1', 'redux-framework-demo'),
//            'indent' => true
//        ),
//        array(
//            'id'       => 'comment-1-rate',
//            'type'     => 'radio',
//            'title'    => __('Rate', 'redux-framework-demo'),
//            'subtitle' => __('Enter the rate of this customer', 'redux-framework-demo'),
//            'options'  => array(
//                '1' => '1 Star',
//                '2' => '2 Star',
//                '3' => '3 Star',
//                '4' => '4 Star',
//                '5' => '5 Star'
//            ),
//            'default' => '2'
//        ),
//        array(
//            'id'         => 'comment-1-description',
//            'type'       => 'Textarea',
//            'section_id' => 'comment_description',
//            'title'      => 'Description',
//        ),
//        array(
//            'id'         => 'comment-1-author',
//            'type'       => 'Text',
//            'section_id' => 'about_medical',
//            'title'      => 'author name',
//        ),
//        array(
//            'id'     => 'section-end-1',
//            'type'   => 'section',
//            'indent' => false,
//        ),
//
//        array(
//            'id' => 'section-start-2',
//            'type' => 'section',
//            'title' => __('Comment #2', 'redux-framework-demo'),
//            'indent' => true
//        ),
//        array(
//            'id'       => 'comment-2-rate',
//            'type'     => 'radio',
//            'title'    => __('Rate', 'redux-framework-demo'),
//            'subtitle' => __('Enter the rate of this customer', 'redux-framework-demo'),
//            'options'  => array(
//                '1' => '1 Star',
//                '2' => '2 Star',
//                '3' => '3 Star',
//                '4' => '4 Star',
//                '5' => '5 Star'
//            ),
//            'default' => '2'
//        ),
//        array(
//            'id'         => 'comment-2-description',
//            'type'       => 'Textarea',
//            'section_id' => 'comment_description',
//            'title'      => 'Description',
//        ),
//        array(
//            'id'         => 'comment-2-author',
//            'type'       => 'Text',
//            'section_id' => 'about_medical',
//            'title'      => 'author name',
//        ),
//        array(
//            'id'     => 'section-end-2',
//            'type'   => 'section',
//            'indent' => false,
//        ),
//
//        array(
//            'id' => 'section-start-3',
//            'type' => 'section',
//            'title' => __('Comment #3', 'redux-framework-demo'),
//            'indent' => true
//        ),
//        array(
//            'id'       => 'comment-3-rate',
//            'type'     => 'radio',
//            'title'    => __('Rate', 'redux-framework-demo'),
//            'subtitle' => __('Enter the rate of this customer', 'redux-framework-demo'),
//            'options'  => array(
//                '1' => '1 Star',
//                '2' => '2 Star',
//                '3' => '3 Star',
//                '4' => '4 Star',
//                '5' => '5 Star'
//            ),
//            'default' => '2'
//        ),
//        array(
//            'id'         => 'comment-3-description',
//            'type'       => 'Textarea',
//            'section_id' => 'comment_description',
//            'title'      => 'Description',
//        ),
//        array(
//            'id'         => 'comment-3-author',
//            'type'       => 'Text',
//            'section_id' => 'about_medical',
//            'title'      => 'author name',
//        ),
//        array(
//            'id'     => 'section-end-3',
//            'type'   => 'section',
//            'indent' => false,
//        ),
//
//        array(
//            'id' => 'section-start-4',
//            'type' => 'section',
//            'title' => __('Comment #4', 'redux-framework-demo'),
//            'indent' => true
//        ),
//        array(
//            'id'       => 'comment-4-rate',
//            'type'     => 'radio',
//            'title'    => __('Rate', 'redux-framework-demo'),
//            'subtitle' => __('Enter the rate of this customer', 'redux-framework-demo'),
//            'options'  => array(
//                '1' => '1 Star',
//                '2' => '2 Star',
//                '3' => '3 Star',
//                '4' => '4 Star',
//                '5' => '5 Star'
//            ),
//            'default' => '2'
//        ),
//        array(
//            'id'         => 'comment-4-description',
//            'type'       => 'Textarea',
//            'section_id' => 'comment_description',
//            'title'      => 'Description',
//        ),
//        array(
//            'id'         => 'comment-4-author',
//            'type'       => 'Text',
//            'section_id' => 'about_medical',
//            'title'      => 'author name',
//        ),
//        array(
//            'id'     => 'section-end-4',
//            'type'   => 'section',
//            'indent' => false,
//        ),
//
//        array(
//            'id' => 'section-start-5',
//            'type' => 'section',
//            'title' => __('Comment #5', 'redux-framework-demo'),
//            'indent' => true
//        ),
//        array(
//            'id'       => 'comment-5-rate',
//            'type'     => 'radio',
//            'title'    => __('Rate', 'redux-framework-demo'),
//            'subtitle' => __('Enter the rate of this customer', 'redux-framework-demo'),
//            'options'  => array(
//                '1' => '1 Star',
//                '2' => '2 Star',
//                '3' => '3 Star',
//                '4' => '4 Star',
//                '5' => '5 Star'
//            ),
//            'default' => '2'
//        ),
//        array(
//            'id'         => 'comment-5-description',
//            'type'       => 'Textarea',
//            'section_id' => 'comment_description',
//            'title'      => 'Description',
//        ),
//        array(
//            'id'         => 'comment-5-author',
//            'type'       => 'Text',
//            'section_id' => 'about_medical',
//            'title'      => 'author name',
//        ),
//        array(
//            'id'     => 'section-end-5',
//            'type'   => 'section',
//            'indent' => false,
//        ),
//
//        array(
//            'id' => 'section-start-6',
//            'type' => 'section',
//            'title' => __('Comment #6', 'redux-framework-demo'),
//            'indent' => true
//        ),
//        array(
//            'id'       => 'comment-6-rate',
//            'type'     => 'radio',
//            'title'    => __('Rate', 'redux-framework-demo'),
//            'subtitle' => __('Enter the rate of this customer', 'redux-framework-demo'),
//            'options'  => array(
//                '1' => '1 Star',
//                '2' => '2 Star',
//                '3' => '3 Star',
//                '4' => '4 Star',
//                '5' => '5 Star'
//            ),
//            'default' => '2'
//        ),
//        array(
//            'id'         => 'comment-6-description',
//            'type'       => 'Textarea',
//            'section_id' => 'comment_description',
//            'title'      => 'Description',
//        ),
//        array(
//            'id'         => 'comment-6-author',
//            'type'       => 'Text',
//            'section_id' => 'about_medical',
//            'title'      => 'author name',
//        ),
//        array(
//            'id'     => 'section-end-6',
//            'type'   => 'section',
//            'indent' => false,
//        ),
//    )
//) );
//
//
//Redux::setSection( $opt_name, array(
//    'title' => __( 'Featured Clients', 'redux-framework-demo' ),
//    'id'    => 'featured_clients',
//    'desc'  => __( 'Featured Clients', 'redux-framework-demo' ),
//    'icon'  => 'el el-user',
//    'subsection' => true,
//    'fields' => array (
//        array(
//            'id'       => 'clients-is-active',
//            'type'     => 'switch',
//            'title'    => __('Active', 'redux-framework-demo'),
//            'subtitle' => __('active this section?', 'redux-framework-demo'),
//            'default'  => true,
//        )
//    )
//) );


//Redux::setSection( $opt_name, array(
//    'title' => __( 'Blog', 'redux-framework-demo' ),
//    'id'    => 'blog',
//    'desc'  => __( 'Blog section', 'redux-framework-demo' ),
//    'icon'  => 'el el-blogger',
//    'subsection' => true,
//    'fields' => array (
//        array(
//            'id'       => 'blog-is-active',
//            'type'     => 'switch',
//            'title'    => __('Active', 'redux-framework-demo'),
//            'subtitle' => __('active this section?', 'redux-framework-demo'),
//            'default'  => true,
//        )
//    )
//) );

Redux::setSection( $opt_name, array(
    'title'  => __( 'Layout', 'redux-framework-demo' ),
    'id'     => 'layout',
    'desc'   => __( 'Change HomePage Layout sort.', 'redux-framework-demo' ),
    'icon'   => 'el el-list',
    'fields' => array(
        array(
            'id'      => 'homepage-blocks',
            'type'    => 'sorter',
            'title'   => 'Homepage Layout Manager',
            'desc'    => 'Organize how you want the layout to appear on the homepage',
            'options' => array(
                'enabled'  => array(
                    'intro' => 'Intro',
                    'properties'     => 'Properties',
                    'problem'   => 'Problem',
                    'products' => 'Products',
                    'solutions' => 'Solutions',
                    'demo' => 'Demo',
                    'about' => 'About',
                    'team' => 'Team',
                    'contact'=> 'Contact'
                ),
                'disabled' => array(
                )
            ),
        )
    )
) );

/*
 * <--- END SECTIONS
 */
