<?php 
	$tieudephanwelcome = get_field('tieu_de_welcome');
	$motaphanwelcome = get_field('mo_ta_welcome');
 ?>
	<!-- begin welcome -->
	<div class="tieudewelcome">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-sm-push-3 text-center wow slideInLeft" data-wow-delay="1s">
					<h2 class="vienxanh">
						<?php echo $tieudephanwelcome; ?>
					</h2>
					<div class="motawelcome">
						<?php echo $motaphanwelcome; ?>
					</div>
				</div>
			</div><!-- end roww -->
			<div class="row _3cotwelcome wow slideInRight" data-wow-duration="1s" data-wow-delay="2s">
				<?php 
				$thongtinkh = new WP_Query(array('post_type'=>'thong_tin_khoa_hoc'));
				while ($thongtinkh->have_posts()) {
					$thongtinkh -> the_post();

					$tieudelink = get_field('tieu_dề_nut_link_thong_tin_khoa_học');
					$linkttkh = get_field('link_thong_tin_khoa_học');
				 ?>
				<div class="col-sm-4">
					<h3 class="vienxanh">
						<a href="<?php the_permalink() ?>" title="">
							<?php the_title() ?>
						</a>
					</h3>
					<div class="noidung1cot">
						<?php the_content() ?>
					</div>
					<a href="<?php echo $linkttkh; ?>" class="nutwelcome btn btn-default"><?php echo $tieudelink; ?></a>
				</div>
				<?php } wp_reset_query() ?>
			</div>
		</div><!-- end tieudewelcome -->
	</div>
	<!-- end welcome -->