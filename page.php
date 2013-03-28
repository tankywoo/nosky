
		<?php get_header(); ?>
		
		<!-- #container BEGIN -->
		<div id="container">
			<!-- main BEGIN -->
			<div id="main">
				<?php if(have_posts()): ?>
					<?php while(have_posts()): the_post(); ?>
						<div class="post" id="<?php the_ID(); ?>">
							<div class="post-title"><h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2></div>
							<!-- TODO: modify the upmetadata -->
							<div class="upmetadata" class="clearfix">
								<div class="alignleft">
									<span class="authorimg"><?php the_author(); ?></span> &brvbar; <!-- <?php _e('Date:'); ?>--> 
									<span class="dateimg"><?php echo get_the_date('Y-m-d'); ?></span>
								</div>
								<!-- TODO: ask in the bbs -->
								<div class="commentlink" class="alignright"><?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></div>
							</div><!-- .upmetadata END -->
							<div class="entry">
								<div class="post-content">
									<?php the_content(); ?>
									<?php link_pages('<p><strong>Pages:</strong>', '</p>', 'number'); ?>
								</div>
								<!-- TODO: modify the downmetadata -->
								<!--
								<div class="downmetadata">
									<span class="catlink"><?php _e('Posted in&#58;'); ?> <?php the_category(', ') ?></span> <?php _e('by'); ?> <?php  the_author(); ?> 
									
									<span class="editcomment"><?php edit_post_link('Edit', '', ''); ?></span>
									<?php if (get_the_tags()) : ?><span class="taglink"><?php the_tags(' ', ', ', ''); ?></span><?php endif; ?>
								</div>
								-->
							</div><!-- .entry END -->
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
			
			<!-- TODO:add the widgets -->
			<?php get_sidebar(); ?>
			<!-- #siderbar BEGIN -->
			<!--
			<div id="sidebar">
				ZZZZZZZZZZZZZZ
			</div>--><!-- #sidebar END -->
			
		 <!-- </div> --><!-- #container END -->
		 <div class="clearfix"></div>
		 <div id="nkfill"></div>
	</div><!-- #wrapper END -->

	<div class="clearfix"></div>
	
	<?php get_footer(); ?>








