<?php //modulo de audios

// la función debe llevar el nombre del tipo de contenido que voy a crear + _register
function audios_register() {
    
    //este array representa la interfaz del modulo
    $labels = array(
        'name' => _x('audios', 'post type general name'), //nombre del tipo de post
        'singular_name' => _x('audios', 'post type singular name'), //nombre singular
        'add_new' => _x('Agregar audio', 'slideshow_two item'), // boton para agregar contenido
        'add_new_item' => __('Agregar audio'),
        'edit_item' => __('Editar audio'),
        'new_item' => __('Nueva audio'),
        'view_item' => __('Ver el audio'),
        'search_items' => __('Buscar audio'),
        'not_found' =>  __('No se encontraron'),
        'not_found_in_trash' => __('No se encontraron en la basura'),
        'parent_item_colon' => ''
    );

    //este array repesenta la interfaz para agregar un nuevo contenido
    $args = array(
        'labels' => $labels,
        'public' => true, //si el elemento va a ser publico
        'publicly_queryable'    => true, //si el elemento puede ser queryable, crear querys
        'show_ui' => true, //si el elemento va a mostrar interfaz
        'query_var' => true, //si el elemento va a permitir almacenar los datos en una variable de query
        'rewrite' => true, //si puedo reescribir el elemento
		'exclude_from_search'   => false, //si puedo excluirlo de la busqueda
        'capability_type' => 'post', //definir qué tipo de contenido es (post o page)
        'menu_icon'  => 'dashicons-format-audio', //icono del menu (buscar más icon en la página de wp como dashicons)
        'hierarchical' => false, //si el elemento
        'menu_position' => null, //si el elemento
        'supports'=> array( 'title','thumbnail', 'excerpt', 'editor'), //me permite añadir elementos como el titulo, imagen, extracto y editar el contenido
        'rewrite' => array('slug' => 'audios', 'with_front' => false) //si el elemento
    );

    register_post_type( 'audios' , $args );
}

add_action('init', 'audios_register');

/*si es cancion o no*/
function cancion_audios() { //esta función sirve para crear taxonomias

    //registro la taxonomia
	register_taxonomy(
        //creo la taxonomia 'cancion'
		'cancion-audios',
        //en el custom_post_type que creamos arriba
		'audios',
		array(
			'label' => __( '¿Es canción?' ), //como se leerá en el menú
			'rewrite' => array( 'slug' => 'cancion-audios' ), //si me permite reescribir la URL de la categoria
			'hierarchical' => true, //si permite herencias (subcategorias)
			 // Allow automatic creation of taxonomy columns on associated post-types table?
			 'show_admin_column'   => true, //si me lo muestra en el panel de wp
			 // Show in quick edit panel?
			 'show_in_quick_edit'  => true, //si me lo muestra en la edición rápida
		)
	);
}

add_action( 'init', 'cancion_audios' );
