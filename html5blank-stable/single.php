<?php get_header(); ?>

	<div class="container">
		<div class="row single-page-wrapper">
			<div class="col-sm-8 col-xs-12">
				<?php if (have_posts()): while(have_posts()): the_post(); ?>				
				<article>
					<!-- TODO Single Content -->
					<h1><?php the_title(); ?></h1>
					<div>
						<p>
							<a href="#">							
							<?php		
								$post_categories =get_the_category(get_the_ID());					
								foreach ($post_categories as $category) {
								 	if ($category->term_id != 7)
								 	{
								 		echo $category->name;
								 		break;
								 	}
								 } ;
							?>
							</a>
							 |
							<?php the_time('j-n-Y g:i a') ?>
						</p>
						<div class="row social-info">
							<div class="col-xs-8 author-detail">
								<span><?php echo get_avatar( get_the_author_meta( 'ID' ), 50 ); ?></span>
								Được đăng bởi <?php echo get_the_author() ?>
							</div>
							<div class="col-xs-4 social-list">
									<div class="fb-like" 
										data-href="<?php the_permalink(); ?>" 
										data-layout="button_count" 
										data-action="like"
										data-share = "true"
										> 
										
									</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12 article-content">
								<p></p>
								<?php the_content(); ?>
							</div>
						</div>
					</div>
				</article>
				<?php endwhile; endif; ?>
			</div>
				<?php get_sidebar(); ?>
		</div>
	</div>

	<?php get_special_posts(3,''); ?>
<?php get_footer(); ?>