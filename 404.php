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

	<?php wp_get_archives('type=monthly&format=link'); ?>
	<?php //comments_popup_script(); // off by default ?>
	<!-- WTQ:solve the nested comment problem -->
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	<?php wp_head(); ?>
</head>
<body>
	<!-- #upnavi BEGIN -->
	<!-- TODO need more research -->
	<div id="topmenu">
		<div id="topmenubar">
			<!-- <div class="leftalign"> -->
				<ul class="nav">
					<li<?php if ( is_home() ) { echo ' class="current_page_item"'; }?>><a title="<?php _e('Home', 'default'); ?>" href="<?php echo get_settings('home'); ?>/"><?php _e('Home', 'default'); ?></a></li>
					<!-- change to custom menu  -->
					<!-- <?php wp_list_pages('title_li=&depth=-1'); ?> -->
					<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
				</ul>
			<!-- </div> -->
			<div class="alignright">
				<?php get_search_form(); ?>
			</div>
			
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
		<!-- #container BEGIN -->
		<div id="container">
			<!-- main BEGIN -->
			<div id="main">
				<!-- TODO:why the margin doesn't work? -->
				<span style="text-align: center; color:#666666; margin-top: 300px; position: relative">
				<h2 style="margin-top: 30px;">Error 404 - Not Found</h2>
				<p>Sorry, but you are looking for something that isn't here.</p>
				<p>You can Contact me for help: <span id="email">wtq1990#gmail.com</span></p>
				</span>
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
	
	<div id="footer">
		<!-- <span class="date"><script src="<?php bloginfo('template_url'); ?>/date.js" type="text/javascript"></script></span><br /> -->
		<span id="copyright">
			Copyright &copy; 2010-2012 <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a> . 					
		</span><!-- #copyright -->
		Powered by <a id="powered" href="http://wordpress.org/">WordPress</a> .
		<!-- <a href="<?php bloginfo('url'); ?>/wp-admin"><?php bloginfo('name'); ?></a> -->
		<span id="themeinfo">
			<?php printf(__('<a href="%1$s">NoSky</a> Theme by <a href="%2$s">TankyWoo</a>. '), 'http://www.wutianqi.com/', 'http://www.wutianqi.com/'); ?>
		</span>
	</div><!-- #footer -->
	<?php wp_footer() ?>
</body>
</html>









