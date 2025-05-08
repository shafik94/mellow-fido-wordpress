<?php
/*
Template Name: Products Archive
*/
get_header(); ?>

<main>

  <section>
    <div class="products-header-container">
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
    </div>


    <div class="container mx-auto px-4 py-16 md:py-24">
      <?php
        $query = new WP_Query([
          'post_type' => 'product',
          'posts_per_page' => -1,
          'order' => 'DESC'
        ]);

  if ($query->have_posts()) :
    echo '<div class="grid md:grid-cols-3 gap-8">';
    while ($query->have_posts()) : $query->the_post(); ?>


      <!-- product card template -->
      <div
        class="product-card bg-beige-custom rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-all duration-300 transform hover:-translate-y-1 fade-in-delay-1 fade-in">
        <div class="relative">

          <?php
              $image = get_field('image'); // Replace 'image' with your custom field name
              if ($image) : 
            ?>
          <img class="w-full h-64 object-cover" src="<?php echo esc_url($image['url']); ?>"
            alt="<?php echo esc_attr($image['alt']); ?>" />
          <?php endif; ?>

          <div class="absolute top-4 right-4 bg-green-600 text-white text-sm font-bold px-3 py-1 rounded-full">New
          </div>
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
            <span class="ml-1 text-sm text-gray-600">98 reviews</span>
          </div>

          <?php if ($description = get_field('description')) : ?>
          <p class="mb-4"> <?= esc_html($description); ?></p>
          <?php endif; ?>
          <div class="flex justify-between items-center price-wrapper">
            <?php if ($price = get_field('price')) : ?>
            <span class="text-xl font-bold text-green-800"><?= esc_html($price); ?></span>
            <?php endif; ?>
            <a href="/shop/calming-treats"
              class="inline-flex items-center justify-center h-10 px-4 font-medium text-white transition-colors bg-green-700 rounded-md hover:bg-green-800 focus:outline-none">Add
              to Cart</a>
          </div>
        </div>
      </div>


      <?php endwhile;
    echo '</div>';
    wp_reset_postdata();
  else :
    echo '<p>No products found.</p>';
  endif;
  ?>

    </div>
  </section>
</main>

<?php get_footer(); ?>