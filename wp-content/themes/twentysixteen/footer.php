<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
			</div>
		</div><!-- .site-content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<?php if ( has_nav_menu( 'social' ) ) : ?>
				<nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'twentysixteen' ); ?>">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'social',
							'menu_class'     => 'social-links-menu',
							'depth'          => 1,
							'link_before'    => '<span class="screen-reader-text">',
							'link_after'     => '</span>',
						) );
					?>
				</nav><!-- .social-navigation -->
			<?php endif; ?>

			<div class="container site-info">
				<?php
					/**
					 * Fires before the twentysixteen footer text for footer customization.
					 *
					 * @since Twenty Sixteen 1.0
					 */
					do_action( 'twentysixteen_credits' );
				?>
				<div class="row">
					<div class="col col-sm-3 footer-logo">
						<div class="block block-media">
							<?php twentysixteen_the_custom_logo(); ?>
						</div>
						<div class="block block-text">
							<?php
							$description = get_bloginfo( 'description', 'display' );
							if ( $description || is_customize_preview() ) : ?>
								<p class="site-description"><?php echo $description; ?></p>
							<?php endif; ?>
						</div>
					</div>
					<div class="col col-sm-6 footer-text">
						<div class="block block-nav">
							<?php if ( has_nav_menu( 'secondary' ) ) : ?>
								<nav class="nav-footer" role="navigation" aria-label="<?php esc_attr_e( 'Footer Primary Menu', 'twentysixteen' ); ?>">
									<?php
										wp_nav_menu( array(
											'theme_location' => 'secondary',
											'menu_class'     => 'footer-menu',
										 ) );
									?>
								</nav><!-- .main-navigation -->
							<?php endif; ?>
						</div>
						<div class="block block-text">
							<p>
								<span class="site-title">Copyright 1999-2016 <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>. All rights reserved. LegalMatch,<br>
								the LegalMatch Logo, and the tradedress are trademarks of LegalMatch. Patents Pending.
								<!--<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentysixteen' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentysixteen' ), 'WordPress' ); ?></a>-->
							</p>
						</div>
					</div>
					<div class="col col-sm-3 supported-logo">
						<div class="block block-media">
							<a class="media media-image">
								<img src="<?php echo esc_url( home_url( '/' ) );?>wp-content/uploads/2017/04/support-logo-1.png">
							</a>
						</div>
						<div class="block block-media">
							<a class="media media-image">
								<img src="<?php echo esc_url( home_url( '/' ) );?>wp-content/uploads/2017/04/support-logo-2.png">
							</a>
						</div>
					</div>
				</div><!-- .site-info -->
			</div>
		</footer><!-- .site-footer -->
	</div><!-- .site-inner -->
</div><!-- .site -->

<?php wp_footer(); ?>
</body>
</html>
