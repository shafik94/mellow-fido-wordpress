mellow-fido
===========

A custom theme  for Mellow Fido CBD

## Motivation

## Setup and Design Choices

### Why `_tw`?
- I have used LocalWP for the local development of the theme.
I chose `_tw` (Underscore Tailwind) as the foundation for this theme because it combines the simplicity and flexibility of the Underscores starter theme with the power of Tailwind CSS. This allowed me to:
- Use a utility-first CSS framework for rapid prototyping and consistent styling.
- Leverage Tailwind Typography for better typographic control.
- Easily customize the design while maintaining a lightweight and performant theme.

### Design 
The design of the Mellow Fido theme focuses on:
- **Minimalism:** A clean and uncluttered layout to emphasize content and products.
- **Accessibility:** Ensuring the site is usable for all users, including those with disabilities.
- **Responsiveness:** Optimized for all devices, from mobile to desktop.
- **Performance:** Lightweight assets and optimized code for fast loading times.

### Image Sources
All images used in this theme were sourced from:
- **Stock Image Platforms:** High-quality images were obtained from platforms like [Unsplash](https://unsplash.com/) and [Pexels](https://www.pexels.com/).
- **Custom Photography:** Some images were provided by the Mellow Fido team to reflect the brand's unique identity.


### Installation of Theme

1. Move the generated  folder to `wp-content/themes` in your local development environment
2. Run `npm install && npm run dev` in this folder
3. Activate this theme in your local WordPress installation

### Development

4. Run `npm run watch`
5. Add [Tailwind utility classes](https://tailwindcss.com/docs/utility-first) with abandon

### Deployment

6. Run `npm run bundle`
7. Upload the resulting zip file to your site using the “Upload Theme” button on the “Add Themes” administration page

Or [deploy with the tool of your choice](https://underscoretw.com/docs/deployment/#h-other-deployment-options)!

## Full Documentation

### Fundamentals

* [Installation](https://underscoretw.com/docs/installation/)  
  Generate your custom theme, install it in WordPress and run your first Tailwind builds
* [Development](https://underscoretw.com/docs/development/)  
  Watch for changes, build for production and learn more about how _tw, WordPress and Tailwind work together
* [Deployment](https://underscoretw.com/docs/deployment/)  
  Share your new WordPress theme with the world
* [Troubleshooting](https://underscoretw.com/docs/troubleshooting/)  
  Find solutions to potential issues and answers to frequently asked questions

### In Depth

* [Using Tailwind Typography](https://underscoretw.com/docs/tailwind-typography/)  
  Customize front-end and back-end typographic styles
* [JavaScript Bundling with esbuild](https://underscoretw.com/docs/esbuild/)  
  Install and bundle JavaScript libraries (very quickly)
* [Adding custom fonts](https://underscoretw.com/docs/custom-fonts/)
  Host your fonts yourself or use a third party—and then add those fonts to your WordPress theme
* [Linting and Code Formatting](https://underscoretw.com/docs/linting-code-formatting/)  
  Catch bugs and stop thinking about formatting
* [Keeping your theme up-to-date](https://underscoretw.com/docs/updating/)
  How to update (and whether or not you should)

### Extras

* [On Tailwind and WordPress](https://underscoretw.com/docs/wordpress-tailwind/)  
  Understand how WordPress and Tailwind work together
* [Styling HTML from outside the theme](https://underscoretw.com/docs/styling-html-from-outside-the-theme/)
  Work with WordPress core, plugins and JavaScript libraries
* [Managing Styles for Custom Blocks](https://underscoretw.com/docs/custom-blocks/)  
  Learn strategies for using Tailwind in theme-specific custom blocks
* [Setting Up Browsersync](https://underscoretw.com/docs/browsersync/)  
  Add live reloads and synchronized cross-device testing to your workflow
