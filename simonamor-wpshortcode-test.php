<?php

 /*
    Plugin Name: simonamor-wpshortcode-test
    Description: Test shortcode plugin for Wordpress
    Version: 0.1
    Author: Simon Amor
    Author URI: http://www.simonamor.co.uk/
    */

defined('ABSPATH') or die( 'Bleh, should not be here');

/*

Add the following shortcode text to a page, you should have 6 values output.

[simonamor_test abc1="Abc One" def1="Def One" ghi1="Ghi One" abc2="Abc Two" def2="Def Two" ghi2="Ghi Two" ]

You would expect 6 values to appear in the output but you only get 4.

*/

function simonamor_test_fn($atts) {
    $params = shortcode_atts( array(
        'abc1' => '',
        'def1' => '',
        'ghi1' => '',

        'abc2' => '',
        'def2' => '',
        'ghi2' => '',

    ), $atts);

    ob_start();
    echo '<pre>';
    print_r($params);
    echo '</pre>';
    return ob_get_clean();
}

add_shortcode('simonamor_test', 'simonamor_test_fn');


