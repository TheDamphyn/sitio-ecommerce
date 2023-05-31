<?php
function example_theme_support(){
    remove_theme_support('widgets-block-editor');
}
add_action('after_setup_theme','example_theme_support');

/*widget assets*/
function zona_widget(){
    //widget 1
    register_sidebar(array(
        'name'=>'Nav spotify 1',
        'id'=>'nav_spotify_uno',//le damos ID y nombre al nav
        'before_widget'=>'<div id="%1$s" class="col-12">',//añadimos clase y contenido
        'after_widget'=>'</div>',//cerramos los contenedores
        'before_title'=>'<h5 class="titulo-menu-nav">',//añadimos contenedores para titulo
        'afet_title'=>'</h5>',//cerramos los contenedores de titulo
    ));
    //widget 1
    //widget 2
    register_sidebar(array(
        'name'=>'Nav spotify 2',
        'id'=>'nav_spotify_dos',//le damos ID y nombre al footer
        'before_widget'=>'<div id="%1$s" class="col-12">',//añadimos clase y contenido
        'after_widget'=>'</div>',//cerramos los contenedores
        'before_title'=>'<h5 class="titulo-menu-footer">',//añadimos contenedores para titulo
        'afet_title'=>'</h5>',//cerramos los contenedores de titulo
    ));
    //widget 2
    //widget 3
    register_sidebar(array(
        'name'=>'Nav spotify 3',
        'id'=>'nav_spotify_tres',//le damos ID y nombre al footer
        'before_widget'=>'<div id="%1$s" class="col-12">',//añadimos clase y contenido
        'after_widget'=>'</div>',//cerramos los contenedores
        'before_title'=>'<h5 class="titulo-menu-footer">',//añadimos contenedores para titulo
        'afet_title'=>'</h5>',//cerramos los contenedores de titulo
    ));
    //widget 3
    //widget 4
    register_sidebar(array(
        'name'=>'Footer spotify 1',
        'id'=>'footer_spotify_uno',//le damos ID y nombre al footer
        'before_widget'=>'<div id="%1$s" class="col-12 col-md-2 div-icon">',//añadimos clase y contenido
        'after_widget'=>'</div>',//cerramos los contenedores
        'before_title'=>'<h4 class="titulo-menu-footer">',//añadimos contenedores para titulo
        'afet_title'=>'</h4>',//cerramos los contenedores de titulo
    ));
    //widget 4
    //widget 5
    register_sidebar(array(
        'name'=>'Footer spotify 2',
        'id'=>'footer_spotify_dos',//le damos ID y nombre al footer
        'before_widget'=>'<div id="%1$s" class="col-12 col-md-2 div-icon">',//añadimos clase y contenido
        'after_widget'=>'</div>',//cerramos los contenedores
        'before_title'=>'<h4 class="titulo-menu-footer">',//añadimos contenedores para titulo
        'afet_title'=>'</h4>',//cerramos los contenedores de titulo
    ));
    //widget 5
    //widget 6
    register_sidebar(array(
        'name'=>'Footer spotify 3',
        'id'=>'footer_spotify_tres',//le damos ID y nombre al footer
        'before_widget'=>'<div id="%1$s" class="col-12 col-md-2 div-icon">',//añadimos clase y contenido
        'after_widget'=>'</div>',//cerramos los contenedores
        'before_title'=>'<h4 class="titulo-menu-footer">',//añadimos contenedores para titulo
        'afet_title'=>'</h4>',//cerramos los contenedores de titulo
    ));
    //widget 6
}
add_action('widgets_init','zona_widget');