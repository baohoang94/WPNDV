<?php 
// phần recent work
wp_reset_query();
$tieudetokhoisanpham = get_field('tieu_dề_to');
$sanpham = new WP_Query(array('post_type'=>'san_pham'));
 ?>
	<!-- begin work -->
	<div class="work">
		<div class="container">
			<div class="row tieudework text-center wow swing">
				<div class="col-sm-12">
					<h2 class="vienxanh chungan"><?php echo $tieudetokhoisanpham; ?></h2>
				</div>
			</div>
			<div class="row works wow bounceInUp">
				<?php 
				while ($sanpham->have_posts()) {
					$sanpham->the_post();
					$duongdan = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
				 ?>
				<div class="col-sm-6">
					<a href="<?php /*echo $duongdan[0];*/ the_permalink() ?>" class="_1sanpham">
						<?php the_post_thumbnail(); ?>
						<span class="thongtinsanpham">
							<h4 class="tensanpham"><?php the_title(); ?></h4>
							<div class="danhmucsanpham">
								<?php 
									$danhmuc = get_the_terms( $post->ID, 'danh_muc_san_pham' );
									if (!empty($danhmuc)) {
										foreach ($danhmuc as $phantu) {
											echo $phantu->name;
										}
									}
								 ?>
							</div>
						</span>
					</a>
				</div>
				<?php } ?>
				
			</div>
		</div>
	</div>
	<!-- end work -->