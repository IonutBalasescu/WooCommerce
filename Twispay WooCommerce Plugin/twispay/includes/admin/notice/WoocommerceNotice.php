<?php

namespace Twispay\Includes\Admin\Notice;

use Twispay\Utils\Links;

require WP_PLUGIN_DIR . '/twispay/vendor/autoload.php';
final class WoocommerceNotice
{
    static function notice() {
        $lang = explode('-', get_bloginfo('language'));
        $lang = $lang[0];
    
        if (file_exists(WP_PLUGIN_DIR . '/twispay/language/' . $lang . '/language.php')) {
            require(WP_PLUGIN_DIR . '/twispay/language/' . $lang . '/language.php');
        } else {
            require(WP_PLUGIN_DIR . '/twispay/language/en/language.php');
        } 

					echo '<div class="error"><p><strong>' 
                . esc_html( $tw_lang['no_woocommerce_f'] ) 
                . ' <a href="https://wordpress.org/plugins/woocommerce/" target="_blank">WooCommerce</a> ' 
                . esc_html( $tw_lang['no_woocommerce_s'] ) . '</strong></p></div>';
          
    }
}