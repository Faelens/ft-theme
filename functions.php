<?php 
//Custom login
function custom_login_css() {
echo '<link rel="stylesheet" type="text/css" href="'.get_stylesheet_directory_uri().'/login/login-styles.css" />';
}
add_action('login_head', 'custom_login_css');
add_filter( 'login_headerurl', 'custom_login_header_url' );
function custom_login_header_url($url) {
return 'http://www.faelens.nl/';
}

?>
