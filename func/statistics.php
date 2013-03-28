<?php 
add_action('admin_menu', 'mytheme_page');
 
function mytheme_page (){
	if ( count($_POST) > 0 && isset($_POST['mytheme_settings']) ){
		$options = array ('keywords','description','analytics');
		foreach ( $options as $opt ){
			delete_option ( 'mytheme_'.$opt, $_POST[$opt] );
			add_option ( 'mytheme_'.$opt, $_POST[$opt] );	
		}
	}
	add_menu_page(__('主题选项'), __('主题选项'), 'edit_themes', basename(__FILE__), 'mytheme_settings');
}
 
function mytheme_settings(){?>
 
<style>
	.wrap,textarea,em{font-family:'Century Gothic','Microsoft YaHei',Verdana;}
	fieldset{
		width:100%;
		/*border:1px solid #aaa;*/
		padding-bottom:20px;
		margin-top:20px;
		/*
		-webkit-box-shadow:rgba(0,0,0,.2) 0px 0px 5px;
		-moz-box-shadow:rgba(0,0,0,.2) 0px 0px 5px;
		box-shadow:rgba(0,0,0,.2) 0px 0px 5px;
		*/
		background-color:#eef5fb;
	}
	legend{
		margin-left:5px;
		padding:0 5px;
		color:#2481C6;
		background:#F9F9F9;
		cursor:pointer;
	}
	textarea{
		width:100%;
		font-size:11px;
		border:1px solid #aaa;
		background:none;
		/*
		-webkit-box-shadow:rgba(0,0,0,.2) 1px 1px 2px inset;
		-moz-box-shadow:rgba(0,0,0,.2) 1px 1px 2px inset;
		box-shadow:rgba(0,0,0,.2) 1px 1px 2px inset;
		-webkit-transition:all .4s ease-out;
		-moz-transition:all .4s ease-out;
		*/
		background-color:#FFFFFF;
	}
	textarea:focus{
		-webkit-box-shadow:rgba(0,0,0,.2) 0px 0px 8px;
		-moz-box-shadow:rgba(0,0,0,.2) 0px 0px 8px;
		box-shadow:rgba(0,0,0,.2) 0px 0px 8px;
		outline:none;
	}
</style>
 
<div class="wrap">
<h2>主题选项</h2>
<form method="post" action="">
	<fieldset>
	<legend><strong>SEO 代码添加</strong></legend>
		<table class="form-table">
			<tr><td>
				<textarea name="keywords" id="keywords" rows="1" cols="70"><?php echo get_option('mytheme_keywords'); ?></textarea><br />
				<em>网站关键词（Meta Keywords），中间用半角逗号隔开。如： TankyWoo, ACM, Cpp, C, Programming</em>
			</td></tr>
			<tr><td>
				<textarea name="description" id="description" rows="3" cols="70"><?php echo get_option('mytheme_description'); ?></textarea>
				<em>网站描述（Meta Description），针对搜索引擎设置的网页描述。</em>
			</td></tr>
		</table>
	</fieldset>
 
	<fieldset>
	<legend><strong>统计代码添加</strong></legend>
		<table class="form-table">
			<tr><td>
				<textarea name="analytics" id="analytics" rows="5" cols="70"><?php echo stripslashes(get_option('mytheme_analytics')); ?></textarea>
			</td></tr>
		</table>
	</fieldset>
 
	<p class="submit">
		<input type="submit" name="Submit" class="button-primary" value="保存设置" />
		<input type="hidden" name="mytheme_settings" value="save" style="display:none;" />
	</p>
</form>
</div>
<?php }

?>