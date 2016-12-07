<?php get_header(); ?>
<div class="container">
	<div class="row home_title">
		<div class="col-xs-12 text-center">
			<h1>LẬP TRÌNH GIỎI LÀ CHƯA ĐỦ</h1>	
			<h3>HÃY ĐỌC NHIỀU HƠN</h3>		
		</div>
	</div>
</div>
<?php get_special_posts(3,7); ?>

	<div class="container">
		<section class="row single-page-wrapper">
			<div class="col-sm-8 col-xs-12 category-list-wrapper">
				<div class="group-title-wrapper">
					<div class="group-title">
						<h4>BÀI VIẾT MỚI NHẤT<?php /*single_cat_title();*/ ?></h4>
					</div>		
				</div>

				<div class=" row category-list" id="newest-posts">
					<?php
			    		$paged = (get_query_var('page')) ? get_query_var('page') : 1;
						$wp_query = new WP_Query(array(
						    'post_type' => 'post',
						    'post_status'      => 'publish',
						    'posts_per_page'  => 2,
						    'orderby'          => 'date',
						    'order'            => 'DESC',
						    'paged' => $paged 
						));
					if ( $wp_query->have_posts() ) :     
					    while ($wp_query->have_posts()) :  $wp_query->the_post();
					?>
					 	<div class="col-sm-6 col-xs-12 category-article-item">
							<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
									<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
										<?php the_post_thumbnail('thumbnail'); // Declare pixel size you need inside the array ?>
									</a>
								<?php endif; ?>
								<h4>
									<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
								</h4>
								<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
							</article>
						</div>
						 	<?php
			endwhile;
			wp_reset_postdata();
			get_template_part( 'pagination' );
			
		   
			endif;
					?>
				</div>
			</div>
			<?php get_sidebar(); ?>
		</section>
		<?php 
			$posts_array = get_posts(array('post_type' => 'post'));
			$total = count($posts_array);
		?>
	</div>

<script type="text/javascript">
	var offset = 0
	$('body').on('click', '.navigation-button', function(e) {
		e.preventDefault();
		if (offset + parseInt($(this).attr('data-offset')) >= 0 
			&& 
			offset + parseInt($(this).attr('data-offset')) <= <?php echo $total; ?>
		){
			offset += parseInt($(this).attr('data-offset'))
			console.log(offset)

			$.ajax({
				url     : "<?php echo get_template_directory_uri(); ?>/ajax-get-newest-posts.php",
				type    : "POST",
				data    : {"offset" : offset} 
			})
			.done(function(res){
				$items = $(res)
				$('#newest-posts').html($items);
			})
		}

	})

</script>
<?php get_footer(); ?>