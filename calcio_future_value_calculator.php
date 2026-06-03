<?php
/*
Plugin Name: Future Value Calculator by Calculator.iO
Plugin URI: https://www.calculator.io/future-value-calculator/
Description: Calculate the future worth of your investments with our free Future Value Calculator. Easily project savings, compound interest, and periodic deposits.
Version: 1.0.0
Author: www.calculator.io / Future Value Calculator
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: calcio_future_value_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Future Value Calculator by www.calculator.io";

function calcio_future_value_calculator_shortcode(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">Future Value Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="calcio_future_value_calculator_iframe"></iframe></div>';
}


add_shortcode( 'calcio_future_value_calculator', 'calcio_future_value_calculator_shortcode' );