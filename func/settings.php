<?php
$themename = "No Sky";    //主题名称
$shortname = "nosky";    //主题简写，必须是英文、数字、下划线组合

$options = array (
    array( "name" => "Custom SNS Settings", 
    	   "type" => "heading", 
    	   "desc" => "You can custom your SNS here"),
    	   
	array(	"name" => "Sina Weibo",
			"desc" => "Enter your Sina Weibo url.",
			"id" => $shortname."_sinaweibo",
			"std" => "",
			"type" => "text"),
			
	array(	"name" => "QQ Weibo",
			"desc" => "Enter your QQ Weibo url.",
			"id" => $shortname."_qqweibo",
			"std" => "",
			"type" => "text"),
			
	array(	"name" => "Twitter",
			"desc" => "Enter your Twitter url.",
			"id" => $shortname."_twitter",
			"std" => "",
			"type" => "text"),
		
	array(	"name" => "Douban",
			"desc" => "Enter your Douban url.",
			"id" => $shortname."_douban",
			"std" => "",
			"type" => "text"),
			
	array(	"name" => "Contact E-mail",
			"desc" => "Enter your E-mail url.",
			"id" => $shortname."_email",
			//"std" => get_option('admin_email'),
			"std" => "",
			"type" => "text"),
);

function nosky_add_admin() {
    global $themename, $shortname, $options;
    if ( $_GET['page'] == basename(__FILE__) ) {
        if ( 'save' == $_REQUEST['action'] ) {
            foreach ($options as $value) {
            	update_option( $value['id'], $_REQUEST[ $value['id'] ] ); 
			}
            foreach ($options as $value) {
            	if( isset( $_REQUEST[ $value['id'] ] ) ) {
            		 update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); } 
            	else { delete_option( $value['id'] ); } 
			}
            header("Location: admin.php?page=settings.php&saved=true");    //这里的 control.php 就是这个文件的名称
            die;
        } else if( 'reset' == $_REQUEST['action'] ) {
            foreach ($options as $value) {
                delete_option( $value['id'] );
                update_option( $value['id'], $value['std'] );
            }
            header("Location: admin.php?page=settings.php&reset=true");    //这里的 control.php 就是这个文件的名称
            die;
        }
    }
    //add_theme_page($themename." Options", "$themename Settings", 'edit_themes', basename(__FILE__), 'nosky_admin');
	add_submenu_page( 'statistics.php', 'my_sns', 'SNS Setting', 'manage_options', 'settings.php', 'nosky_admin');
}

function nosky_admin() {
    global $themename, $shortname, $options;
    if ( $_REQUEST['saved'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' 设置已保存。</strong></p></div>';
    if ( $_REQUEST['reset'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' 设置已重置。</strong></p></div>';
?>
    <style type="text/css">
    
    th{text-align:left;}
    input{width:100%;}
    .submit{width:100px;padding:0;}
    .defaultbutton{padding-left:0px;}
    /*input#id{width:100%;}*/
    /*
    table, tbody, tr, th, td{
    	margin:0;
    	padding:0;
    	border: 0 none; 
    }
    table{
    	width:100%;
    	background-color:#eef5fb; 
    }
    tr{
    	background-color:#dceefc;
    }
    */
    table{
    	width:100%;
    	background-color:#eef5fb;
    	margin:20px;
    	padding:10px;
    	border: 0 none;  
    }
    .optiontable{
    	margin: 0 auto;
    }
    </style>
    <div class="wrap">
        <h2><b><?php echo $themename; ?> Options</b></h2>
        <form method="post">
        	<!--
            <div class="submit" style="padding:0;">
                <input style="font-size:12px !important;" name="save" type="submit" value="Apply" />   
                <input type="hidden" name="action" value="save" />
            </div>
           -->
                <?php foreach ($options as $value) {
                    if ($value['type'] == "text") { ?>
                        <tr align="left">
                        	<!--
                            <th scope="row"><?php echo $value['name']; ?>:</th>
                            <td>
                                <input name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="
                                <?php if ( get_settings( $value['id'] ) != "") 
                                { echo get_settings( $value['id'] ); } 
                                else { echo $value['std']; } ?>" size=40;/>
                            </td>
                           -->
                            <td width="20%" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
            				<td width="80%">
            					<input style="width:400px;" 
            						   name="<?php echo $value['id']; ?>" 
            						   id="<?php echo $value['id']; ?>" 
            						   type="<?php echo $value['type']; ?>" 
            						   value="<?php if ( get_option( $value['id'] ) != "") 
            						   			{ echo get_option( $value['id'] ); } 
            						   			else { echo $value['std']; } ?>" 
            				    />
            				</td>
                        </tr>
                    <?php } 
                    elseif ($value['type'] == "heading") { ?>
                    	<table class="optiontable">
                        <tr valign="top">
                            <td colspan="2" style="text-align: left;">
                            	<h2 style="color:green;"><?php echo $value['name']; ?></h2>
                            </td>
                            <tr>
                            	<td colspan=2> <p style="color:red; margin:0 0;" > <?php echo $value['desc']; ?> </P></td>
                       		</tr>
                        </tr>
                    <?php } ?>
                    <?php
                }
                ?>
            </table>

            <div class="submit">
                <input name="save" type="submit" value="保存设置" class="button-primary"/>   
                <input type="hidden" name="action" value="save" />
            </div>
        </form>
        <form method="post" class="defaultbutton">
            <div class="submit">
                <input name="reset" type="submit" value="还原默认设置" class="button-primary"/>
                <input type="hidden" name="action" value="reset" />
            </div>
        </form>
    </div>
    <?php
}

add_action('admin_menu', 'nosky_add_admin');
?>