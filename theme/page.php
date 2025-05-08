<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default. Please note that
 * this is the WordPress construct of pages: specifically, posts with a post
 * type of `page`.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mellow-fido
 */

get_header();
?>

<section id="primary">
  <main id="main">
    <?php
      if (is_front_page()) : // Check if this is the homepage
        // Display the hero slider
        get_template_part('template-parts/layout/hero', 'slider');

        get_template_part('template-parts/layout/home', 'intro');
    ?>

    <section class="py-16 md:py-24">
      <div class="container mx-auto px-4">
        <h2 class="text-3xl md:text-4xl font-bold mb-4 text-center text-green-800 fade-in-delay-2 fade-in">Best Sellers
        </h2>
        <p class="text-xl mb-12 text-center max-w-3xl mx-auto">Discover our most popular CBD products that pet owners
          trust for their furry companions</p>


        <?php
            $args = array(
                'post_type' => 'product', // Replace 'products' with your custom post type slug
                'posts_per_page' => 3, // Limit to 3 posts
                'order' => 'DESC', // Order by descending (latest first)
                'orderby' => 'date', // Order by date
            );

            $query = new WP_Query($args);

          if ($query->have_posts()) : ?>
        <div class="grid md:grid-cols-3 gap-8">
          <?php while ($query->have_posts()) : $query->the_post(); ?>
          <div
            class="product-card bg-beige-custom rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-all duration-300 transform hover:-translate-y-1 fade-in-delay-3 fade-in">
            <div class="relative">
              <?php
                  $image = get_field('image'); 
                  if ($image) : 
                ?>
              <img class="w-full h-64 object-cover" src="<?php echo esc_url($image['url']); ?>"
                alt="<?php echo esc_attr($image['alt']); ?>" />
              <?php endif; ?>
              <div class="absolute top-4 right-4 bg-amber-600 text-white text-sm font-bold px-3 py-1 rounded-full">
                Best
                Seller</div>
            </div>
            <div class="p-6">
              <h3 class="text-xl font-bold mb-2"><?php the_title(); ?></h3>
              <div class="flex items-center mb-2">
                <div class="flex text-amber-400">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor"
                    stroke="none">
                    <polygon
                      points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                    </polygon>
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor"
                    stroke="none">
                    <polygon
                      points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                    </polygon>
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor"
                    stroke="none">
                    <polygon
                      points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                    </polygon>
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor"
                    stroke="none">
                    <polygon
                      points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                    </polygon>
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor"
                    stroke="none">
                    <polygon
                      points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                    </polygon>
                  </svg>
                </div>
                <span class="ml-1 text-sm text-gray-600">142 reviews</span>
              </div>
              <?php if ($description = get_field('description')) : ?>
              <p class="mb-4"> <?= esc_html($description); ?></p>
              <?php endif; ?>
              <div class="flex justify-between items-center price-wrapper">
                <?php if ($price = get_field('price')) : ?>
                <span class="text-xl font-bold text-green-800"><?= esc_html($price); ?></span>
                <?php endif; ?>
                <a href="<?php the_permalink(); ?>"
                  class="inline-flex items-center justify-center h-10 px-4 font-medium text-white transition-colors bg-green-700 rounded-md hover:bg-green-800 focus:outline-none">View
                  Product</a>
              </div>
            </div>
          </div>
          <?php endwhile; ?>
        </div>
        <?php
              wp_reset_postdata();
          else :
              echo '<p>No products found.</p>';
          endif;
          ?>


        <div class="text-center mt-12">
          <a href="/products"
            class="inline-flex items-center justify-center h-12 px-8 font-medium text-white transition-colors bg-green-700 rounded-md hover:bg-green-800 focus:outline-none">
            View All Products
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ml-2">
              <path d="M5 12h14"></path>
              <path d="m12 5 7 7-7 7"></path>
            </svg>
          </a>
        </div>
      </div>
    </section>

    <?php
        else : // If not the homepage, display the page content normally
        ?>




    <?php

        /* Start the Loop */
        while (have_posts()) :
            the_post();

            get_template_part('template-parts/content/content', 'page');

            // If comments are open, or we have at least one comment, load the comment template.
            if (comments_open() || get_comments_number()) {
                comments_template();
            }

        endwhile; // End of the loop.
      endif;

        ?>
  </main><!-- #main -->
</section><!-- #primary -->

<?php
get_footer();