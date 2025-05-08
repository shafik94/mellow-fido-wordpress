<?php
/**
 * Template part for displaying pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mellow-fido
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <header class="products-header-container">
    <div class="slide active h-full bg-cover bg-center"
      style="background-image: url('<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'full')); ?>')">
      <div class="absolute inset-0 bg-black opacity-40"></div>
      <div class="container mx-auto px-4 h-full flex items-center">
        <div class="relative z-10 max-w-xl text-white">
          <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-4"> <?php the_title(); ?></h1>
          <p class="text-xl mb-6"><?php the_excerpt(); ?></p>
        </div>
      </div>
    </div>
  </header>

  <div <?php mellow_fido_content_class( 'entry-content' ); ?>>
    <?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div>' . __( 'Pages:', 'mellow-fido' ),
				'after'  => '</div>',
			)
		);
		?>
  </div><!-- .entry-content -->


</article><!-- #post-<?php the_ID(); ?> -->