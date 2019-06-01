<?php get_header( 'mini' ) ?>
	<!-- BEGIN DETAIL OF BLOG PAGE -->
	<div class="noidungtin">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 cottrai">
					<?php
						if ( has_post_thumbnail() ) { // nếu có ảnh thì in ra ảnh
							the_post_thumbnail(); // hàm in ra ảnh
						} else { // thay ảnh mặc định nếu bài viết chưa có ảnh
					?>
						<img src="<?php bloginfo('stylesheet_directory') ?>/images/change.JPG" class="img-responsive" alt="">
					<?php } ?>
					<h3 class="tieudecttin"><?php the_title() ?></h3>
					<?php
					while (have_posts()) {
						the_post();
					?>
					<div class="thongtinbaiviet">
						<i><?php the_date() ?></i> post by <span class="tacgia"><b><?php the_author() ?></b></span>
					</div>
					<div class="noidungchitiet">
						<?php the_content() ?>
					</div>
					<div class="comment">
						<h3 class="vienxanh">Comments (30)</h3>
						<div class="ndcomments">
							<div class="ttcomment">
								<div class="col-sm-6 nguoidang">
									<div class="anhava">
										<img src="https://vntrip.cdn.vccloud.vn/cam-nang/wp-content/uploads/2017/11/1-9.png" class="img-responsive pull-left" alt="">
									</div>
									<div class="tennguoi">John Smith</div>
									<div class="thoigiandang">50p</div>
								</div>
								<div class="col-sm-6 nut text-right">
									<div class="btn btn-default nutreply">Reply</div>
								</div>
							</div>
							<div class="textcomment">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</div>
						</div>
					</div>
					<?php } ?>
				</div><!-- end cot trai -->
				<div class="col-sm-4 cotphai wow bounceInUp" data-wow-delay="0.3s">
					<?php get_sidebar() ?>
				</div>
			</div>
		</div>
	</div>
	<!-- END DETAIL OF BLOG PAGE -->
<?php get_footer() ?>