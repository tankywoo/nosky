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

							<div class="singlemetadata" class="clearfix">
								<span class="authorimg"><?php the_author(); ?> @</span>
								<span class="dateimg"><?php echo get_the_date('Y-m-d'); ?></span>
								<div class="commentlink" class="alignright"><?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></div>
								<div class="catimg">Category: <?php the_category(', ') ?></div> 
								<div class="tagimg">Tags: <?php the_tags(' ', ', ', ''); ?></div>
							</div>
						</div>
					<?php endwhile; ?>
					
					<!-- #navigation BEGIN -->
					<!-- support for the PageNavi plugin -->
					<div class="navigation" class="clearfix">
						<div class="alignleft"><?php next_post_link('&laquo; %link') ?></div>
						<div class="alignright"><?php previous_post_link(__('%link &raquo;')) ?></div>
						<div class="clearfix"></div>
					</div>
					<!-- #navigation END -->
				<?php else: ?>
					<div class="post">
						<h2><?php _e('Not Found'); ?></h2>
					</div>
						

				<?php endif; ?> <!-- if(have_posts()) -->
				
				<div id="wtqcomment">
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







