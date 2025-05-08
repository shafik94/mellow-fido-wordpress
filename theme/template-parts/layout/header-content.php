<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mellow-fido
 */

?>
<header class="fixed  top-0 left-0 right-0 z-50 transition-all duration-300 ease-in-out py-4" id="header">
  <div class="container mx-auto px-4 flex items-center justify-between">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"
      class="flex items-center space-x-2 transition-all duration-300 text-beige-custom scale-100" id="logo">
      <?php
        if (function_exists('the_custom_logo') && has_custom_logo()) {
            $custom_logo_id = get_theme_mod('custom_logo'); // Get the logo ID
            $logo = wp_get_attachment_image_src($custom_logo_id, 'full'); // Get the logo URL
            if ($logo) {
                echo '<img src="' . esc_url($logo[0]) . '" alt="' . esc_attr(get_bloginfo('name')) . '" class="custom-logo">';
            }
        }
        ?>
      <span class="font-bold font-forum color-beige-custom text-xl"><?php bloginfo( 'name' ); ?></span>
    </a>

    <nav class="hidden md:block" id="desktop-nav">
      <?php
        wp_nav_menu(array(
            'theme_location' => 'primary', // Register this location in functions.php
            'container' => false, // Remove the default <div> wrapper
            'menu_class' => 'flex space-x-8', // Add the desired classes to the <ul>
            'link_before' => '<span class="font-semibold uppercase transition-all duration-300 hover:opacity-75 
             text-base py-2">', // Add classes to <a>
            'link_after' => '</span>',
            'fallback_cb' => false, // Disable fallback to a default menu
        ));
       ?>
    </nav>

    <button class="md:hidden focus:outline-none text-white" id="mobile-menu-button" aria-label="Toggle menu">
      <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
        <path d="M4 6h16M4 12h16M4 18h16"></path>
      </svg>
    </button>
  </div>

  <div class="fixed inset-0 z-50 md:hidden bg-white opacity-0 -translate-x-full transition-all duration-300 ease-in-out"
    id="mobile-menu" aria-modal="true" role="dialog">
    <div class="flex flex-col h-full">
      <div class="flex justify-end p-4">
        <button class="text-gray-800 focus:outline-none" aria-label="Close menu">
          <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M6 18L18 6M6 6l12 12"></path>
          </svg>
        </button>
      </div>
      <nav class="flex-1 px-4 py-8">

        <?php
        wp_nav_menu(array(
            'theme_location' => 'primary', // Register this location in functions.php
            'container' => false, // Remove the default <div> wrapper
            'menu_class' => 'space-y-6', // Add the desired classes to the <ul>
            'link_before' => '<span class="block text-green-800 text-2xl uppercase font-medium transform transition-transform duration-300 hover:translate-x-2">', // Add classes to <a>
            'link_after' => '</span>',
            'fallback_cb' => false, // Disable fallback to a default menu
        ));
       ?>

      </nav>
    </div>
  </div>
</header>