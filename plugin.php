<?php
/*
 * Plugin Name: TotalPoll – Lite
 * Plugin URI: https://totalsuite.net/products/totalpoll/
 * Description: Yet another powerful poll plugin for WordPress.
 * Version: 4.11.0
 * Author: TotalSuite
 * Author URI: https://totalsuite.net/
 * Text Domain: totalpoll
 * Domain Path: languages
 * Requires at least: 4.8
 * Requires PHP: 5.6
 * Tested up to: 6.5.5
 */



// Root plugin file name
define( 'TOTALPOLL_ROOT', __FILE__ );

// TotalPoll environment
$env = require dirname( __FILE__ ) . '/env.php';

// Include plugin setup
require_once dirname( __FILE__ ) . '/setup.php';

// Setup
$plugin = new TotalPollSetup( $env );

// Oh yeah, we're up and running!
