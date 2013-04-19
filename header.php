<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">

	<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>

	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />	
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats please -->

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<?php if(get_option('mytheme_keywords') != ""){?>
		<meta name="keywords" content="<?php echo get_option('mytheme_keywords'); ?>" />
 	<?php }?>
 	
 	<?php if(get_option('mytheme_description') != ""){?>
		<meta name="description" content="<?php echo get_option('mytheme_description'); ?>" />
	<?php }?>
	
	<!-- <?php wp_get_archives('type=monthly&format=link'); ?> -->
	<?php //comments_popup_script(); // off by default ?>
	<!-- solve the nested comment problem -->
	<?php if (is_singular() && comments_open() && (get_option('thread_comments')==1)) 
		wp_enqueue_script( 'comment-reply' ); ?>
	<?php wp_head(); ?>
	<?php 
		global $color_options;
		foreach ($color_options as $value) {
		if (get_option( $value['id'] ) === FALSE) { 
			$$value['id'] = $value['std']; 
		} else { 
			$$value['id'] = get_option( $value['id'] ); }
		}
	?>
</head>
<body>
	<!-- #upnavi BEGIN -->
	<div id="topmenu" style="
	<?php 
		if(!empty($nosky_tmbcolor)){
			echo 'background-color:'.$nosky_tmbcolor;
		}
	?>">
		<div id="topmenubar">
			<!-- <div class="leftalign"> -->
				<ul class="nav">
					<!--
					<li<?php if ( is_home() ) { echo ' class="current_page_item"'; }?>>
						<a title="<?php _e('Home', 'default'); ?>" href="<?php echo get_settings('home'); ?>/"><?php _e('Home', 'default'); ?></a>
					</li>
					-->
					<!-- change to custom menu  -->
					<!-- <?php wp_list_pages('title_li=&depth=-1'); ?> -->
					<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
				</ul>
			<!-- </div> -->
			<!--
			<div class="alignright" #id="mysearch">
				<?php get_search_form(); ?>
			</div>
			-->
			<?php $options = get_option('nosky_test'); ?>
			
			<?php /* This code retrieves all our admin options. */
				global $options;
				foreach ($options as $value) {
				if (get_option( $value['id'] ) === FALSE) { 
					$$value['id'] = $value['std']; 
				} else { 
					$$value['id'] = get_option( $value['id'] ); }
				}
			?>
			
			<ul id="mysns" class="alignright">
				<?php if(!empty($nosky_sinaweibo)) {?>
					<li><a class="sinaweibo" rel="nofollow" target="_blank" title="关注我的Sina微博" href="
					<?php echo $nosky_sinaweibo; ?>
					">Weibo</a></li>
				<?php } ?>
				<?php if(!empty($nosky_qqweibo)) {?>
					<li><a class="qqweibo" rel="nofollow" target="_blank" title="关注我的QQ微博" href="
					<?php echo $nosky_qqweibo; ?>
					">QQ</a></li>
				<?php } ?>
				<?php if(!empty($nosky_twitter)) {?>
					<li><a class="twitter" rel="nofollow" target="_blank" title="关注我的Twitter" href="
					<?php echo $nosky_twitter; ?>
					">Twitter</a></li>
				<?php } ?>
				<?php if(!empty($nosky_douban)) {?>
				<li><a class="douban" rel="nofollow" target="_blank" title="我的豆瓣" href="
					<?php echo $nosky_douban; ?>
					">Douban</a></li>
				<?php } ?>
				<?php if(!empty($nosky_email)) {?>
				<li><a class="email" rel="nofollow" target="_blank" title="Email to me" href="
					<?php echo "mailto:".$nosky_email; ?>
					">Email</a></li>
				<?php } ?>
			</ul>
			<!--
			<div class="alignright" #id="mysns">
			</div>
			-->
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
	<!-- #ipnavi END -->
	
	
	<!-- #wrapper BEGIN -->
	<div id="wrapper">
		<!-- #header BEGIN -->
		<div id="header">
			<h1 id="blog-title"><a href="<?php bloginfo('url'); ?>" title="<?php echo wp_specialchars(get_bloginfo('name'), 1); ?>"><?php bloginfo('name'); ?></a></h1>
			<div id="blog-description"><?php bloginfo('description'); ?></div>
		</div><!-- #header END -->





















