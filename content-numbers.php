<?php 
	// code cho phần number
	wp_reset_query();
	$tenso1 = get_field('ten_của_truờng_số_1');
	$solieu1 = get_field('con_số_của_truờng_số_1');
	$tenso2 = get_field('ten_của_truờng_số_2');
	$solieu2 = get_field('con_số_của_truờng_số_2');
	$tenso3 = get_field('ten_của_truờng_số_3');
	$solieu3 = get_field('con_số_của_truờng_số_3');
	$tenso4 = get_field('ten_của_truờng_số_4');
	$solieu4 = get_field('con_số_của_truờng_số_4');
?>
	<!-- begin number -->
	<div class="numbers wow bounceInUp">
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="conso">
						<div class="so"><?php echo $solieu1; ?></div>
						<div class="chun"><?php echo $tenso1; ?></div>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="conso">
						<div class="so"><?php echo $solieu2; ?></div>
						<div class="chun"><?php echo $tenso2; ?></div>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="conso">
						<div class="so"><?php echo $solieu3; ?></div>
						<div class="chun"><?php echo $tenso3; ?></div>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="conso">
						<div class="so"><?php echo $solieu4; ?></div>
						<div class="chun"><?php echo $tenso4; ?></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end number -->