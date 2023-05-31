<?php
function netflix_css(){

    //registramos los estilos:
    wp_register_style('bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css','all');
    wp_register_style('fuentes','https://fonts.googleapis.com/css2?family=Figtree&display=swap','all');
    wp_register_style('iconos','https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css','all');
    wp_register_style('estilos',get_template_directory_uri().'/assets/librerias/css/estilos.css','all');

    //encolamos los estilos:
    wp_enqueue_style('estilos');
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('fuentes');
    wp_enqueue_style('iconos');
}

add_action('wp_enqueue_scripts','netflix_css');
//primero encolamos los estilos despues en las '', ponemos el nombre de la funcion de arriba

/*assets styles*/