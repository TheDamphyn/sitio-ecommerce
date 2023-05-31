<script>//carga la hoja de estilo solo cuando se está ocupando el modulo
function incrustar_hoja_estilos_comision() {
    var hoja_estilos_url =
        '<?php echo get_site_url() . '/wp-content/themes/spotify/assets/modulos/modulo-audios/modulo-audios.css';?>';
    var hoja_estilos = document.createElement('link');
    hoja_estilos.rel = 'stylesheet';
    hoja_estilos.href = hoja_estilos_url;
    document.head.appendChild(hoja_estilos);
}
incrustar_hoja_estilos_comision();
</script>

<!-- #seccion 5 contenidos -->
<section class="row p-3">
	<div class="col-12 div-loop-canciones rounded">
        <div class="d-none d-sm-none d-md-block">
            <div class="bg-loop-canciones d-flex justify-content-between rounded-top">
                <div class="col-5">
                    <span>#</span>
                    <span class="ms-5">Título</span>
                </div>
                <span class="col-3">Álbum</span>
                <span class="col-2">Fecha en la que se añadió</span>
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                    </svg>
                </span>
            </div>
        </div>
    <?php
        //le paso una variable para saber si está activado
        $active = true;
        $temp = $wp_query;
        //si voy a paginar mi contenido
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        //cantidad de post por página
        $post_per_page = 6; // -1 shows all posts
        //array del custom_post_type
        $args = array(
            //tipo de post_type que publicaremos
            'post_type' => 'audios',
            //los ordenará por fecha de publicación (usare date o rand)
            'orderby' => 'date',
            //ordenados me manera ASC, DESC o RAND
            'order' => 'ASC',
            //paginación
            'paged' => $paged,
            //cantidad de post por página
            'posts_per_page' => $post_per_page,
            'tax_query' => array (
                array (
                    'taxonomy' => 'cancion-audios', //nombre de la taxonomia
                    'field' => 'slug', //dejar igaul
                    'terms' => 'si', //nombre del termino creado en wp
                ),
            ),
        );
        //se genera una busqueda del array
        $wp_query = new WP_Query($args);

        //si tengo un post : mientras que $wp_query tenga un post : imprimeme el post
        if (have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); //todo lo que este dentro de este loop, es la estructura que se mostrará?>
        
        <div class="d-none d-sm-none d-md-block">
            <div class="div-cancion d-flex justify-content-between align-items-center m-3 p-3 rounded">
                <div class="col-5">
                    <div class="d-flex align-items-center">
                        <span class="span-play mt-3 me-5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-play-fill" viewBox="0 0 16 16">
                                <path d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z"/>
                            </svg>
                        </span>
                        <img class="img-fluid rounded" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" alt="Imagen de la Canción">
                        <div class="ms-3">
                            <h4><?php echo get_the_title(); ?></h4>
                            <h5><?php the_field('autor') ?></h5>
                        </div>
                    </div>
                </div>
                <a class="col-3" href="#">
                    <h5><?php the_field('album') ?></h5>
                </a>
                <a class="col-2" href="#">
                    <h5><?php the_field('fecha_de_subida') ?></h5>
                </a>
                <a href="#">
                    <h5><?php the_field('duracion') ?></h5>
                </a>
            </div>
        </div>
        
        <div class="d-block d-xs-block d-sm-block d-md-none">
            <div class="div-cancion d-flex justify-content-between align-items-center m-3 p-3 rounded">
                <div class="d-flex align-items-center">
                    <img class="img-fluid rounded" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" alt="Imagen de la Canción">
                    <div class="ms-3 text-white">
                        <h4><?php echo get_the_title(); ?></h4>
                        <h5><?php the_field('autor') ?></h5>
                    </div>
                </div>
                <button class="btn text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                        <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                    </svg>
                </button>
            </div>
        </div>
        
    <?php endwhile; endif; wp_reset_query()/*resetea la query para que empieze de 0*/; $wp_query = $temp //empieza de nuevo el loop?>

    </div>
</section>
<!------seccion contacto---->