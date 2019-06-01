<?php 
// code cho phần the team
wp_reset_query(); // để chắc chắn ko bị lỗi từ phần trên
$tieudeteam = get_field('tieu_dề_to_khối_team'); // dành cho trang chủ
$tieudeteamabout = get_field('tieudeteam'); // dành cho trang about
$team = new WP_Query(array('post_type'=>'nhan_vien'));
 ?>
 	<!-- begin the team -->
	<div class="theteam">
		<div class="container">
			<div class="row tieudework text-center wow swing">
				<div class="col-sm-12">
					<h2 class="vienxanh chungan"><?php echo $tieudeteam , $tieudeteamabout; ?></h2>
				</div>
			</div>
			<div class="row">
				<?php 
				while ($team->have_posts()) {
					$team->the_post();
					$vitricty = get_field('vị_tri_trong_cong_ty');
				 ?>
				<div class="col-sm-3 wow bounceInUp" data-wow-delay="0s">
					<a href="" class="_1sanpham _1team">
						<?php the_post_thumbnail(); ?>
						<span class="thongtinsanpham">
							<h4 class="tensanpham"><?php the_title(); ?></h4>
							<div class="danhmucsanpham"><?php echo $vitricty; ?></div>
						</span>
					</a>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
	<!-- end the team -->