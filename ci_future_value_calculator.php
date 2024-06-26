<?php
/*
Plugin Name: CI Future value calculator
Plugin URI: https://www.calculator.io/future-value-calculator/
Description: Free future value calculator that uses the formula FV = PV (1 + I/Y)ⁿ to find the future value of an investment with periodic deposits.
Version: 1.0.0
Author: Future Value Calculator / www.calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_future_value_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Future Value Calculator by www.calculator.io";

function display_calcio_ci_future_value_calculator(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">Future Value Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_future_value_calculator_iframe"></iframe></div>';
}


add_shortcode( 'ci_future_value_calculator', 'display_calcio_ci_future_value_calculator' );