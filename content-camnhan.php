<?php
	$tdcamnhan = get_field('tieu_dề_cảm_nhận_của_khach_hang');
	$soluong = wp_count_posts( 'cam_nhan_khach_hang' );
	$soluong = $soluong->publish;
	$count = round($soluong/2);
	if ($count > 0) {
?>
<!-- BEGIN REVIEW CUA KHACH HÀNG -->
<div class="review">
	<div class="container">
		<div class="row tieudereview">
			<div class="col-md-12 text-center wow bounceInUp">
				<h2 class="vienxanh chungan"><?php echo $tdcamnhan; ?></h2>
			</div>
		</div>
		<div class="row hieuungreview">
			<div id="carousel-id" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<?php for ($i=1; $i <= $count; $i++) { ?>
						<li data-target="#carousel-id" data-slide-to="<?php echo $i-1 ?>" class="<?php if ($i == 1) echo 'active' ?>"></li>
					<?php } ?>
				</ol>
				<div class="carousel-inner">
					<div class="item active">
						<div class="row _2review">
							<?php
								$review = new WP_Query(array('post_type'=>'cam_nhan_khach_hang'));
								$dem = 1;
								while ($review->have_posts()) {
									$review->the_post();
									
							?>
								<div class="col-sm-6 _1review">
									<div class="row">
										<div class="col-sm-4 anhreview">
											<?php the_post_thumbnail( 'thumbnail' ) ?>
										</div>
										<div class="col-sm-8">
											<h4 class="tenreview"><?php the_title(); ?></h4>
											<div class="chucdanh"><?php echo get_field('vị_tri_cong_tac') ?></div>
											<div class="noidungreview">
												<?php the_content() ?>
											</div>
										</div>
									</div>
								</div>
							<?php
								if ($dem % 2 == 0) {
							?>
						</div><!-- row _2review -->
					</div><!-- item -->
					<div class="item">
						<div class="row _2review">
							<?php } $dem++; ?>
							<?php } ?>
							
				</div>
				<a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
				<a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
			</div>
		</div>
	</div>
</div>
<!-- END REVIEW CUA KHACH HÀNG -->
<?php } ?>