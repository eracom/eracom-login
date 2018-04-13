<?php
/*
Plugin Name: Eracom Login Page
Plugin URI: https://github.com/eracom/eracom-login
Description: Page login WordPress
Version: 1.0.1
Author: Eracom Web Team
Author URI: https://github.com/orgs/eracom/teams/site-eracom/members
GitHub Plugin URI: https://github.com/eracom/eracom-login
*/


/* Custom Login Screen
***************************************/

function eracom_login_screen() {
	echo '<link rel="stylesheet" type="text/css" href="' . plugin_dir_url( __FILE__ ). '/login.css" />';
}
add_action( 'login_head', 'eracom_login_screen' );

// src: http://codex.wordpress.org/Customizing_the_Login_Form

// change the link values so the logo links to your WordPress site
function eracom_login_logo_url() {
    return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'eracom_login_logo_url' );

//function eracom_login_logo_url_title() {
//    return 'option dé/construction';
//}
//add_filter( 'login_headertitle', 'my_login_logo_url_title' );

