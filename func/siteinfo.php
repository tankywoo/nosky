<?php  
/**
 * Site Info Widget Class
 */
class SiteInfoWidget extends WP_Widget {
    /** 构造函数  */
    function SiteInfoWidget() {
        parent::WP_Widget(false, $name = 'SiteInfoWidget');	
    }

    /** @see WP_Widget::widget */
    function widget($args, $instance) {		
        extract( $args );
        ?>
              <?php echo $before_widget; ?>
                  <?php if(!empty($instance['title'])){
                  	echo $before_title
                      . $instance['title']
                      . $after_title; 
                      } 
                  ?>

                  <!---   -->
                  <ul>
                  
				  <li>文章数量：<?php $count_posts = wp_count_posts();
							 echo $published_posts = $count_posts->publish; ?></li>
				  <li>评论数量：<?php $total_comments = get_comment_count();
							 echo $total_comments['approved']; ?></li>
				  <li>分类数量：<?php echo $count_categories = wp_count_terms('category'); ?></li>
				  <li>页面数量：<?php $count_pages = wp_count_posts('page');
							 echo $page_posts = $count_pages->publish; ?></li>
				  <li>链接数量：<?php global $wpdb;
							 $link = $wpdb->get_var("SELECT COUNT(*) FROM $wpdb->links WHERE link_visible = 'Y'"); 
							 echo $link; ?></li>
				  <li>标签数量：<?php echo $count_tags = wp_count_terms('post_tag'); ?></li>
				  <li>站点成立：<?php echo _e('2010.05.13号'); ?></li>
				  <li>迄今运行：<?php echo floor((time()-strtotime("2010-05-13"))/86400); ?>天</li>
				  <li>最后更新：<?php $last = $wpdb->get_results("SELECT MAX(post_modified) AS MAX_m FROM $wpdb->posts 
							 WHERE (post_type = 'post' OR post_type = 'page') AND (post_status = 'publish' OR post_status = 'private')");
							 $last = date('Y年n月j日', strtotime($last[0]->MAX_m));echo $last; ?></li>
				  </ul>
                  <!---   -->
                 
              <?php echo $after_widget; ?>
        <?php
    }

    /** @see WP_Widget::update */
    function update($new_instance, $old_instance) {				
        return $new_instance;
    }

    /** @see WP_Widget::form */
    function form($instance) {				
        $title = esc_attr($instance['title']);
        ?>
            <p><label for="<?php echo $this->get_field_id('title'); ?>">
            	<?php _e('Title:'); ?> 
            	<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
            </label></p>
        <?php 
    }

} // class SiteInfoWidget

add_action('widgets_init', create_function('', 'return register_widget("SiteInfoWidget");'));

?>