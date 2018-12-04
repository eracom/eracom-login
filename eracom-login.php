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

// Source: http://codex.wordpress.org/Customizing_the_Login_Form
// Note: si utilisé dans un thème, on obtiendra le chemin avec get_stylesheet_directory_uri()

// 2) Changer la cible du lien sur le logo.
// Par défaut: https://wpfr.net

function eracom_login_logo_url() {
    return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'eracom_login_logo_url' );

// 3) Changer la balise "title" du lien.
// Par défaut: Propulsé par WordPress
//function eracom_login_logo_url_title() {
//    return 'Titre du site';
//}
//add_filter( 'login_headertitle', 'eracom_login_logo_url_title' );

