<?php
/**
 * Constructor Parameters
 *
 * @param string    $text_domain your plugin text domain.
 * @param string    $parent_menu_slug the menu slug name where the "Recommendations" submenu will appear.
 * @param string    $submenu_label To change the submenu name.
 * @param string    $submenu_page_name an unique page name for the submenu.
 * @param int       $priority Submenu priority adjust.
 * @param string    $hook_suffix use it to load this library assets only to the recommedded plugins page. Not into the whol admin area.
 *
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if( class_exists('HtSlider\Admin\Recommended_Plugins') ){
    $get_instance = new HtSlider\Admin\Recommended_Plugins(
        array(
            'text_domain'       => 'ht-slider',
            'parent_menu_slug'  => 'htslider_page',
            'menu_type'         => 'submenu',
            'menu_icon'         => 'dashicons-email-alt',
            'menu_capability'   => 'manage_options',
            'menu_page_slug'    => 'htslider-recommendation',
            'priority'          => 300,
            'assets_url'        => HTSLIDER_PL_URL.'assets/admin',
            'hook_suffix'       => 'ht-slider_page_htslider-recommendation',
        )
    );

    // Only recommend the WooCommerce-only builder (ShopLentor) when WooCommerce is installed.
    $woocommerce_active = class_exists( 'WooCommerce' );

    $get_instance->add_new_tab( array(
        'title' => esc_html__( 'Recommended Plugins', 'ht-slider' ),
        'active' => true,
        'plugins' => array_merge(
            $woocommerce_active ? array(
                array(
                    'slug'      => 'woolentor-addons',
                    'location'  => 'woolentor_addons_elementor.php',
                    'name'      => esc_html__( 'ShopLentor – WooCommerce Builder for Elementor & Gutenberg +10 Modules – All in One Solution (formerly WooLentor)', 'ht-slider' )
                ),
            ) : array(),
            array(
                array(
                    'slug'      => 'ht-mega-for-elementor',
                    'location'  => 'htmega_addons_elementor.php',
                    'name'      => esc_html__( 'HT Mega – Absolute Addons for Elementor Page Builder', 'ht-slider' )
                ),
                array(
                    'slug'      => 'kelune-crm',
                    'location'  => 'kelune-crm.php',
                    'name'      => esc_html__( 'Kelune CRM', 'ht-slider' )
                ),
                array(
                    'slug'      => 'support-genix-lite',
                    'location'  => 'support-genix-lite.php',
                    'name'      => esc_html__( 'Support Genix – Helpdesk, AI Chatbot, Knowledge Base & Customer Support Ticketing System', 'ht-slider' )
                ),
                array(
                    'slug'      => 'hashbar-wp-notification-bar',
                    'location'  => 'init.php',
                    'name'      => esc_html__( 'Notification Bar for WordPress', 'ht-slider' )
                ),
                array(
                    'slug'      => 'wp-plugin-manager',
                    'location'  => 'plugin-main.php',
                    'name'      => esc_html__( 'WP Plugin Manager', 'ht-slider' )
                ),
                array(
                    'slug'      => 'cookieray',
                    'location'  => 'cookieray.php',
                    'name'      => esc_html__( 'CookieRay – Cookie Banner for Cookie Consent (GDPR/CCPA Compliant)', 'ht-slider' )
                ),
                array(
                    'slug'      => 'pixelavo',
                    'location'  => 'pixelavo.php',
                    'name'      => esc_html__( 'Pixelavo – Server Side Tracking & Pixel + AI Ads Tools', 'ht-slider' )
                ),
            )
        )
    ) );

    $get_instance->add_new_tab( array(
        'title' => esc_html__( 'WooCommerce', 'ht-slider' ),
        'plugins' => array(
            array(
                'slug'      => 'woolentor-addons',
                'location'  => 'woolentor_addons_elementor.php',
                'name'      => esc_html__( 'WooLentor', 'ht-slider' )
            ),
            array(
                'slug'      => 'whols',
                'location'  => 'whols.php',
                'name'      => esc_html__( 'Whols', 'ht-slider' )
            ),
            array(
                'slug'      => 'swatchly',
                'location'  => 'swatchly.php',
                'name'      => esc_html__( 'Swatchly – Product Variation Swatches for WooCommerce', 'ht-slider' )
            ),
            array(
                'slug'      => 'recurio',
                'location'  => 'recurio.php',
                'name'      => esc_html__( 'Recurio – Ultimate Subscription for WooCommerce', 'ht-slider' )
            ),
        )
    ) );

    $get_instance->add_new_tab( array(
        'title' => esc_html__( 'Other Plugins', 'ht-slider' ),
        'plugins' => array(
            array(
                'slug'      => 'wp-plugin-manager',
                'location'  => 'plugin-main.php',
                'name'      => esc_html__( 'WP Plugin Manager', 'ht-slider' )
            ),
            array(
                'slug'      => 'ht-easy-google-analytics',
                'location'  => 'ht-easy-google-analytics.php',
                'name'      => esc_html__( 'HT Easy GA4 ( Google Analytics 4 )', 'ht-slider' )
            ),
            array(
                'slug'      => 'ht-contactform',
                'location'  => 'contact-form-widget-elementor.php',
                'name'      => esc_html__( 'HT Contact Form 7', 'ht-slider' )
            ),
            array(
                'slug'      => 'cookieray',
                'location'  => 'cookieray.php',
                'name'      => esc_html__( 'CookieRay – Cookie Banner for Cookie Consent (GDPR/CCPA Compliant)', 'ht-slider' )
            ),
            array(
                'slug'      => 'insert-headers-and-footers-script',
                'location'  => 'init.php',
                'name'      => esc_html__( 'Insert Headers and Footers Code', 'ht-slider' )
            ),
            array(
                'slug'      => 'extensions-for-cf7',
                'location'  => 'extensions-for-cf7.php',
                'name'      => esc_html__( 'Extensions For CF7 (Contact form 7 Database, Conditional Fields and Redirection)', 'ht-slider' )
            ),
            array(
                'slug'      => 'courseglade-lms',
                'location'  => 'courseglade-lms.php',
                'name'      => esc_html__( 'ECourseGlade LMS – Online Course & eLearning Platform', 'ht-slider' )
            ),
        )
    ) );
}
