<?php
//añadir el extracto en el wp
add_post_type_support('page','excerpt');

//llamado a CSS
include get_template_directory().'/assets/inc/css-functions.php';
//llamado a JS
include get_template_directory().'/assets/inc/js-functions.php';
//llamado a modulos
include get_template_directory().'/assets/inc/modulos-functions.php';
//llamado a widgets
include get_template_directory().'/assets/inc/widgets-functions.php';