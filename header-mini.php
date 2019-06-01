<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BaoHoang94
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory') ?>/vendor/bootstrap.js"></script>
	<script src="<?php bloginfo('stylesheet_directory') ?>/vendor/wow.min.js"></script>
	<script src="<?php bloginfo('stylesheet_directory') ?>/js/waypoints.min.js"></script>
	<script src="<?php bloginfo('stylesheet_directory') ?>/js/jquery.counterup.min.js"></script>
	<!-- load thu vien fancybox -->
	<!-- Add mousewheel plugin (this is optional) -->
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory') ?>/js/jquery.mousewheel.pack.js?v=3.1.3"></script>
	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory') ?>/js/jquery.fancybox.pack.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory') ?>/js/jquery.fancybox.css?v=2.1.5" media="screen" />
	<!-- end load thu vien fancybox -->
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory') ?>/1.js"></script>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/vendor/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory') ?>/vendor/animate.css">
	<!-- load google fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
 	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/1.css">
	<?php wp_head(); ?>
</head>

<body class="aboutpage">
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'baohoang94' ); ?></a>
	<?php $anhnen = get_field('anh_slide_trang_chu'); //print_r($anhnen)//lấy ảnh nền ?>
	<!-- header cho trang about o day -->
	<?php $anhnentrangabout = get_field('ảnh_nền_trang_about'); ?>
	<div class="headertren" style="<?php if($anhnentrangabout) echo 'background-image: url(' , $anhnentrangabout['url'] , ')'; ?>">
	    <nav class="navbar navbar-default" role="navigation">
	    	<div class="container">
	    		<!-- Brand and toggle get grouped for better mobile display -->
	    		<div class="navbar-header">
	    			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
	    				<span class="sr-only">Toggle navigation</span>
	    				<span class="icon-bar"></span>
	    				<span class="icon-bar"></span>
	    				<span class="icon-bar"></span>
	    			</button>
	    			<a class="navbar-brand" href="#"><span class="xanh">ZAPO</span> DESIGN</a>
	    		</div>
	    
	    		<!-- Collect the nav links, forms, and other content for toggling -->
	    		<div class="collapse navbar-collapse navbar-ex1-collapse">
	    			<!-- Menu -->
		    		<?php wp_nav_menu(array(
	                    'container' => 'div',
	                    'containre_class' => 'collapse navbar-collapse navbar-ex1-collapse',
	                    'menu_class' => 'nav navbar-nav navbar-right'
		    		)); ?>
					<!-- end menu -->
	    		</div><!-- /.navbar-collapse -->
	    	</div>
	    </nav><!-- end menu tren -->
	    <?php
	    	$tieudenhoabout = get_field('tieu_dề_nhỏ');
	    ?>
	    <!-- begin slide -->
	    <div class="container tieudepage">
	    	<div class="row">
		    	<div class="col-sm-12">
		    		<h3><?php 
						if (is_home()) { // nếu đây là trang tin tức (trang blog)
							echo get_post( get_option( 'page_for_posts' ) )->post_title;
						} elseif (is_category('ngoi-sao')) { // nếu đây là trang danh mục ngôi sao
							single_cat_title();
						} else {
							the_title();
						}
		    		 ?></h3>
		    		<h4><?php echo $tieudenhoabout ?></h4>
		    	</div>
		    </div>
	    </div>
	    <!-- end slide -->
	</div><!-- end heaader -->
	<!-- end header cho trang about o day -->
	<div id="content" class="site-content">
