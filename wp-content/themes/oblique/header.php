<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Oblique
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) : ?>
	<?php if ( get_theme_mod( 'site_favicon' ) ) : ?>
		<link rel="shortcut icon" href="<?php echo esc_url( get_theme_mod( 'site_favicon' ) ); ?>" />
	<?php endif; ?>
<?php endif; ?>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

    <div class="navigation-top">
        <div class="wrap">

            <nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'oblique' ); ?>">
                <div class="custom_logo_image animated fadeIn">
                    <?php the_custom_logo(); ?>
                </div>

                <?php wp_nav_menu( array(
                    'theme_location' => 'top',
                    'menu_id'        => 'top-menu',
                    'menu_class' =>'menu--horatio animated fadeIn',
                ) ); ?>

            </nav><!-- #site-navigation -->

        </div><!-- .wrap -->
    </div><!-- .navigation-top -->


	<?php do_action( 'oblique_nav_container' ); ?>
	<header id="masthead" class="site-header" role="banner">
		<div class="overlay"></div>
		<div class="container">
			<div class="site-branding">


				<?php  /* Show only site title and description */ ?>
					<h1 class="header-title animated fadeInDown">CZY PAMIĘTAJĄ PAŃSTWO O WIZERUNKU W SIECI?</h1>
					<h2 class="site-description animated fadeInLeft">Naszą specjalnością jest projektowanie stron www </h2>
                    <h3 class="site-description animated fadeInRight"><?php bloginfo( 'description' ); ?></h3>

			</div><!-- .site-branding -->
		</div>
		<div class="svg-container header-svg svg-block">
			<?php oblique_svg_1(); ?>
		</div>		
	</header><!-- #masthead -->

	<div id="content" class="site-content">
		<div class="container content-wrapper">

            <script>

                $ = jQuery;
                $( document ).ready(function() {
                    Scroller();
                });


                $(window).scroll(function() {
                    Scroller();
                });

                function Scroller()
                {
                    if ($(document).scrollTop() > 50) {
                        $('div.navigation-top').addClass('shrink site-navigation-fixed');
                        $('.custom-logo-link img')
                            .attr('srcset','<?php bloginfo('template_directory');?>/images/logo_black.png');

                    } else {
                        $('div.navigation-top').removeClass('shrink site-navigation-fixed');
                        $('.custom-logo-link img')
                            .attr('srcset','<?php bloginfo('template_directory');?>/images/logo_white.png');
                    }
                }

            </script>
