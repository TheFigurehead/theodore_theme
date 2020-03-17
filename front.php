<?php
/** Template name: Front page */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php generate_do_microdata( 'body' ); ?>>

    <header class="cr-header">
        <div class="grid-container container">
            <div class="cr_logo">
                <a href="<?=get_home_url()?>">
                    <?=wp_get_attachment_image(get_theme_mod( 'custom_logo' ), 'full')?>
                </a>
            </div>
        </div>
    </header>

    <main class="cr_main">
        <?php get_template_part( 'template-parts/front', 'hero' ); ?>
        <?php get_template_part( 'template-parts/front', 'filter' ); ?>
        <?php get_template_part( 'template-parts/front', 'vehicles' ); ?>
    </main> 

    <footer>
        <?php wp_footer(); ?>
    </footer>
</body>
</html>