<?php
/**
 * Plugin Name: Squawk Media
 * Plugin URI: https://squawk.pro/
 * Description: Make your media responsive, assign custom CSS classes and more.
 * Version: 0.1.0
 * Requires at least: 5.8
 * Requires PHP: 7.4.33
 * Author: Matias Escudero
 * Author URI: https://meweb.dev
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

 if(!defined('ABSPATH')) exit;

 require_once 'admin/class.MEWEBDEV_SQKMDA_QuickReference.php';

 class MEWEBDEV_Squawk_Media
 {
    
    function __construct()
    {
        #region welcome page

        // When the plugin is activated, store the plugin name as an option to 
        // track that the plugin was activated and to later remove it so that it
        // the welcome page is shown only once
        register_activation_hook(__FILE__, 'mewebdev_sqkmda_plugin_activate');

        function mewebdev_sqkmda_plugin_activate()
        {
            add_option('mewebdev_sqkmda_activated',  plugin_basename(__FILE__));
        }

        // When the plugin loads, if the user is an admin and the option we stored in the previous step
        // exists, redirect to the welcome page and delete the option so that it's not shown again
        add_action('admin_init', 'mewebdev_sqkmda_plugin_load');

        function mewebdev_sqkmda_plugin_load()
        {
            if(is_admin() && get_option('mewebdev_sqkmda_activated') == plugin_basename(__FILE__))
            {
                delete_option('mewebdev_sqkmda_activated');
                wp_redirect(get_admin_url(null, 'admin.php?page=squawk-media-quick-reference'));
            }            
        }
        
        #endregion

        add_action('init', array($this, 'formBlockAdminAssets'));

        // Add admin pages and load their scripts
        add_action('admin_menu', array($this, 'admin_main'));

        add_action('wp_enqueue_scripts', array($this, 'initializeScripts'));
    }

    public function initializeScripts()
    {
        wp_enqueue_script('media-upload');
    }

    public function formBlockAdminAssets()
    {
        register_block_type(__DIR__, array(
            'render_callback' => array($this, 'formBlockFrontEndHTML')
        ));
    }

    public function formBlockFrontEndHTML($attributes)
    {
        if(!is_admin())
        {
            wp_enqueue_script('sqkmda_frontend_js', plugin_dir_url(__FILE__).'build/frontend.js', array('wp-element'), '1.0', true);
        }

        ob_start(); ?>
        
        <div class="sqkmda-fe-update">
            <pre style="display: none;"><?php echo esc_html(wp_json_encode($attributes)); ?></pre>
        </div>

        <?php return ob_get_clean();
    }

    public function admin_main()
    {
        $admin_main_hook = add_menu_page('Squawk Media', 'Squawk Media', 'manage_options', 'squawk-media-quick-reference', array($this, 'quick_reference_page'), 'data:image/svg+xml;base64,'. base64_encode('<svg id="a" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" viewBox="0 0 388.5 347.42"><path d="m120.8,239.08c6.59,3.48,12.09,6.33,15.93,8.57l-12.73,10.58-27.49,22.84c-3.63,1-6.54,3.7-7.75,7.25-1.21,3.55-.57,7.54,1.64,10.52,7.86,10.46,33.21,26.75,64.88,38.16,12.26,4.41,25.46,8.09,38.97,10.42,13.51-2.33,26.71-6,38.97-10.42,31.67-11.41,57.02-27.7,64.88-38.16,2.2-2.99,2.84-6.97,1.64-10.52s-4.12-6.26-7.75-7.25l-27.49-22.84-12.73-10.58c3.85-2.24,9.34-5.09,15.93-8.57,40.06-21.12,120.8-65.36,120.8-136.72,0-45.43-10.52-78.27-18.34-94.55C367.67,2.77,362.41,0,356.8,0c-8.03,0-14.79,5.69-17.13,13.36-24.34,80.48-45.36,91.03-88.44,94.67-.07,0-.14.01-.21.02v-22.82s0-.92,0-.92v-21.75c0-31.39-25.39-56.81-56.77-56.87-.04,0-.07,0-.11,0h-70.88c-4.83,0-8.74,3.91-8.74,8.74,0,1.71.57,3.41,1.49,4.83l21.26,31.92v56.85c-43.08-3.64-64.09-14.19-88.44-94.67C46.49,5.69,39.74,0,31.71,0c-5.62,0-10.88,2.77-13.36,7.82C10.52,24.1,0,56.94,0,102.37c0,71.36,80.74,115.6,120.8,136.72Zm55.61-181.63c0-8.52,6.91-15.43,15.43-15.43s15.43,6.91,15.43,15.43c0,8.52-6.91,15.43-15.43,15.43s-15.43-6.91-15.43-15.43Z"/></svg>') , 100);
    }

    public function quick_reference_page()
    {
        $quick_reference = new MEWEBDEV_SQKMDA_QuickReference();
        $quick_reference->get_page();
    }
 }

 $squawk_images = new MEWEBDEV_Squawk_Media();