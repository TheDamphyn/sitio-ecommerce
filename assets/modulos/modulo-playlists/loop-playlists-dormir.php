<script>//carga la hoja de estilo solo cuando se está ocupando el modulo
function incrustar_hoja_estilos_comision() {
    var hoja_estilos_url =
        '<?php echo get_site_url() . '/wp-content/themes/netflix/assets/modulos/modulo-playlists/modulo-playlists.css';?>';
    var hoja_estilos = document.createElement('link');
    hoja_estilos.rel = 'stylesheet';
    hoja_estilos.href = hoja_estilos_url;
    document.head.appendChild(hoja_estilos);
}
incrustar_hoja_estilos_comision();
</script>

<!-- #seccion 5 contenidos -->
<section class="row m-5">
    <h2 class="text-light">Dormir</h2>

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
            'post_type' => 'playlists',
            //los ordenará por fecha de publicación (usare date o rand)
            'orderby' => 'date',
            //ordenados me manera ASC, DESC o RAND
            'order' => 'DESC',
            //paginación
            'paged' => $paged,
            //cantidad de post por página
            'posts_per_page' => $post_per_page,
            'tax_query' => array (
                array (
                    'taxonomy' => 'playlist', //nombre de la taxonomia
                    'field' => 'slug', //dejar igaul
                    'terms' => 'dormir', //nombre del termino creado en wp
                ),
            ),
        );
        //se genera una busqueda del array
        $wp_query = new WP_Query($args);

        //si tengo un post : mientras que $wp_query tenga un post : imprimeme el post
        if (have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); //todo lo que este dentro de este loop, es la estructura que se mostrará?>

        <div class="col-12 col-md-2 mt-4 transicion rounded">
            <div class="card-loop">
                <div class="img-loop mt-2">
                    <a href="<?php the_permalink(); ?>">
                        <img class="img-fluid w-100 rounded" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" alt="Portada playlist">
                    </a>
                    <div class="div-play">
                        <a href="<?php the_permalink(); ?>">
                            <button class="btn btn-play rounded-circle">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="40" fill="currentColor" class="bi bi-play-fill" viewBox="0 0 16 16">
                                    <path d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z"/>
                                </svg>
                            </button>
                        </a>
                    </div>
                </div>
                <div class="content-loop mt-3">
                    <a href="<?php the_permalink(); ?>">
                        <h4><?php echo get_the_title(); ?></h4>
                    </a>
                    <a href="<?php the_permalink(); ?>">
                        <div class="div-content"><?php the_content(); ?></div>
                    </a>
                </div>
            </div>
        </div>
        
    <?php endwhile; endif; wp_reset_query()/*resetea la query para que empieze de 0*/; $wp_query = $temp //empieza de nuevo el loop?>

</section>
<!------seccion contacto---->