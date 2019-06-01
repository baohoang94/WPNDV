<div class="col-sm-4 wow bounceInUp">
	<artical class="_1tin">
		<a href="<?php the_permalink(); // link bài viết ?>" class="anhtin">
			<?php
				if ( has_post_thumbnail() ) { // nếu có ảnh thì in ra ảnh
					the_post_thumbnail(); // hàm in ra ảnh
				} else { // thay ảnh mặc định nếu bài viết chưa có ảnh
			?>
				<img src="http://ttol.vietnamnetjsc.vn//2018/01/07/11/06/da-tim-ra-danh-tinh-cua-trai-dep-sang-nhat-chung-ket-hhhv-viet-nam_4.jpg" class="img-responsive" alt="">
			<?php } ?>
		</a>
		<div class="ngaythang"><?php the_date(); // ngày tháng ?></div>
		<a href="<?php the_permalink(); // link bài viết ?>" class="tieudetin">
			<?php the_title(); // tiêu đề ?>
		</a>
		<div class="trichdantin">
			<?php the_excerpt(); // trích dẫn ?>
		</div>
		<a href="<?php the_permalink(); // link bài viết ?>" class="xemchitiet">
			Read More <i class="fa fa-long-arrow-right"></i>
		</a>
	</artical>
</div>