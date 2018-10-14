<?php
$titlepage = single_term_title("",false);
include( TEMPLATEPATH . '/libs/head.php');
?>
</head>
<body id="top">
	<?php include( TEMPLATEPATH . '/libs/header.php'); ?>
	<div id="container">
		<div class="clearfix">
			<div id="mainContent">
				<?php
				// get current category
				$current_term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
				?>
				<h2><?php echo $current_term->name; ?></h2>
				<ul>
					<?php
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					query_posts($query_string . '&orderby=post_date&order=desc&posts_per_page=10&paged=' . $paged);
					if(have_posts()): while(have_posts()) : the_post();
					?>
						<li><a href="<?php the_permalink(); ?>"><?php the_title();?></a></li>
					<?php endwhile;endif;?>
				</ul>
				<!-- /#maincontent -->
			</div>
		</div>
		<!-- /#container -->
	</div>
	<!-- Footer -->
	<?php include( TEMPLATEPATH . '/libs/footer.php'); ?>
<!-- End Document -->
</body>
</html>
