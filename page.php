
		<?php get_header(); ?>
		
		<!-- #container BEGIN -->
		<div id="container">
			<!-- main BEGIN -->
			<div id="main">
				<?php if(have_posts()): ?>
					<?php while(have_posts()): the_post(); ?>
						<div class="post" id="<?php the_ID(); ?>">
							<div class="post-title"><h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2></div>
							<div class="entry">
								<div class="post-content">
									<?php the_content(); ?>
									<?php link_pages('<p><strong>Pages:</strong>', '</p>', 'number'); ?>
								</div>
							</div><!-- .entry END -->

							<div class="downmetadata" class="clearfix">
								<div class="commentlink" class="alignright"><?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></div>
								<span class="datetime"><?php echo get_the_date('Y-m-d'); ?></span>
							</div><!-- .downmetadata END -->

							<div class="clearfix"></div>

						</div>
					<?php endwhile; ?>
					
				<?php else: ?>
					<div class="post">
						<h2><?php _e('Not Found'); ?></h2>
					</div>
						
				<?php endif; ?> <!-- if(have_posts()) -->
				
				<div id="nkcomment">
					<?php comments_template(); ?>
				</div>
				
			</div><!-- #main END -->
			
			<?php get_sidebar(); ?>
			
		 <!-- #container END -->
		 <div class="clearfix"></div>
		 <div id="nkfill"></div>
	</div><!-- #wrapper END -->

	<div class="clearfix"></div>
	
	<?php get_footer(); ?>
