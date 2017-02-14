<?php
    /**
     * ReduxFramework Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }


    // This is your option name where all the Redux data is stored.
    $opt_name = "config";

    // This line is only for altering the demo. Can be easily removed.
    $opt_name = apply_filters( 'redux_demo/opt_name', $opt_name );

    /*
     *
     * --> Used within different fields. Simply examples. Search for ACTUAL DECLARATION for field examples
     *
     */

    $sampleHTML = '';
    if ( file_exists( dirname( __FILE__ ) . '/info-html.html' ) ) {
        Redux_Functions::initWpFilesystem();

        global $wp_filesystem;

        $sampleHTML = $wp_filesystem->get_contents( dirname( __FILE__ ) . '/info-html.html' );
    }

    // Background Patterns Reader
    $sample_patterns_path = ReduxFramework::$_dir . '../options/patterns/';
    $sample_patterns_url  = ReduxFramework::$_url . '../options/patterns/';
    $sample_patterns      = array();

    if ( is_dir( $sample_patterns_path ) ) {

        if ( $sample_patterns_dir = opendir( $sample_patterns_path ) ) {
            $sample_patterns = array();

            while ( ( $sample_patterns_file = readdir( $sample_patterns_dir ) ) !== false ) {

                if ( stristr( $sample_patterns_file, '.png' ) !== false || stristr( $sample_patterns_file, '.jpg' ) !== false ) {
                    $name              = explode( '.', $sample_patterns_file );
                    $name              = str_replace( '.' . end( $name ), '', $sample_patterns_file );
                    $sample_patterns[] = array(
                        'alt' => $name,
                        'img' => $sample_patterns_url . $sample_patterns_file
                    );
                }
            }
        }
    }

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
        'menu_title'           => __( 'Theme Settings', 'redux-framework-demo' ),
        'page_title'           => __( 'Theme Settings', 'redux-framework-demo' ),
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
        'update_notice'        => true,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
        'customizer'           => true,
        // Enable basic customizer support
        //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
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
        'page_slug'            => '',
        // Page slug used to denote the panel, will be based off page title then menu title then opt_name if not provided
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
        'use_cdn'              => true,
        // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

        // HINTS
        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'red',
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
    // $args['admin_bar_links'][] = array(
    //     'id'    => 'redux-docs',
    //     'href'  => 'http://docs.reduxframework.com/',
    //     'title' => __( 'Documentation', 'redux-framework-demo' ),
    // );
    //
    // $args['admin_bar_links'][] = array(
    //     //'id'    => 'redux-support',
    //     'href'  => 'https://github.com/ReduxFramework/redux-framework/issues',
    //     'title' => __( 'Support', 'redux-framework-demo' ),
    // );
    //
    // $args['admin_bar_links'][] = array(
    //     'id'    => 'redux-extensions',
    //     'href'  => 'reduxframework.com/extensions',
    //     'title' => __( 'Extensions', 'redux-framework-demo' ),
    // );
    //
    // // SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
    // $args['share_icons'][] = array(
    //     'url'   => 'https://github.com/ReduxFramework/ReduxFramework',
    //     'title' => 'Visit us on GitHub',
    //     'icon'  => 'el el-github'
    //     //'img'   => '', // You can use icon OR img. IMG needs to be a full URL.
    // );
    // $args['share_icons'][] = array(
    //     'url'   => 'https://www.facebook.com/pages/Redux-Framework/243141545850368',
    //     'title' => 'Like us on Facebook',
    //     'icon'  => 'el el-facebook'
    // );
    // $args['share_icons'][] = array(
    //     'url'   => 'http://twitter.com/reduxframework',
    //     'title' => 'Follow us on Twitter',
    //     'icon'  => 'el el-twitter'
    // );
    // $args['share_icons'][] = array(
    //     'url'   => 'http://www.linkedin.com/company/redux-framework',
    //     'title' => 'Find us on LinkedIn',
    //     'icon'  => 'el el-linkedin'
    // );

    // Panel Intro text -> before the form
    if ( ! isset( $args['global_variable'] ) || $args['global_variable'] !== false ) {
        if ( ! empty( $args['global_variable'] ) ) {
            $v = $args['global_variable'];
        } else {
            $v = str_replace( '-', '_', $args['opt_name'] );
        }
        // $args['intro_text'] = sprintf( __( '', 'redux-framework-demo' ), $v );
    } else {
        // $args['intro_text'] = __( '<p>This text is displayed above the options panel. It isn\'t required, but more info is always better! The intro_text field accepts all HTML.</p>', 'redux-framework-demo' );
    }

    // Add content after the form.
    // $args['footer_text'] = __( '', 'redux-framework-demo' );

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
    // Redux::setSection( $opt_name, array(
    //     'title'            => __( 'Basic Fields', 'redux-framework-demo' ),
    //     'id'               => 'basic',
    //     'desc'             => __( 'These are really basic fields!', 'redux-framework-demo' ),
    //     'customizer_width' => '400px',
    //     'icon'             => 'el el-home'
    // ) );

    // Redux::setSection( $opt_name, array(
    //     'title'            => __( 'Checkbox', 'redux-framework-demo' ),
    //     'id'               => 'basic-checkbox',
    //     'subsection'       => true,
    //     'customizer_width' => '450px',
    //     'desc'             => __( 'For full documentation on this field, visit: ', 'redux-framework-demo' ) . '<a href="//docs.reduxframework.com/core/fields/checkbox/" target="_blank">docs.reduxframework.com/core/fields/checkbox/</a>',
    //     'fields'           => array(
    //         array(
    //             'id'       => 'opt-checkbox',
    //             'type'     => 'checkbox',
    //             'title'    => __( 'Checkbox Option', 'redux-framework-demo' ),
    //             'subtitle' => __( 'No validation can be done on this field type', 'redux-framework-demo' ),
    //             'desc'     => __( 'This is the description field, again good for additional info.', 'redux-framework-demo' ),
    //             'default'  => '1'// 1 = on | 0 = off
    //         ),
    //         array(
    //             'id'       => 'opt-multi-check',
    //             'type'     => 'checkbox',
    //             'title'    => __( 'Multi Checkbox Option', 'redux-framework-demo' ),
    //             'subtitle' => __( 'No validation can be done on this field type', 'redux-framework-demo' ),
    //             'desc'     => __( 'This is the description field, again good for additional info.', 'redux-framework-demo' ),
    //             //Must provide key => value pairs for multi checkbox options
    //             'options'  => array(
    //                 '1' => 'Opt 1',
    //                 '2' => 'Opt 2',
    //                 '3' => 'Opt 3'
    //             ),
    //             //See how std has changed? you also don't need to specify opts that are 0.
    //             'default'  => array(
    //                 '1' => '1',
    //                 '2' => '0',
    //                 '3' => '0'
    //             )
    //         ),
    //         array(
    //             'id'       => 'opt-checkbox-data',
    //             'type'     => 'checkbox',
    //             'title'    => __( 'Multi Checkbox Option (with menu data)', 'redux-framework-demo' ),
    //             'subtitle' => __( 'No validation can be done on this field type', 'redux-framework-demo' ),
    //             'desc'     => __( 'This is the description field, again good for additional info.', 'redux-framework-demo' ),
    //             'data'     => 'menu'
    //         ),
    //         array(
    //             'id'       => 'opt-checkbox-sidebar',
    //             'type'     => 'checkbox',
    //             'title'    => __( 'Multi Checkbox Option (with sidebar data)', 'redux-framework-demo' ),
    //             'subtitle' => __( 'No validation can be done on this field type', 'redux-framework-demo' ),
    //             'desc'     => __( 'This is the description field, again good for additional info.', 'redux-framework-demo' ),
    //             'data'     => 'sidebars'
    //         ),
    //     )
    // ) );
    // Redux::setSection( $opt_name, array(
    //     'title'            => __( 'Radio', 'redux-framework-demo' ),
    //     'id'               => 'basic-Radio',
    //     'subsection'       => true,
    //     'customizer_width' => '500px',
    //     'desc'             => __( 'For full documentation on this field, visit: ', 'redux-framework-demo' ) . '<a href="//docs.reduxframework.com/core/fields/radio/" target="_blank">docs.reduxframework.com/core/fields/radio/</a>',
    //     'fields'           => array(
    //         array(
    //             'id'       => 'opt-radio',
    //             'type'     => 'radio',
    //             'title'    => __( 'Radio Option', 'redux-framework-demo' ),
    //             'subtitle' => __( 'No validation can be done on this field type', 'redux-framework-demo' ),
    //             'desc'     => __( 'This is the description field, again good for additional info.', 'redux-framework-demo' ),
    //             //Must provide key => value pairs for radio options
    //             'options'  => array(
    //                 '1' => 'Opt 1',
    //                 '2' => 'Opt 2',
    //                 '3' => 'Opt 3'
    //             ),
    //             'default'  => '2'
    //         ),
    //         array(
    //             'id'       => 'opt-radio-data',
    //             'type'     => 'radio',
    //             'title'    => __( 'Radio Option w/ Menu Data', 'redux-framework-demo' ),
    //             'subtitle' => __( 'No validation can be done on this field type', 'redux-framework-demo' ),
    //             'desc'     => __( 'This is the description field, again good for additional info.', 'redux-framework-demo' ),
    //             'data'     => 'menu'
    //         ),
    //     )
    // ) );
    // Redux::setSection( $opt_name, array(
    //     'title'      => __( 'Sortable', 'redux-framework-demo' ),
    //     'id'         => 'basic-Sortable',
    //     'subsection' => true,
    //     'desc'       => __( 'For full documentation on this field, visit: ', 'redux-framework-demo' ) . '<a href="//docs.reduxframework.com/core/fields/sortable/" target="_blank">docs.reduxframework.com/core/fields/sortable/</a>',
    //     'fields'     => array(
    //         array(
    //             'id'       => 'opt-sortable',
    //             'type'     => 'sortable',
    //             'title'    => __( 'Sortable Text Option', 'redux-framework-demo' ),
    //             'subtitle' => __( 'Define and reorder these however you want.', 'redux-framework-demo' ),
    //             'desc'     => __( 'This is the description field, again good for additional info.', 'redux-framework-demo' ),
    //             'label'    => true,
    //             'options'  => array(
    //                 'Text One'   => 'Item 1',
    //                 'Text Two'   => 'Item 2',
    //                 'Text Three' => 'Item 3',
    //             )
    //         ),
    //         array(
    //             'id'       => 'opt-check-sortable',
    //             'type'     => 'sortable',
    //             'mode'     => 'checkbox', // checkbox or text
    //             'title'    => __( 'Sortable Text Option', 'redux-framework-demo' ),
    //             'subtitle' => __( 'Define and reorder these however you want.', 'redux-framework-demo' ),
    //             'desc'     => __( 'This is the description field, again good for additional info.', 'redux-framework-demo' ),
    //             'options'  => array(
    //                 'cb1' => 'Checkbox One',
    //                 'cb2' => 'Checkbox Two',
    //                 'cb3' => 'Checkbox Three',
    //             ),
    //             'default'  => array(
    //                 'cb1' => false,
    //                 'cb2' => true,
    //                 'cb3' => false,
    //             )
    //         ),
    //     )
    // ) );


    // Redux::setSection( $opt_name, array(
    //     'title'            => __( 'Text', 'redux-framework-demo' ),
    //     'desc'             => __( 'For full documentation on this field, visit: ', 'redux-framework-demo' ) . '<a href="//docs.reduxframework.com/core/fields/text/" target="_blank">docs.reduxframework.com/core/fields/text/</a>',
    //     'id'               => 'basic-Text',
    //     'subsection'       => true,
    //     'customizer_width' => '700px',
    //     'fields'           => array(
    //         array(
    //             'id'       => 'text-example',
    //             'type'     => 'text',
    //             'title'    => __( 'Text Field', 'redux-framework-demo' ),
    //             'subtitle' => __( 'Subtitle', 'redux-framework-demo' ),
    //             'desc'     => __( 'Field Description', 'redux-framework-demo' ),
    //             'default'  => 'Default Text',
    //         ),
    //         array(
    //             'id'        => 'text-example-hint',
    //             'type'      => 'text',
    //             'title'     => __( 'Text Field w/ Hint', 'redux-framework-demo' ),
    //             'subtitle'  => __( 'Subtitle', 'redux-framework-demo' ),
    //             'desc'      => __( 'Field Description', 'redux-framework-demo' ),
    //             'default'   => 'Default Text',
    //             'text_hint' => array(
    //                 'title'   => 'Hint Title',
    //                 'content' => 'Hint content about this field!'
    //             )
    //         ),
    //         array(
    //             'id'          => 'text-placeholder',
    //             'type'        => 'text',
    //             'title'       => __( 'Text Field', 'redux-framework-demo' ),
    //             'subtitle'    => __( 'Subtitle', 'redux-framework-demo' ),
    //             'desc'        => __( 'Field Description', 'redux-framework-demo' ),
    //             'placeholder' => 'Placeholder Text',
    //         ),

    //     )
    // ) );

    // Redux::setSection( $opt_name, array(
    //     'title'      => __( 'Multi Text', 'redux-framework-demo' ),
    //     'id'         => 'basic-Multi Text',
    //     'desc'       => __( 'For full documentation on this field, visit: ', 'redux-framework-demo' ) . '<a href="//docs.reduxframework.com/core/fields/multi-text/" target="_blank">docs.reduxframework.com/core/fields/multi-text/</a>',
    //     'subsection' => true,
    //     'fields'     => array(
    //         array(
    //             'id'       => 'opt-multitext',
    //             'type'     => 'multi_text',
    //             'title'    => __( 'Multi Text Option', 'redux-framework-demo' ),
    //             'subtitle' => __( 'Field subtitle', 'redux-framework-demo' ),
    //             'desc'     => __( 'Field Decription', 'redux-framework-demo' )
    //         ),
    //     )
    // ) );
    // Redux::setSection( $opt_name, array(
    //     'title'      => __( 'Password', 'redux-framework-demo' ),
    //     'id'         => 'basic-Password',
    //     'desc'       => __( 'For full documentation on this field, visit: ', 'redux-framework-demo' ) . '<a href="//docs.reduxframework.com/core/fields/password/" target="_blank">docs.reduxframework.com/core/fields/password/</a>',
    //     'subsection' => true,
    //     'fields'     => array(
    //         array(
    //             'id'       => 'password',
    //             'type'     => 'password',
    //             'username' => true,
    //             'title'    => 'Password Field',
    //             //'placeholder' => array(
    //             //    'username' => 'Username',
    //             //    'password' => 'Password',
    //             //)
    //         )
    //     )
    // ) );

    // Redux::setSection( $opt_name, array(
    //     'title'      => __( 'Textarea', 'redux-framework-demo' ),
    //     'id'         => 'basic-Textarea',
    //     'desc'       => __( 'For full documentation on this field, visit: ', 'redux-framework-demo' ) . '<a href="//docs.reduxframework.com/core/fields/textarea/" target="_blank">docs.reduxframework.com/core/fields/textarea/</a>',
    //     'subsection' => true,
    //     'fields'     => array(
    //         array(
    //             'id'       => 'opt-textarea',
    //             'type'     => 'textarea',
    //             'title'    => __( 'Textarea Option - HTML Validated Custom', 'redux-framework-demo' ),
    //             'subtitle' => __( 'Subtitle', 'redux-framework-demo' ),
    //             'desc'     => __( 'This is the description field, again good for additional info.', 'redux-framework-demo' ),
    //             'default'  => 'Default Text',
    //         )
    //     )
    // ) );

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
            'type'       => 'text',
            'section_id' => 'intro-title',
            'title'      => 'Intro Title',
            'subtitle'   => 'Enter intro title',
            'default'    => 'First ever automated "Do No Harm" system.'
        ),
        array(
            'id'         => 'intro-desc',
            'type'       => 'textarea',
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
    // 'subsection' => true,
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
    // 'subsection' => true,
    'fields' => array (
        array(
            'id'       => 'properties-is-active',
            'type'     => 'switch',
            'title'    => __('Active', 'redux-framework-demo'),
            'subtitle' => __('active this section?', 'redux-framework-demo'),
            'default'  => true,
        ),
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

Redux::setSection( $opt_name, array(
    'title' => __( 'Problem', 'redux-framework-demo' ),
    'id'    => 'problem',
    'desc'  => __( 'Problem section', 'redux-framework-demo' ),
    'icon'  => 'el el-error',
    // 'subsection' => true,
    'fields' => array (
        array(
            'id'       => 'problem-is-active',
            'type'     => 'switch',
            'title'    => __('Active', 'redux-framework-demo'),
            'subtitle' => __('active this section?', 'redux-framework-demo'),
            'default'  => true,
        ),
    )
) );


Redux::setSection( $opt_name, array(
    'title' => __( 'Products', 'redux-framework-demo' ),
    'id'    => 'products',
    'desc'  => __( 'Products section', 'redux-framework-demo' ),
    'icon'  => 'el el-barcode',
    // 'subsection' => true,
    'fields' => array (
        array(
            'id'       => 'product-is-active',
            'type'     => 'switch',
            'title'    => __('Active', 'redux-framework-demo'),
            'subtitle' => __('active this section?', 'redux-framework-demo'),
            'default'  => true,
        ),
    )
) );

Redux::setSection( $opt_name, array(
    'title' => __( 'Solutions', 'redux-framework-demo' ),
    'id'    => 'solutions',
    'desc'  => __( 'Solutions section', 'redux-framework-demo' ),
    'icon'  => 'el el-bulb',
    // 'subsection' => true,
    'fields' => array (
        array(
            'id'       => 'solutions-is-active',
            'type'     => 'switch',
            'title'    => __('Active', 'redux-framework-demo'),
            'subtitle' => __('active this section?', 'redux-framework-demo'),
            'default'  => true,
        ),
    )
) );

Redux::setSection( $opt_name, array(
    'title' => __( 'Demo', 'redux-framework-demo' ),
    'id'    => 'demo',
    'desc'  => __( 'Demo section', 'redux-framework-demo' ),
    'icon'  => 'el el-graph',
    // 'subsection' => true,
    'fields' => array (
        array(
            'id'       => 'demo-is-active',
            'type'     => 'switch',
            'title'    => __('Active', 'redux-framework-demo'),
            'subtitle' => __('active this section?', 'redux-framework-demo'),
            'default'  => true,
        ),
        array(
            'id'         => 'demo_video',
            'type'       => 'Text',
            'section_id' => 'demo_video',
            'title'      => 'Demo Video',
            'subtitle' => __('Enter video link (embed video links) ', 'redux-framework-demo'),
            'default'    => 'https://player.vimeo.com/video/198276148'
        ),
        array(
            'id'       => 'req-demo-is-active',
            'type'     => 'switch',
            'title'    => __('Request A Demo Button', 'redux-framework-demo'),
            'subtitle' => __('show Request a Demo button?', 'redux-framework-demo'),
            'default'  => true,
        ),
        array(
            'id'         => 'demo_desc',
            'type'       => 'Textarea',
            'section_id' => 'demo_desc',
            'title'      => 'Description',
            'default'    => 'Lives are in your hands, what are you waiting for?'
        ),
    )
) );


Redux::setSection( $opt_name, array(
    'title' => __( 'About', 'redux-framework-demo' ),
    'id'    => 'about',
    'desc'  => __( 'About section', 'redux-framework-demo' ),
    'icon'  => 'el el-info-circle',
    // 'subsection' => true,
    'fields' => array (
        array(
            'id'       => 'about-is-active',
            'type'     => 'switch',
            'title'    => __('Active', 'redux-framework-demo'),
            'subtitle' => __('active this section?', 'redux-framework-demo'),
            'default'  => true,
        ),
        array(
            'id'         => 'about-desc',
            'type'       => 'Textarea',
            'section_id' => 'about-desc',
            'title'      => 'About description',
            'subtitle' => __('Enter description ', 'redux-framework-demo'),
            'default'    => 'Vitalacy prevents the transmission of Healthcare Associated infections through the automated tracking of hand sanitization.

             We have created an innovative approach to fighting infectious diseases by developing a SaaS based technology combining Internet of Things (IoT) and wearable technology, to empower hospitals with technology, data, and guidance to reach their goals and minimize Healthcare Associated Infections.'
        ),
        array(
            'id'       => 'ceo-message-is-active',
            'type'     => 'switch',
            'title'    => __('CEO Message', 'redux-framework-demo'),
            'subtitle' => __('show CEO Message?', 'redux-framework-demo'),
            'default'  => true,
        ),
        array(
            'id'         => 'ceo-message',
            'type'       => 'Textarea',
            'section_id' => 'ceo-message',
            'title'      => 'CEO Message',
            'default'    => 'It is our moral obligation as health providers to give every patient an infection-free environment.'
        ),
        array(
            'id'         => 'ceo-name',
            'type'       => 'Text',
            'section_id' => 'ceo-name',
            'title'      => 'CEO Name',
            'default'    => 'Dr. Bahram Nour-Omid, CEO'
        ),
    )
) );

Redux::setSection( $opt_name, array(
    'title' => __( 'Contact', 'redux-framework-demo' ),
    'id'    => 'contact',
    'desc'  => __( 'Contact section', 'redux-framework-demo' ),
    'icon'  => 'el el-phone',
    // 'subsection' => true,
    'fields' => array (
        array(
            'id'       => 'contact-is-active',
            'type'     => 'switch',
            'title'    => __('Active', 'redux-framework-demo'),
            'subtitle' => __('active this section?', 'redux-framework-demo'),
            'default'  => true,
        ),
        array(
            'id'       => 'office-image',
            'type'     => 'media',
            'url'      => true,
            'title'    => __( 'Office Image', 'redux-framework-demo' ),
            'compiler' => 'true',
            'subtitle' => __( 'Upload office image', 'redux-framework-demo' ),
        ),
        array(
            'id'         => 'address',
            'type'       => 'Textarea',
            'section_id' => 'address',
            'title'      => 'Address',
            'default'    => '12100 Wilshire Blvd
Suite 1950
Los Angeles, CA 90025'
        ),
        array(
            'id'         => 'phone',
            'type'       => 'Text',
            'section_id' => 'phone',
            'title'      => 'Phone number',
            'default'    => '(310) 745-5050'
        ),
        array(
            'id'         => 'email',
            'type'       => 'Text',
            'section_id' => 'email',
            'title'      => 'email address',
            'default'    => 'info@vitalacy.com'
        ),
    )
) );

//motto

Redux::setSection( $opt_name, array(
    'title' => __( 'Footer', 'redux-framework-demo' ),
    'id'    => 'footer',
    'desc'  => __( 'Footer section', 'redux-framework-demo' ),
    'icon'  => 'el el-indent-left',
    // 'subsection' => true,
    'fields' => array (
        array(
            'id'       => 'footer-is-active',
            'type'     => 'switch',
            'title'    => __('Active', 'redux-framework-demo'),
            'subtitle' => __('active this section?', 'redux-framework-demo'),
            'default'  => true,
        ),
        array(
            'id'       => 'footer-logo',
            'type'     => 'media',
            'url'      => true,
            'title'    => __( 'footer logo', 'redux-framework-demo' ),
            'compiler' => 'true',
            'subtitle' => __( 'Upload footer logo', 'redux-framework-demo' ),
        ),
        array(
            'id'         => 'motto',
            'type'       => 'Textarea',
            'section_id' => 'motto',
            'title'      => 'Motto',
            'default'    => 'Improving the quality of care. One wash at a time.'
        ),
    )
) );

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

Redux::setSection( $opt_name, array(
    'title' => __( 'Form Management', 'redux-framework-demo' ),
    'id'    => 'form-manage',
    'desc'  => __( 'Form Management', 'redux-framework-demo' ),
    'icon'  => 'el el-comment',
    // 'subsection' => true,
    'fields' => array (
        array(
            'id'         => 'price',
            'type'       => 'Text',
            'section_id' => 'price',
            'title'      => 'Request Price',
            'subtitle'   => 'Enter Request price contact-form shortcode'
        ),
        array(
            'id'         => 'demo',
            'type'       => 'Text',
            'section_id' => 'demo',
            'title'      => 'Request Demo',
            'subtitle'   => 'Enter Request demo contact-form shortcode'
        ),
    )
) );


    /*
     * <--- END SECTIONS
     */


    /*
     *
     * YOU MUST PREFIX THE FUNCTIONS BELOW AND ACTION FUNCTION CALLS OR ANY OTHER CONFIG MAY OVERRIDE YOUR CODE.
     *
     */

    /*
    *
    * --> Action hook examples
    *
    */

    // If Redux is running as a plugin, this will remove the demo notice and links
    //add_action( 'redux/loaded', 'remove_demo' );

    // Function to test the compiler hook and demo CSS output.
    // Above 10 is a priority, but 2 in necessary to include the dynamically generated CSS to be sent to the function.
    //add_filter('redux/options/' . $opt_name . '/compiler', 'compiler_action', 10, 3);

    // Change the arguments after they've been declared, but before the panel is created
    //add_filter('redux/options/' . $opt_name . '/args', 'change_arguments' );

    // Change the default value of a field after it's been set, but before it's been useds
    //add_filter('redux/options/' . $opt_name . '/defaults', 'change_defaults' );

    // Dynamically add a section. Can be also used to modify sections/fields
    //add_filter('redux/options/' . $opt_name . '/sections', 'dynamic_section');

    /**
     * This is a test function that will let you see when the compiler hook occurs.
     * It only runs if a field    set with compiler=>true is changed.
     * */
    if ( ! function_exists( 'compiler_action' ) ) {
        function compiler_action( $options, $css, $changed_values ) {
            echo '<h1>The compiler hook has run!</h1>';
            echo "<pre>";
            print_r( $changed_values ); // Values that have changed since the last save
            echo "</pre>";
            //print_r($options); //Option values
            //print_r($css); // Compiler selector CSS values  compiler => array( CSS SELECTORS )
        }
    }

    /**
     * Custom function for the callback validation referenced above
     * */
    if ( ! function_exists( 'redux_validate_callback_function' ) ) {
        function redux_validate_callback_function( $field, $value, $existing_value ) {
            $error   = false;
            $warning = false;

            //do your validation
            if ( $value == 1 ) {
                $error = true;
                $value = $existing_value;
            } elseif ( $value == 2 ) {
                $warning = true;
                $value   = $existing_value;
            }

            $return['value'] = $value;

            if ( $error == true ) {
                $field['msg']    = 'your custom error message';
                $return['error'] = $field;
            }

            if ( $warning == true ) {
                $field['msg']      = 'your custom warning message';
                $return['warning'] = $field;
            }

            return $return;
        }
    }

    /**
     * Custom function for the callback referenced above
     */
    if ( ! function_exists( 'redux_my_custom_field' ) ) {
        function redux_my_custom_field( $field, $value ) {
            print_r( $field );
            echo '<br/>';
            print_r( $value );
        }
    }

    /**
     * Custom function for filtering the sections array. Good for child themes to override or add to the sections.
     * Simply include this function in the child themes functions.php file.
     * NOTE: the defined constants for URLs, and directories will NOT be available at this point in a child theme,
     * so you must use get_template_directory_uri() if you want to use any of the built in icons
     * */
    if ( ! function_exists( 'dynamic_section' ) ) {
        function dynamic_section( $sections ) {
            //$sections = array();
            $sections[] = array(
                'title'  => __( 'Section via hook', 'redux-framework-demo' ),
                'desc'   => __( '<p class="description">This is a section created by adding a filter to the sections array. Can be used by child themes to add/remove sections from the options.</p>', 'redux-framework-demo' ),
                'icon'   => 'el el-paper-clip',
                // Leave this as a blank section, no options just some intro text set above.
                'fields' => array()
            );

            return $sections;
        }
    }

    /**
     * Filter hook for filtering the args. Good for child themes to override or add to the args array. Can also be used in other functions.
     * */
    if ( ! function_exists( 'change_arguments' ) ) {
        function change_arguments( $args ) {
            //$args['dev_mode'] = true;

            return $args;
        }
    }

    /**
     * Filter hook for filtering the default value of any given field. Very useful in development mode.
     * */
    if ( ! function_exists( 'change_defaults' ) ) {
        function change_defaults( $defaults ) {
            $defaults['str_replace'] = 'Testing filter hook!';

            return $defaults;
        }
    }

    /**
     * Removes the demo link and the notice of integrated demo from the redux-framework plugin
     */
    if ( ! function_exists( 'remove_demo' ) ) {
        function remove_demo() {
            // Used to hide the demo mode link from the plugin page. Only used when Redux is a plugin.
            if ( class_exists( 'ReduxFrameworkPlugin' ) ) {
                remove_filter( 'plugin_row_meta', array(
                    ReduxFrameworkPlugin::instance(),
                    'plugin_metalinks'
                ), null, 2 );

                // Used to hide the activation notice informing users of the demo panel. Only used when Redux is a plugin.
                remove_action( 'admin_notices', array( ReduxFrameworkPlugin::instance(), 'admin_notices' ) );
            }
        }
    }
