<?php

/**
 * @package Unified login error messages
 * @@author Lutz Schr&ouml;er

/*
	Plugin Name: Unified login error messages
	Plugin URI: http://x.elektroelch.net/ulem/
	Description: Changes login error messages to unified message
	Author: Lutz Schr&ouml;er
	Version: 1.0
	License: GPL
	Author URI: http://elektroelch.net
*/
if (!class_exists('UnifiedLoginErrorMessage')) {
  class UnifiedLoginErrorMessage {
  
    /**
         * constructor
         *
         * @since 1.0
         */
		function __construct() {
			add_filter('login_errors', array(&$this, 'login_error_messages'));
			add_action('init', array(&$this, 'load_textdomain'));	
		}

    /**
         * load the language file if available
         *
         * @since 1.0
         */
		function load_textdomain() {
			load_plugin_textdomain('ulem', false, dirname(plugin_basename(__FILE__)) . '/lang');
		}
		
    /**
     * change the error message if it is invalid_username or incorrect password
     *
     * @since 1.0
     * @param $message string Error string provided by WordPress
     * @return $message string Modified error string
    */
		function login_error_messages($message) {
			global $errors;
			if (isset($errors->errors['invalid_username']) || isset($errors->errors['incorrect_password'])) {
				$message = __('<strong>ERROR</strong>: Invalid username/password combination.', 'ulem') . ' ' .
									sprintf(('<a href="%1$s" title="%2$s">%3$s</a>?'),
														site_url('wp-login.php?action=lostpassword', 'login'),
														__('Password Lost and Found', 'default'),
														__('Lost Password', 'default'));
			} //if
			return $message;	
		}
		
	} //if
	
} //class
$unified_login_error_message = new UnifiedLoginErrorMessage;
?>