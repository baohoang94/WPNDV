	<!-- begin service for about page -->
	<div class="phanservicecuaabout">
		<?php
			$anhslideabout1 = get_field('ảnh_số_1_slide');
			$anhslideabout2 = get_field('ảnh_số_2_slide');
			$anhslideabout3 = get_field('ảnh_số_3_slide');
			$anhdichvu1 = get_field('ảnh_dịch_vụ_1');
			$anhdichvu2 = get_field('ảnh_dịch_vụ_2');
			$anhdichvu3 = get_field('ảnh_dịch_vụ_3');
			$tieudedichvu1 = get_field('Tieu_de_dich_vu_1');
			$tieudedichvu2 = get_field('tieu_dề_dịch_vụ_2');
			$tieudedichvu3 = get_field('tieu_dề_dịch_vụ_3');
			$noidungdichvu1 = get_field('nội_dung_dịch_vụ_1');
			$noidungdichvu2 = get_field('nội_dung_dịch_vụ_2');
			$noidungdichvu3 = get_field('nội_dung_dịch_vụ_3');
		?>
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<div id="slidedichvuabout" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">
							<?php if (!empty($anhslideabout1)) { ?>
								<div class="item active">
									<img alt="<?php echo $anhslideabout1['title'] ?>" src="<?php echo $anhslideabout1['url'] ?>">
								</div>
							<?php } ?>
							<?php if (!empty($anhslideabout2)) { ?>
								<div class="item">
									<img alt="<?php echo $anhslideabout2['title'] ?>" src="<?php echo $anhslideabout2['url'] ?>">
								</div>
							<?php } ?>
							<?php if (!empty($anhslideabout3)) { ?>
								<div class="item">
									<img alt="<?php echo $anhslideabout3['title'] ?>" src="<?php echo $anhslideabout3['url'] ?>">
								</div>
							<?php } ?>
						</div>
						<a class="left carousel-control" href="#slidedichvuabout" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
						<a class="right carousel-control" href="#slidedichvuabout" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
					</div><!-- end slide -->
				</div>
				<div class="col-sm-6 dichvuphai">
					<?php if ( !empty($anhdichvu1) || !empty($tieudedichvu1) || !empty($noidungdichvu1) ) { ?>
						<div class="_1dichvuanout wow bounceInUp">
							<div class="row">
								<div class="col-sm-3">
									<img src="<?php echo $anhdichvu1['url'] ?>" alt="<?php echo $anhdichvu1['title'] ?>" class="img-responsive">
								</div>
								<div class="col-sm-9">
									<h4 class="vienxanh"><?php echo $tieudedichvu1 ?></h4>
									<p>
										<?php echo $noidungdichvu1; ?>
									</p>
								</div>
							</div>
						</div> <!-- end _1dichvuanout -->
					<?php } ?>
					<?php if ( !empty($anhdichvu2) || !empty($tieudedichvu2) || !empty($noidungdichvu2) ) { ?>
						<div class="_1dichvuanout wow bounceInUp">
							<div class="row">
								<div class="col-sm-3">
									<img src="<?php echo $anhdichvu2['url'] ?>" alt="<?php echo $anhdichvu2['title'] ?>" class="img-responsive">
								</div>
								<div class="col-sm-9">
									<h4 class="vienxanh"><?php echo $tieudedichvu2 ?></h4>
									<p>
										<?php echo $noidungdichvu2; ?>
									</p>
								</div>
							</div>
						</div> <!-- end _1dichvuanout -->
					<?php } ?>
					<?php if ( !empty($anhdichvu3) || !empty($tieudedichvu3) || !empty($noidungdichvu3) ) { ?>
						<div class="_1dichvuanout wow bounceInUp">
							<div class="row">
								<div class="col-sm-3">
									<img src="<?php echo $anhdichvu3['url'] ?>" alt="<?php echo $anhdichvu3['title'] ?>" class="img-responsive">
								</div>
								<div class="col-sm-9">
									<h4 class="vienxanh"><?php echo $tieudedichvu3 ?></h4>
									<p>
										<?php echo $noidungdichvu3; ?>
									</p>
								</div>
							</div>
						</div> <!-- end _1dichvuanout -->
					<?php } ?>
				</div> <!-- end col-sm-6 -->
			</div>
		</div>
	</div>
	<!-- end service for about page -->