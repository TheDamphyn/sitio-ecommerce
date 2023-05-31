<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ecommerce
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	<link href="https://http2.mlstatic.com/frontend-assets/ml-web-navigation/ui-navigation/5.21.22/mercadolibre/favicon.svg" rel="icon" data-head-react="true">
</head>

<body <?php body_class('body-ecommerce'); ?>>
<?php wp_body_open(); ?>
<div id="page" class="container-fluid">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'ecommerce' ); ?></a>

	<header id="masthead" class="header-ecommerce row">
		<div class="col-12">
			<div class="d-flex justify-content-around">
				<div class="nav-logo">
					<?php the_custom_logo(); ?>
				</div>

				<?php if(is_active_sidebar('form_busqueda_uno')):
					dynamic_sidebar('form_busqueda_uno'); endif; ?>

				<div class="nav-promocion">
					<a href="https://www.mercadolibre.cl/suscripciones/nivel-6#origin=banner-menu&me.flow=-1&me.bu=3&me.audience=all&me.content_id=MLC_BM_LOYALTY50__L1-5&me.component_id=banner_menu_web_ml&me.logic=user_journey&me.position=0&me.bu_line=26">
						<img src="https://http2.mlstatic.com/D_NQ_757831-MLA69342170755_052023-OO.webp" alt="Suscríbete al nivel 6 ¡por tan solo $5.990!">
					</a>
				</div>
			</div>
			<div class="d-flex justify-content-between">
				<div class="nav-ubicacion">
					<a href="#">
						<span>Ingresa tu</span>
						<span>Ubicación</span>
					</a>
				</div>
				<div class="nav-menu">
					<nav id="site-navigation" class="main-navigation">
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'menu-1',
									'menu_id'        => 'primary-menu',
								)
							);
						?>
					</nav><!-- #site-navigation -->
				</div>
			</div>
		</div><!-- .site-branding -->
	</header><!-- #masthead -->
