<?php get_header( 'mini' ) ?>
<?php
	$tinso1 = new WP_Query(array(
		'post_type'=>'post',
		'category_name'=>'ngoi-sao',
		'posts_per_page'=>1,
	));
?>
<div class="container">
	<div class="row">
		<?php
			while ($tinso1->have_posts()) {
				$tinso1->the_post();
		?>
		<div class="tinto">
			<div class="col-sm-6">
				<?php the_post_thumbnail( 'large' ) ?>
			</div>
			<div class="col-sm-6">
				<h3>
					<a href="<?php the_permalink() ?>" title="">
						<?php the_title() ?>
					</a>
				</h3>
				<div class="trichdan">
					<?php the_excerpt() ?>
				</div>
			</div>
		</div><!-- .tinto -->
		<?php } ?>
	</div><!-- .row -->
	<hr>
	<div class="row">
		<div class="_3tin">
			<?php
				wp_reset_postdata(); // reset cai cu
				$_3tinnhohon = new WP_Query(array(
					'post_type'=>'post', // lấy ra dữ liệu bài post
					'category_name'=>'ngoi-sao', // kiểu dữ liệu ngôi sao
					'posts_per_page'=>3, // lấy ra 3 bài
					'offset'=>1 // bỏ qua 1 bài
				));
				while ($_3tinnhohon->have_posts()) {
					$_3tinnhohon->the_post();
			?>
			<div class="col-sm-4">
				<?php the_post_thumbnail() ?>
				<h4><a href="<?php the_permalink() ?>" title=""><?php the_title() ?></a></h4>
			</div>
			<?php } ?>
		</div><!-- ._3tin -->
	</div><!-- .row -->
	<hr>
	<div class="row">
		<div class="_1tink14">
			<div class="col-sm-12">
				<?php
					wp_reset_postdata(); // reset cai cu
					$cactinkhac = new WP_Query(array(
						'post_type'=>'post', // lấy ra dữ liệu bài post
						'category_name'=>'ngoi-sao', // kiểu dữ liệu ngôi sao
						'posts_per_page'=>6, // lấy ra 6 bài
						'offset'=>4 // bỏ qua 4 bài
					));
					while ($cactinkhac->have_posts()) {
						$cactinkhac->the_post();
				?>
				<div class="row">
					<div class="col-sm-4">
						<?php the_post_thumbnail() ?>
					</div><!-- .col-sm-4 -->
					<div class="col-sm-8">
						<h5>
							<a href="<?php the_permalink() ?>" title="">
								<?php the_title() ?>
							</a>
						</h5>
						<div class="trichdan2">
							<?php the_excerpt() ?>
						</div>
					</div><!-- .col-sm-8 -->
				</div><!-- .row -->
				<hr>
				<?php } ?>				
			</div><!-- .col-sm-12 -->
		</div><!-- ._1tink14 -->
	</div><!-- .row -->
</div>
<?php get_footer() ?>