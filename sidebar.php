		<!-- #siderbar begin -->
		<div id="sidebar">
			<ul>
				<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar() ) : else : ?>
				<ul><?php query_posts(array('posts_per_page' => 10,'caller_get_posts' =>1,'orderby' =>comment_count,));
while ( have_posts() ) : the_post(); ?>
<li><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
<?php endwhile;wp_reset_query();?></ul>
				<ul class="hide"><?php query_posts(array('posts_per_page' => 10,'caller_get_posts' =>1,'orderby' =>date,));
while ( have_posts() ) : the_post(); ?>
<li><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
<?php endwhile;wp_reset_query();?></ul>
				<ul class="hide"><?php query_posts(array('posts_per_page' => 10,'caller_get_posts' =>1,'orderby' =>rand,));
while ( have_posts() ) : the_post(); ?>
<li><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
<?php endwhile;wp_reset_query();?></ul>
				</div>
				-->
				<!-- Search Form -->
				<li id="search"><h2><?php _e('Search'); ?></h2>
					<?php include(TEMPLATEPATH . '/searchform.php'); ?>
				</li>
				<!-- Calendar -->
				<li id="calendar"><h2><?php _e('Calendar'); ?></h2>
					<?php get_calendar(); ?>
				</li>
				<!-- Pages -->
				<?php wp_list_pages('title_li=<h2>Pages</h2>'); ?>
				<!-- Category -->
				<li>
					<h2><?php _e('Categories'); ?></h2>
						<ul>
							<?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>
						</ul>
				</li>
				<!-- Archives -->
				<li><h2><?php _e('Archives'); ?></h2>
					<ul>
						<?php wp_get_archives('type=monthly'); ?>
					</ul>
				</li>
				<!-- Link -->
				<?php get_links_list(); ?>
				<!-- Meta -->
				<li>
					<h2><?php _e('Meta'); ?></h2>
					<ul>
						<?php wp_register(); ?>
						<li><?php wp_loginout(); ?></li>
						<?php wp_meta(); ?>
					</ul>
				</li>
				<?php endif; ?>
			</ul>
		</div><!-- #sidebar end-->
		
	</div><!-- container end -->
