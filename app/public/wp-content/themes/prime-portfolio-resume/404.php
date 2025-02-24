<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package prime_portfolio_resume
 */


    ?>
    <?php get_header(); ?>
	   <main id="main" class="site-main" role="main">
		    <div class="error-holder">
		        <?php 
		        // Check if custom 404 image is set
		        $prime_portfolio_resume_image_url = get_theme_mod('404_page_image', '');
		        if ($prime_portfolio_resume_image_url) : ?>
		            <img src="<?php echo esc_url($prime_portfolio_resume_image_url); ?>" alt="404 Image">
		        <?php endif; ?>
		        	<h1><?php echo esc_html(get_theme_mod('404_pagefirst_header', __('404', 'prime-portfolio-resume'))); ?></h1>
					<h2><?php echo esc_html(get_theme_mod('404_page_header', __('Sorry, that page can\'t be found!', 'prime-portfolio-resume'))); ?></h2>

		        <p class="btn-green mt-3 mb-0">
		            <a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Homepage', 'prime-portfolio-resume'); ?></a>
		        </p>
		    </div>
		</main>

    <?php get_footer(); ?>
    <?php