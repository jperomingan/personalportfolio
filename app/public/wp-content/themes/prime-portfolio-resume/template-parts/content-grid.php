<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package prime_portfolio_resume
 */
$prime_portfolio_resume_heading_setting  = get_theme_mod( 'prime_portfolio_resume_post_heading_setting' , true );
$prime_portfolio_resume_meta_setting  = get_theme_mod( 'prime_portfolio_resume_post_meta_setting' , true );
$prime_portfolio_resume_image_setting  = get_theme_mod( 'prime_portfolio_resume_post_image_setting' , true );
$prime_portfolio_resume_content_setting  = get_theme_mod( 'prime_portfolio_resume_post_content_setting' , true );
$prime_portfolio_resume_read_more_setting = get_theme_mod( 'prime_portfolio_resume_read_more_setting' , true );
$prime_portfolio_resume_read_more_text = get_theme_mod( 'prime_portfolio_resume_read_more_text', __( 'Read More', 'prime-portfolio-resume' ) );
?>

<div class="col-lg-4 col-md-6">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<?php if ( $prime_portfolio_resume_heading_setting ) { 
				if ( is_single() ) {
					the_title( '<h1 class="entry-title" itemprop="headline">', '</h1>' );
				} else {
					the_title( '<h2 class="entry-title" itemprop="headline"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				}
			} ?>

			<?php if ( 'post' === get_post_type() && $prime_portfolio_resume_meta_setting ) { ?>
				<div class="entry-meta">
					<?php prime_portfolio_resume_posted_on(); ?>
				</div><!-- .entry-meta -->
			<?php } ?>
		</header><!-- .entry-header -->

		<?php if ( $prime_portfolio_resume_image_setting ) { ?>
			<?php echo ( !is_single() ) ? '<a href="' . esc_url( get_the_permalink() ) . '" class="post-thumbnail">' : '<div class="post-thumbnail">'; ?>

			<?php if ( has_post_thumbnail() ) {
				if ( is_active_sidebar( 'right-sidebar' ) ) {
					the_post_thumbnail( 'prime-portfolio-resume-with-sidebar', array( 'itemprop' => 'image' ) );
				} else {
					the_post_thumbnail( 'prime-portfolio-resume-without-sidebar', array( 'itemprop' => 'image' ) );
				}
			} else { ?>
				<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/images/default-header.png' ); ?>" alt="Default Image">
			<?php } ?>

			<?php echo ( !is_single() ) ? '</a>' : '</div>'; ?>
		<?php } ?>

		<?php if ( $prime_portfolio_resume_content_setting ) { ?>
			<div class="entry-content" itemprop="text">
				<?php
				if ( is_single() ) {
					the_content(
						sprintf(
							wp_kses(
								__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'prime-portfolio-resume' ),
								array( 'span' => array( 'class' => array() ) )
							),
							'<span class="screen-reader-text">"' . get_the_title() . '"</span>'
						)
					);
				} else {
					the_excerpt();
				}

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'prime-portfolio-resume' ),
					'after'  => '</div>',
				) );
				?>
			</div><!-- .entry-content -->
		<?php } ?>

		<?php if ( !is_single() && $prime_portfolio_resume_read_more_setting ) { ?>
			<div class="read-more-button">
				<a href="<?php echo esc_url( get_permalink() ); ?>" class="read-more-button"><?php echo esc_html( $prime_portfolio_resume_read_more_text ); ?></a>
			</div>
		<?php } ?>
	</article><!-- #post-## -->
</div>
