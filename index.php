<?php get_header('mini') ?>
	<!-- BEGIN CONTENT OF BLOG PAGE -->
	<div class="blogcontent">
		<div class="container">
			<div class="row">
				<?php
				if ( have_posts() ) :

					if ( is_home() && ! is_front_page() ) :
						?>
						<header>
							<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
						</header>
						<?php
					endif;

					/* Start the Loop */
					while ( have_posts() ) :
						the_post();

						/*
						 * Include the Post-Type-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content', get_post_type() );

					endwhile;

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif;
				?>
			</div><!-- end row -->
			<div class="row">
				<div class="col-sm-12">
					<div class="phantrang">
						<ul class="pagination">
							<?php the_posts_pagination( array(
							    'mid_size' => 2,
							    'prev_text' => __( '&laquo;', 'textdomain' ),
							    'next_text' => __( '&raquo;', 'textdomain' ),
							) ); ?>
						</ul>
					</div>
				</div>
			</div>
		</div><!-- end container -->
	</div>
	<!-- END CONTENT OF BLOG PAGE -->
<?php get_footer() ?>