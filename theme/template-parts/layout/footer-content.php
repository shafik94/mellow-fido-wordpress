<?php
/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mellow-fido
 */

?>

<footer id="colophon">
  <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
  <aside role="complementary" aria-label="<?php esc_attr_e( 'Footer', 'mellow-fido' ); ?>">
    <?php dynamic_sidebar( 'sidebar-1' ); ?>
  </aside>
  <?php endif; ?>

  <?php if ( has_nav_menu( 'menu-2' ) ) : ?>
  <nav aria-label="<?php esc_attr_e( 'Footer Menu', 'mellow-fido' ); ?>">
    <?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-2',
					'menu_class'     => 'footer-menu',
					'depth'          => 1,
				)
			);
			?>
  </nav>
  <?php endif; ?>
</footer><!-- #colophon -->

<footer class="bg-green-800 text-white pt-16 pb-8">
  <div class="container mx-auto px-4">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
      <!-- Column 1: About -->
      <div class="fade-in-delay-2 fade-in">

        <?php
		$mellow_fido_blog_info_name = get_bloginfo( 'name' );
		if ( ! empty( $mellow_fido_blog_info_name ) ) :
			?>
        <h3 class="text-xl font-bold mb-4">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php $mellow_fido_blog_info_name; ?></a>
        </h3>
        <?php
		endif;

		?>
        <p class="mb-4 text-green-100 leading-relaxed">Premium CBD products designed specifically for dogs. Made with
          love in the USA using organic hemp and the highest quality ingredients.</p>
        <div class="flex space-x-4">
          <a href="#" class="text-green-100 hover:text-white transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
            </svg>
          </a>
          <a href="#" class="text-green-100 hover:text-white transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
              <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
              <line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line>
            </svg>
          </a>
          <a href="#" class="text-green-100 hover:text-white transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path
                d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z">
              </path>
            </svg>
          </a>
        </div>
      </div>

      <!-- Column 2: Shop -->
      <div class="fade-in-delay-3 fade-in">
        <h3 class="text-xl font-bold mb-4">Shop</h3>
        <ul class="space-y-2">
          <li><a href="/shop/oils" class="text-green-100 hover:text-white transition-colors">CBD Oils</a></li>
          <li><a href="/shop/treats" class="text-green-100 hover:text-white transition-colors">CBD Treats</a></li>
          <li><a href="/shop/topicals" class="text-green-100 hover:text-white transition-colors">Topicals</a></li>
          <li><a href="/shop/bundles" class="text-green-100 hover:text-white transition-colors">Value Bundles</a></li>
          <li><a href="/shop/new" class="text-green-100 hover:text-white transition-colors">New Arrivals</a></li>
        </ul>
      </div>

      <!-- Column 3: Learn -->
      <div class="fade-in-delay-1 fade-in">
        <h3 class="text-xl font-bold mb-4">Learn</h3>
        <ul class="space-y-2">
          <li><a href="/about" class="text-green-100 hover:text-white transition-colors">Our Story</a></li>
          <li><a href="/blog" class="text-green-100 hover:text-white transition-colors">Blog</a></li>
          <li><a href="/faq" class="text-green-100 hover:text-white transition-colors">FAQs</a></li>
          <li><a href="/testimonials" class="text-green-100 hover:text-white transition-colors">Testimonials</a></li>
          <li><a href="/contact" class="text-green-100 hover:text-white transition-colors">Contact Us</a></li>
        </ul>
      </div>

      <!-- Column 4: Newsletter -->
      <div class="fade-in-delay-2 fade-in">
        <h3 class="text-xl font-bold mb-4">Subscribe</h3>
        <p class="text-green-100 mb-4">Join our pack! Get updates on new products, special offers, and canine wellness
          tips.</p>
        <form class="mb-4">
          <div class="flex">
            <input type="email" placeholder="Your email address"
              class="flex-grow px-4 py-2 rounded-l-md focus:outline-none text-gray-800">
            <button type="submit" class="bg-amber-600 hover:bg-amber-700 px-4 py-2 rounded-r-md transition-colors">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="m22 2-7 20-4-9-9-4Z"></path>
                <path d="M22 2 11 13"></path>
              </svg>
            </button>
          </div>
        </form>
        <p class="text-sm text-green-200">We respect your privacy. Unsubscribe at any time.</p>
      </div>
    </div>

    <div class="border-t border-green-700 pt-8">
      <div class="flex flex-col md:flex-row justify-between items-center">
        <p class="text-green-200 text-sm mb-4 md:mb-0">© 2025 Mello Fido CBD. All rights reserved.</p>
        <div class="flex flex-wrap justify-center space-x-4 text-sm text-green-200">
          <a href="/terms" class="hover:text-white transition-colors mb-2 md:mb-0">Terms of Service</a>
          <a href="/privacy" class="hover:text-white transition-colors mb-2 md:mb-0">Privacy Policy</a>
          <a href="/shipping" class="hover:text-white transition-colors mb-2 md:mb-0">Shipping Policy</a>
          <a href="/returns" class="hover:text-white transition-colors">Returns</a>
        </div>
      </div>
      <p class="text-xs text-green-300 text-center mt-6">These statements have not been evaluated by the FDA. These
        products are not intended to diagnose, treat, cure, or prevent any disease.</p>
    </div>
  </div>
</footer>