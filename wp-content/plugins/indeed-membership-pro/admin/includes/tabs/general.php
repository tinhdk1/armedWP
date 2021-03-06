<div class="ihc-subtab-menu">
	<a class="ihc-subtab-menu-item <?php echo ($_REQUEST['subtab'] =='defaults' || !isset($_REQUEST['subtab'])) ? 'ihc-subtab-selected' : '';?>" href="<?php echo $url.'&tab='.$tab.'&subtab=defaults';?>"><?php _e('Defaults Settings', 'ihc');?></a>
	<a class="ihc-subtab-menu-item <?php echo ($_REQUEST['subtab'] =='captcha') ? 'ihc-subtab-selected' : '';?>" href="<?php echo $url.'&tab='.$tab.'&subtab=captcha';?>"><?php _e('Captcha', 'ihc');?></a>
	<a class="ihc-subtab-menu-item <?php echo ($_REQUEST['subtab'] =='msg') ? 'ihc-subtab-selected' : '';?>" href="<?php echo $url.'&tab='.$tab.'&subtab=msg';?>"><?php _e('Messages', 'ihc');?></a>
	<a class="ihc-subtab-menu-item <?php echo ($_REQUEST['subtab'] =='menus') ? 'ihc-subtab-selected' : '';?>" href="<?php echo $url.'&tab='.$tab.'&subtab=menus';?>"><?php _e('Menus', 'ihc');?></a>
	<a class="ihc-subtab-menu-item <?php echo ($_REQUEST['subtab'] =='pay_settings') ? 'ihc-subtab-selected' : '';?>" href="<?php echo $url.'&tab='.$tab.'&subtab=pay_settings';?>"><?php _e('Payments', 'ihc');?></a>
	<a class="ihc-subtab-menu-item <?php echo ($_REQUEST['subtab'] =='notifications') ? 'ihc-subtab-selected' : '';?>" href="<?php echo $url.'&tab='.$tab.'&subtab=notifications';?>"><?php _e('Notifications', 'ihc');?></a>
	<a class="ihc-subtab-menu-item <?php echo ($_REQUEST['subtab'] =='double_email_verification') ? 'ihc-subtab-selected' : '';?>" href="<?php echo $url.'&tab='.$tab.'&subtab=double_email_verification';?>"><?php _e('E-mail Verification', 'ihc');?></a>		
	<a class="ihc-subtab-menu-item <?php echo ($_REQUEST['subtab'] =='access') ? 'ihc-subtab-selected' : '';?>" href="<?php echo $url.'&tab='.$tab.'&subtab=access';?>"><?php _e('Access', 'ihc');?></a>
	<a class="ihc-subtab-menu-item <?php echo ($_REQUEST['subtab'] =='extra_settings') ? 'ihc-subtab-selected' : '';?>" href="<?php echo $url.'&tab='.$tab.'&subtab=extra_settings';?>"><?php _e('Uploads Settings', 'ihc');?></a>	
	<a class="ihc-subtab-menu-item <?php echo ($_REQUEST['subtab'] =='admin_workflow') ? 'ihc-subtab-selected' : '';?>" href="<?php echo $url.'&tab='.$tab.'&subtab=admin_workflow';?>"><?php _e('Admin Workflow', 'ihc');?></a>	
	<a class="ihc-subtab-menu-item <?php echo ($_REQUEST['subtab'] =='public_workflow') ? 'ihc-subtab-selected' : '';?>" href="<?php echo $url.'&tab='.$tab.'&subtab=public_workflow';?>"><?php _e('Public Workflow', 'ihc');?></a>		
	<div class="ihc-clear"></div>
</div>
<?php 
echo ihc_inside_dashboard_error_license();
$pages = ihc_get_all_pages();//getting pages

$subtab = 'defaults';
if (isset($_REQUEST['subtab'])) $subtab = $_REQUEST['subtab'];

switch ($subtab){
	case 'defaults':
		//ihc_save_update_metas('general-defaults');//save update metas
		if (!empty($_POST['ihc_save'])){
			//save
			ihc_save_update_metas_general_defaults($_POST);
		}
		$meta_arr = ihc_return_meta_arr('general-defaults');//getting metas		
		echo ihc_check_default_pages_set();//set default pages message
		echo ihc_check_payment_gateways();
		echo ihc_is_curl_enable();		
		?>
			<form action="" method="post">
				<div class="ihc-stuffbox">
					<h3><?php _e('Default Pages:', 'ihc');?></h3>
					<div class="inside">	
					
						<div class="iump-form-line">
							<span class="iump-labels-special"><?php _e('Register:', 'ihc');?></span>
							<select name="ihc_general_register_default_page">
								<option value="-1" <?php if($meta_arr['ihc_general_register_default_page']==-1)echo 'selected';?> >...</option>
								<?php 
									if ($pages){
										foreach ($pages as $k=>$v){
											?>
												<option value="<?php echo $k;?>" <?php if($meta_arr['ihc_general_register_default_page']==$k)echo 'selected';?> ><?php echo $v;?></option>
											<?php 
										}						
									}
								?>
							</select>
							<?php echo ihc_general_options_print_page_links($meta_arr['ihc_general_register_default_page']);?>
						</div>	
						
						<div class="iump-form-line">
							<span class="iump-labels-special"><?php _e('Subscription Plan:', 'ihc');?></span>
							<select name="ihc_subscription_plan_page">
								<option value="-1" <?php if($meta_arr['ihc_subscription_plan_page']==-1)echo 'selected';?> >...</option>
								<?php 
									if ($pages){
										foreach ($pages as $k=>$v){
											?>
												<option value="<?php echo $k;?>" <?php if($meta_arr['ihc_subscription_plan_page']==$k)echo 'selected';?> ><?php echo $v;?></option>
											<?php 
										}						
									}
								?>
							</select>
							<?php echo ihc_general_options_print_page_links($meta_arr['ihc_subscription_plan_page']);?>
						</div>				
						
						<div class="iump-form-line">
							<span class="iump-labels-special"><?php _e('Login Page:', 'ihc');?></span>
							<select name="ihc_general_login_default_page">
								<option value="-1" <?php if($meta_arr['ihc_general_login_default_page']==-1)echo 'selected';?> >...</option>
								<?php 
									if ($pages){
										foreach ($pages as $k=>$v){
											?>
												<option value="<?php echo $k;?>" <?php if($meta_arr['ihc_general_login_default_page']==$k)echo 'selected';?> ><?php echo $v;?></option>
											<?php 
										}						
									}
								?>
							</select>
							<?php echo ihc_general_options_print_page_links($meta_arr['ihc_general_login_default_page']);?>
						</div>
						
						<div class="iump-form-line">
							<span class="iump-labels-special"><?php _e('Logout Page:', 'ihc');?></span>
							<select name="ihc_general_logout_page">
								<option value="-1" <?php if($meta_arr['ihc_general_logout_page']==-1)echo 'selected';?> >...</option>
								<?php 
									if ($pages){
										foreach ($pages as $k=>$v){
											?>
												<option value="<?php echo $k;?>" <?php if($meta_arr['ihc_general_logout_page']==$k)echo 'selected';?> ><?php echo $v;?></option>
											<?php 
										}						
									}
								?>
							</select>	
							<?php echo ihc_general_options_print_page_links($meta_arr['ihc_general_logout_page']);?>		
						</div>	
		
						<div class="iump-form-line">
							<span class="iump-labels-special"><?php _e('User Account Page:', 'ihc');?></span>
							<select name="ihc_general_user_page">
								<option value="-1" <?php if($meta_arr['ihc_general_user_page']==-1)echo 'selected';?> >...</option>
								<?php 
									if ($pages){
										foreach ($pages as $k=>$v){
											?>
												<option value="<?php echo $k;?>" <?php if($meta_arr['ihc_general_user_page']==$k)echo 'selected';?> ><?php echo $v;?></option>
											<?php 
										}						
									}
								?>
							</select>	
							<?php echo ihc_general_options_print_page_links($meta_arr['ihc_general_user_page']);?>		
						</div>	
						
						<div class="iump-form-line">
							<span class="iump-labels-special"><?php _e('TOS Page:', 'ihc');?></span>
							<select name="ihc_general_tos_page">
								<option value="-1" <?php if($meta_arr['ihc_general_tos_page']==-1)echo 'selected';?> >...</option>
								<?php 
									if ($pages){
										foreach ($pages as $k=>$v){
											?>
												<option value="<?php echo $k;?>" <?php if($meta_arr['ihc_general_tos_page']==$k)echo 'selected';?> ><?php echo $v;?></option>
											<?php 
										}						
									}
								?>
							</select>	
							<?php echo ihc_general_options_print_page_links($meta_arr['ihc_general_tos_page']);?>		
						</div>	
									
						<div class="iump-form-line">
							<span class="iump-labels-special"><?php _e('Lost Password:', 'ihc');?></span>
							<select name="ihc_general_lost_pass_page">
								<option value="-1" <?php if($meta_arr['ihc_general_lost_pass_page']==-1)echo 'selected';?> >...</option>
								<?php 
									if ($pages){
										foreach ($pages as $k=>$v){
											?>
												<option value="<?php echo $k;?>" <?php if($meta_arr['ihc_general_lost_pass_page']==$k)echo 'selected';?> ><?php echo $v;?></option>
											<?php 
										}						
									}
								?>
							</select>	
							<?php echo ihc_general_options_print_page_links($meta_arr['ihc_general_lost_pass_page']);?>		
						</div>	
						
						<div class="iump-form-line">
							<span class="iump-labels-special"><?php _e('Visitor Inside User Page:', 'ihc');?></span>
							<select name="ihc_general_register_view_user">
								<option value="-1" <?php if($meta_arr['ihc_general_register_view_user']==-1)echo 'selected';?> >...</option>
								<?php 
									if ($pages){
										foreach ($pages as $k=>$v){
											?>
												<option value="<?php echo $k;?>" <?php if($meta_arr['ihc_general_register_view_user']==$k)echo 'selected';?> ><?php echo $v;?></option>
											<?php 
										}						
									}
								?>
							</select>
							<?php echo ihc_general_options_print_page_links($meta_arr['ihc_general_register_view_user']);?>
						</div>										
						
						<div class="ihc-wrapp-submit-bttn">
							<input type="submit" value="<?php _e('Save Changes', 'ihc');?>" name="ihc_save" class="button button-primary button-large" />
						</div>							
					</div>
				</div>			
			
<?php $pages_arr = $pages + ihc_get_redirect_links_as_arr_for_select();?>
				<div class="ihc-stuffbox">
					<h3><?php _e('Default Redirects', 'ihc');?></h3>
					<div class="inside">	
						<div class="iump-form-line">
							<span class="iump-labels-special"><?php _e('Default Redirect Page:', 'ihc');?></span>
							<select name="ihc_general_redirect_default_page">
								<option value="-1" <?php if ($meta_arr['ihc_general_redirect_default_page']==-1)echo 'selected';?> >...</option>
								<?php 
									if ($pages_arr){
										foreach ($pages_arr as $k=>$v){
											?>
												<option value="<?php echo $k;?>" <?php if($meta_arr['ihc_general_redirect_default_page']==$k)echo 'selected';?> ><?php echo $v;?></option>
											<?php 
										}						
									}
								?>
							</select>	
							<?php echo ihc_general_options_print_page_links($meta_arr['ihc_general_redirect_default_page']);?>				
						</div>		
						
						<div class="iump-form-line">
							<span class="iump-labels-special"><?php _e('After LogOut:', 'ihc');?></span>
							<select name="ihc_general_logout_redirect">
								<option value="-1" <?php if($meta_arr['ihc_general_logout_redirect']==-1)echo 'selected';?> ><?php _e('Do Not Redirect', 'ihc');?></option>
								<?php 
									if ($pages_arr){
										foreach ($pages_arr as $k=>$v){
											?>
												<option value="<?php echo $k;?>" <?php if($meta_arr['ihc_general_logout_redirect']==$k)echo 'selected';?> ><?php echo $v;?></option>
											<?php 
										}						
									}
								?>
							</select>	
							<?php echo ihc_general_options_print_page_links($meta_arr['ihc_general_logout_redirect']);?>						
						</div>	
						
						<div class="iump-form-line">
							<span class="iump-labels-special"><?php _e('After Registration:', 'ihc');?></span>
							<select name="ihc_general_register_redirect">
								<option value="-1" <?php if($meta_arr['ihc_general_register_redirect']==-1)echo 'selected';?> ><?php _e('Do Not Redirect', 'ihc');?></option>
								<?php 
									if ($pages_arr){
										foreach ($pages_arr as $k=>$v){
											?>
												<option value="<?php echo $k;?>" <?php if($meta_arr['ihc_general_register_redirect']==$k)echo 'selected';?> ><?php echo $v;?></option>
											<?php 
										}						
									}
								?>
							</select>		
							<?php echo ihc_general_options_print_page_links($meta_arr['ihc_general_register_redirect']);?>	
							<div><?php _e("Except if Bank Transfer Payment it's used.", 'ihc');?></div>						
						</div>		
						
						<div class="iump-form-line">
							<span class="iump-labels-special"><?php _e('After Login:', 'ihc');?></span>
							<select name="ihc_general_login_redirect">
								<option value="-1" <?php if($meta_arr['ihc_general_login_redirect']==-1)echo 'selected';?> ><?php _e('Do Not Redirect', 'ihc');?></option>
								<?php 
									if ($pages_arr){
										foreach ($pages_arr as $k=>$v){
											?>
												<option value="<?php echo $k;?>" <?php if($meta_arr['ihc_general_login_redirect']==$k)echo 'selected';?> ><?php echo $v;?></option>
											<?php 
										}						
									}
								?>
							</select>	
							<?php echo ihc_general_options_print_page_links($meta_arr['ihc_general_login_redirect']);?>									
						</div>										
						
						<div class="iump-form-line">
							<span class="iump-labels-special"><?php _e('After Password Reset:', 'ihc');?></span>
							<select name="ihc_general_password_redirect">
								<option value="-1" <?php if($meta_arr['ihc_general_password_redirect']==-1)echo 'selected';?> ><?php _e('-', 'ihc');?></option>
								<?php 
									if ($pages_arr){
										foreach ($pages_arr as $k=>$v){
											?>
												<option value="<?php echo $k;?>" <?php if($meta_arr['ihc_general_password_redirect']==$k)echo 'selected';?> ><?php echo $v;?></option>
											<?php 
										}						
									}
								?>
							</select>	
							<?php echo ihc_general_options_print_page_links($meta_arr['ihc_general_password_redirect']);?>									
						</div>	
														
						<div style="margin-top: 15px;">
							<input type="submit" value="<?php _e('Save Changes', 'ihc');?>" name="ihc_save" class="button button-primary button-large" />
						</div>									
					</div>
				</div>			
			</form>
		<?php 
	break;
	case 'captcha':
		ihc_save_update_metas('general-captcha');//save update metas
		$meta_arr = ihc_return_meta_arr('general-captcha');//getting metas
		echo ihc_check_default_pages_set();//set default pages message
		echo ihc_check_payment_gateways();
		echo ihc_is_curl_enable();
		?>
					<form action="" method="post">
						<div class="ihc-stuffbox">
							<h3>ReCaptcha</h3>
							<div class="inside">
								<div>
									<?php _e('Public Key:', 'ihc');?> <input type="text" name="ihc_recaptcha_public" value="<?php echo $meta_arr['ihc_recaptcha_public'];?>" class="ihc-deashboard-middle-text-input"/>
								</div>
								<div>
									<?php _e('Private Key:', 'ihc');?> <input type="text" name="ihc_recaptcha_private" value="<?php echo $meta_arr['ihc_recaptcha_private'];?>" class="ihc-deashboard-middle-text-input" />
								</div>		
								<div class=""><?php _e('Get Public and Private Keys from', 'ihc');?> <a href="https://www.google.com/recaptcha/admin#list" target="_blank"><?php _e('here', 'ihc');?></a>.</div>		
								<div style="margin-top: 15px;">
									<input type="submit" value="<?php _e('Save Changes', 'ihc');?>" name="ihc_save" onClick="" class="button button-primary button-large" />
								</div>					
							</div>
						</div>						
					</form>
				<?php 		
	break;
	case 'msg':
		ihc_save_update_metas('general-msg');//save update metas
		$meta_arr = ihc_return_meta_arr('general-msg');//getting metas
		echo ihc_check_default_pages_set();//set default pages message
		echo ihc_check_payment_gateways();
		echo ihc_is_curl_enable();
		?>
					<form action="" method="post">
						<div class="ihc-stuffbox">
							<h3><?php _e('Custom Messages', 'ihc');?></h3>
							<div class="inside">		
								<div>
									<div class="iump-labels-special"><?php _e('Update Successfully Message:', 'ihc');?></div>
									<textarea name="ihc_general_update_msg" class="ihc-dashboard-textarea"><?php echo ihc_correct_text($meta_arr['ihc_general_update_msg']);?></textarea>
								</div>				
								
								<div style="margin-top: 15px;">
									<input type="submit" value="<?php _e('Save Changes', 'ihc');?>" name="ihc_save" class="button button-primary button-large" />
								</div>	
							</div>
						</div>					
					</form>
				<?php 		
	break;
	case 'menus':
		$nav_menus = wp_get_nav_menus();
		?>
		<form action="" method="post">
			<div class="ihc-stuffbox">
				<h3><?php _e('Customize Your Menu', 'ihc');?></h3>
				<div class="inside">
					<select name="menu_id" onChange="window.location = '<?php echo $url.'&tab='.$tab.'&subtab=menus&menu_id=';?>'+this.value;" style="min-width: 400px;margin-bottom: 20px;">
						<option value="0"><?php _e('Select a Menu', 'ihc');?></option>
						<?php foreach ( $nav_menus as $menu ){ ?>
							<?php $selected = (!empty($_GET['menu_id']) && $_GET['menu_id']==$menu->term_id) ? 'selected' : ''; ?>
							<option <?php echo $selected; ?> value="<?php echo $menu->term_id; ?>">
								<?php echo wp_html_excerpt( $menu->name, 40, '&hellip;' ); ?>
							</option>
						<?php } ?>
					</select>
					<div>
						<?php 
							if (!empty($_GET['menu_id'])){
								///update 
								if (!empty($_REQUEST['ihc_save'])){
									foreach ($_REQUEST['db_menu_id'] as $v){
										if (isset($_REQUEST['ihc_mb_who_menu_type-'.$v]) && isset($_REQUEST['ihc_menu_mb_type-'.$v])){
											update_post_meta( $v, 'ihc_mb_who_menu_type', $_REQUEST['ihc_mb_who_menu_type-'.$v]);
											update_post_meta( $v, 'ihc_menu_mb_type', $_REQUEST['ihc_menu_mb_type-'.$v]);											
										}
									}
								}
								
								///list
								$menu_items = wp_get_nav_menu_items( $_GET['menu_id'], array( 'post_status' => 'any' ) );
								foreach ($menu_items as $obj){
									?>
									<div style="padding: 5px 0px; margin: 5px 0px; border-top: 1px solid #c3c3c3;">
										<div class="ihc-menu-page">
											"<?php echo $obj->title;?>" <span><?php _e('link', 'ihc');?></span>
										</div>		
										<input type="hidden" name="db_menu_id[]" value="<?php echo $obj->ID;?>" />
										<div class="ihc-class ihc-padding">
											<select class="ihc-select" name="ihc_menu_mb_type-<?php echo $obj->ID; ?>" style="width: 300px;">
												<option value="block" <?php if ($obj->ihc_menu_mb_type=='block')echo 'selected';?> ><?php _e('Block Menu Item Only', 'ihc');?></option>
												<option value="show" <?php if ($obj->ihc_menu_mb_type=='show')echo 'selected';?> ><?php _e('Show Menu Item Only', 'ihc');?></option>									
											</select>
										</div>	
										<div  class="ihc-padding"  style="margin-bottom:10px;">
											<label class="ihc-bold" style="display:block;"><?php _e('for:', 'ihc');?></label>
											<?php
												$posible_values = array('all'=>__('All', 'ihc'), 'reg'=>__('Registered Users', 'ihc'), 'unreg'=>__('Unregistered Users', 'ihc') );
												$levels = get_option('ihc_levels');
												if ($levels){
													foreach ($levels as $id => $level){
														$posible_values[$id] = $level['name'];
													}
												}
												?>
												<select id="" onChange="ihc_writeTagValue(this, '#ihc_mb_who_hidden-<?php echo $obj->ID;?>', '#ihc_tags_field-<?php echo $obj->ID;?>', '<?php echo $obj->ID;?>_ihc_select_tag_' );" style="width: 300px;">
													<option value="-1" selected>...</option>
													<?php 
														foreach($posible_values as $k=>$v){
															?>
															<option value="<?php echo $k;?>"><?php echo $v;?></option>	
															<?php 
														}
													?>
												</select>
										</div>
										<div id="ihc_tags_field-<?php echo $obj->ID;?>">
							            	<?php
							            		
							                    if ($obj->ihc_mb_who_menu_type){
							                    	if (!empty($values)) unset($values);
							                    	if (strpos($obj->ihc_mb_who_menu_type, ',')!==FALSE){
							                    		$values = explode(',', $obj->ihc_mb_who_menu_type);
							                    	} else {
							                        	$values[] = $obj->ihc_mb_who_menu_type;			
							                        }
							                        foreach ($values as $value) { ?>
							                        	<div id="<?php echo $obj->ID;?>_ihc_select_tag_<?php echo $value;?>" class="ihc-tag-item">
							                        		<?php echo $posible_values[$value];?>
							                        		<div class="ihc-remove-tag" onclick="ihcremoveTag('<?php echo $value;?>', '#<?php echo $obj->ID;?>_ihc_select_tag_', '#ihc_mb_who_hidden-<?php echo $obj->ID;?>');" title="<?php _e('Removing tag', 'ihc');?>">x</div>
							                        	</div>
							                            <?php
							                        }//end of foreach ?>
							                    <div class="ihc-clear"></div>
							                    <?php }//end of if ?>
															
										</div>
										<div class="ihc-clear"></div>
										<input type="hidden" id="ihc_mb_who_hidden-<?php echo $obj->ID;?>" name="ihc_mb_who_menu_type-<?php echo $obj->ID; ?>" value="<?php echo $obj->ihc_mb_who_menu_type;?>" />
										<div class="clear"></div>																		
									</div>
									
									<?php 	
								}								
							}
						?>
					</div>
					
					<div style="margin-top: 15px;">
						<input type="submit" value="<?php _e('Save Changes', 'ihc');?>" name="ihc_save" class="button button-primary button-large" />
					</div>			
				</div>
			</div>
		</form>
		<?php 
	break;
	
	case 'extra_settings':
		if (isset($_POST['ihc_save'])){
			ihc_save_update_metas('extra_settings');//save update metas
		}		
		$meta_arr = ihc_return_meta_arr('extra_settings');//getting metas
		echo ihc_check_default_pages_set();//set default pages message
		echo ihc_check_payment_gateways();
		echo ihc_is_curl_enable();
		?>
			<form action="" method="post">

				<div class="ihc-stuffbox">
					<h3> <?php _e("Upload File Accepted Extensions:", 'ihc');?></h3>
					<div class="inside">
						<textarea name="ihc_upload_extensions" style="width: 300px;"><?php echo $meta_arr['ihc_upload_extensions'];?></textarea>
						<div><?php  _e("Записи расширений с запятыми между значениями! ex: pdf,jpg,mp3");?></div>							
						<div style="margin-top: 15px;">
							<input type="submit" value="<?php _e('Save Changes', 'ihc');?>" name="ihc_save" class="button button-primary button-large" />
						</div>		
					</div>
				</div>

				<div class="ihc-stuffbox">
					<h3> <?php _e("Upload File Maximum File Size:", 'ihc');?></h3>
					<div class="inside">
						<input type="number" value="<?php echo $meta_arr['ihc_upload_max_size'];?>" name="ihc_upload_max_size" min="0.1" step="0.1" /> MB					
						<div style="margin-top: 15px;">
							<input type="submit" value="<?php _e('Save Changes', 'ihc');?>" name="ihc_save" class="button button-primary button-large" />
						</div>		
					</div>
				</div>				

				<div class="ihc-stuffbox">
					<h3> <?php _e("Avatar Maximum File Size:", 'ihc');?></h3>
					<div class="inside">
						<input type="number" value="<?php echo $meta_arr['ihc_avatar_max_size'];?>" name="ihc_avatar_max_size" min="0.1" step="0.1" /> MB					
						<div style="margin-top: 15px;">
							<input type="submit" value="<?php _e('Save Changes', 'ihc');?>" name="ihc_save" class="button button-primary button-large" />
						</div>		
					</div>
				</div>						
				
			</form>		
		<?php 
	break;
	case 'notifications':
		ihc_save_update_metas('notifications');//save update metas
		$meta_arr = ihc_return_meta_arr('notifications');//getting metas
		echo ihc_check_default_pages_set();//set default pages message
		echo ihc_check_payment_gateways();
		echo ihc_is_curl_enable();
		?>
		<form action="" method="post">
			<div class="ihc-stuffbox">
				<h3><?php _e('Notifications Settings', 'ihc');?></h3>
				<div class="inside">		
					<div>
						<div class="iump-labels-special"><?php _e("'From' E-mail Address:", 'ihc');?></div>
						<input type="text" name="ihc_notification_email_from" value="<?php echo $meta_arr['ihc_notification_email_from'];?>" style="width: 300px;" />
					</div>	
					<div>
						<div class="iump-labels-special"><?php _e("'From' Name:", 'ihc');?></div>
						<input type="text" name="ihc_notification_name" value="<?php echo $meta_arr['ihc_notification_name'];?>" style="width: 300px;" />
					</div>						
					<div style="margin-top: 15px;">
						<div class="iump-labels-special"><?php _e("'Before Expire' Time Interval:", 'ihc');?></div>
						<input type="number" min="1" name="ihc_notification_before_time" value="<?php echo $meta_arr['ihc_notification_before_time'];?>" style="width: 300px;" /> <?php _e("Days", 'ihc');?>
					</div>
					<div style="margin-top: 15px;">
						<div class="iump-labels-special"><?php _e("Second 'Before Expire' Time Interval:", 'ihc');?></div>
						<input type="number" min="1" name="ihc_notification_before_time_second" value="<?php echo $meta_arr['ihc_notification_before_time_second'];?>" style="width: 300px;" /> <?php _e("Days", 'ihc');?>
					</div>	
					<div style="margin-top: 15px;">
						<div class="iump-labels-special"><?php _e("Third 'Before Expire' Time Interval:", 'ihc');?></div>
						<input type="number" min="1" name="ihc_notification_before_time_third" value="<?php echo $meta_arr['ihc_notification_before_time_third'];?>" style="width: 300px;" /> <?php _e("Days", 'ihc');?>
					</div>												
					<div style="margin-top: 15px;">
						<div class="iump-labels-special"><?php _e("Admin E-mail Address:", 'ihc');?></div>
						<input type="text" name="ihc_notification_email_addresses" value="<?php echo $meta_arr['ihc_notification_email_addresses'];?>" style="width: 300px;" /> 
						<p><?php _e("Set multiple Email addresses separated by comma.", 'ihc');?></p>
					</div>																
					<div style="margin-top: 15px;">
						<input type="submit" value="<?php _e('Save Changes', 'ihc');?>" name="ihc_save" class="button button-primary button-large" />
					</div>	
				</div>
			</div>					
		</form>
		<?php 
	break;
	case 'pay_settings':
		ihc_save_update_metas('payment');//save update metas
		$meta_arr = ihc_return_meta_arr('payment');//getting metas
		echo ihc_check_default_pages_set();//set default pages message
		echo ihc_check_payment_gateways();
		echo ihc_is_curl_enable();
		?>
		<form action="" method="post">
			<div class="ihc-stuffbox">
				<h3><?php _e('Currency Settings:', 'ihc');?></h3>
				<div class="inside">		
					<div class="iump-form-line">
						<select name="ihc_currency">
							<?php 
								$currency_arr = ihc_get_currencies_list('all');
								$custom_currencies = ihc_get_currencies_list('custom');
								foreach ($currency_arr as $k=>$v){
									?>
									<option value="<?php echo $k?>" <?php if ($k==$meta_arr['ihc_currency']) echo 'selected';?> >
										<?php echo $v;?>
										<?php if (is_array($custom_currencies) && in_array($v, $custom_currencies))  _e(" (Custom Currency)");?>
									</option>
									<?php 
								}
							?>
						</select>
						<p style="font-weight:bold;"><?php _e('Check which Payment Service supports the next currency and deactivate the other Payment Services.', 'ihc');?></p>
						<p><?php _e('You can add new Currencies from', 'ihc');?> <a href="<?php echo admin_url('admin.php?page=ihc_manage&tab=custom_currencies');?>"><?php _e('here', 'ihc');?></a></p>				
					</div>
					<div class="ihc-wrapp-submit-bttn iump-submit-form">
						<input type="submit" value="<?php _e('Save Changes', 'ihc');?>" name="ihc_save" class="button button-primary button-large" />
					</div>			
				</div>
			</div>

			<div class="ihc-stuffbox">
				<h3><?php _e('Currency Custom Code:', 'ihc');?></h3>
				<div class="inside">		
					<div class="iump-form-line">
						<input type="text" name="ihc_custom_currency_code" value="<?php echo $meta_arr['ihc_custom_currency_code'];?>" />		
					</div>
					<div class="ihc-wrapp-submit-bttn iump-submit-form">
						<input type="submit" value="<?php _e('Save Changes', 'ihc');?>" name="ihc_save" class="button button-primary button-large" />
					</div>			
				</div>
			</div>
						
			<div class="ihc-stuffbox">
				<h3><?php _e('Currency Position:', 'ihc');?></h3>
				<div class="inside">		
					<div class="iump-form-line">
						<select name="ihc_currency_position">
							<?php 
								$position = array('left' => __('Left', 'ihc'), 'right' => __('Right', 'ihc'));
								foreach ($position as $k=>$v){
									?>
									<option value="<?php echo $k?>" <?php if ($k==$meta_arr['ihc_currency_position']) echo 'selected';?> >
										<?php echo $v;?>
									</option>
									<?php 
								}
							?>
						</select>
						<p style="font-weight:bold;"><?php _e('Currency will be placed before (left) price number or after (right).', 'ihc');?></p>			
					</div>
					<div class="ihc-wrapp-submit-bttn iump-submit-form">
						<input type="submit" value="<?php _e('Save Changes', 'ihc');?>" name="ihc_save" class="button button-primary button-large" />
					</div>			
				</div>
			</div>			
			
			<div class="ihc-stuffbox">
				<h3><?php _e('Default Payment Gateway:', 'ihc');?></h3>
				<div class="inside">		
					<div class="iump-form-line">
						<select name="ihc_payment_selected">
							<?php 
								$payment_arr = array(
														'paypal' => 'PayPal',
														'authorize' => 'Authorize.net',
														'stripe' => 'Stripe',
														'twocheckout' => '2Checkout',
														'bank_transfer' => 'Bank Transfer',
														'braintree' => 'Braintree',
														'payza' => 'Payza',
														);
								foreach($payment_arr as $k=>$v){
									$active = (ihc_check_payment_available($k)) ? __('Active', 'ihc') : __('Inactive', 'ihc');  
									?>
									<option value="<?php echo $k?>" <?php if ($k==$meta_arr['ihc_payment_selected']) echo 'selected';?> >
										<?php echo $v . ' - ' . $active;?>
									</option>
									<?php 
								}
							?>
						</select>
						<div class="ihc-dashboard-inform-message"><?php _e('Когда нет мульти-платежей активирована или нет оплата выбрано или требуется.');?></div>
						<div class="ihc-dangerbox"><?php _e("Будьте уверены, что ваш выбранный платежный шлюз, он активирован и настроена должным образом!");?></div>				
					</div>
					<div class="ihc-wrapp-submit-bttn iump-submit-form">
						<input type="submit" value="<?php _e('Save Changes', 'ihc');?>" name="ihc_save" class="button button-primary button-large" />
					</div>			
				</div>
			</div>	

			<?php
				if (!empty($_GET['do_cleanup_logs']) && !empty($_GET['older_then'])){
					$older_then = $_GET['older_then'] * 24 * 60 * 60;
					$older_then = time() - $older_then;
					Ihc_User_Logs::delete_logs('payments', $older_then);
				}			
			?>
			<div class="ihc-stuffbox">
				<h3><?php _e('Payment Logs:', 'ihc');?></h3>
				<div class="inside">	
					<div class="iump-form-line">
						<?php $checked = ($meta_arr['ihc_payment_logs_on']) ? 'checked' : '';?>
						<label class="iump_label_shiwtch" style="margin:10px 0 10px -10px;">
							<input type="checkbox" class="iump-switch" onclick="iump_check_and_h(this, '#ihc_payment_logs_on');" <?php echo $checked;?> />
							<div class="switch" style="display:inline-block;"></div>
						</label>		
						<input type="hidden" name="ihc_payment_logs_on" id="ihc_payment_logs_on" value="<?php echo $meta_arr['ihc_payment_logs_on'];?>" />
						<?php _e('Save Payment Logs into Database', 'ihc');?>	
					</div>
					<?php $we_have_logs = Ihc_User_Logs::get_count_logs('payments');?>
					<?php if ($we_have_logs):?>
						<div class="iump-form-line">
							<?php _e('Clean Up Payment logs older then:', 'ihc');?>
							<select id="older_then_select">
								<option value="">...</option>
								<option value="1"><?php _e('One Day', 'ihc');?></option>
								<option value="7"><?php _e('One Week', 'ihc');?></option>
								<option value="30"><?php _e('One Month', 'ihc');?></option>
							</select>
							<div class="button button-primary button-large" onClick="ihc_do_clean_up_logs('<?php echo admin_url('admin.php?page=ihc_manage&tab=general&subtab=pay_settings');?>');"><?php _e('Clean Up', 'ihc');?></div>
						</div>
						<div class="iump-form-line">
							<a href="<?php echo admin_url('admin.php?page=ihc_manage&tab=view_user_logs&type=payments');?>" target="_blank"><?php _e('View Logs', 'ihc');?></a>
						</div>
					<?php endif;?>
					<div class="ihc-wrapp-submit-bttn iump-submit-form">
						<input type="submit" value="<?php _e('Save Changes', 'ihc');?>" name="ihc_save" class="button button-primary button-large" />
					</div>						
				</div>
			</div>
							
		</form>
		<?php 
	break;

		case 'double_email_verification':
			ihc_save_update_metas('double_email_verification');//save update metas
			$meta_arr = ihc_return_meta_arr('double_email_verification');//getting metas
			echo ihc_check_default_pages_set();//set default pages message	
			echo ihc_check_payment_gateways();
			echo ihc_is_curl_enable();
			$pages = $pages + ihc_get_redirect_links_as_arr_for_select();
			?>
			<form action="" method="post">
				<div class="ihc-stuffbox">
					<h3><?php _e('Double E-mail Verification', 'ihc');?></h3>
					<div class="inside">		
						<div class="iump-form-line">
							<label class="iump-labels-special"><?php _e('Activation Link Expire Time:', 'ihc');?></label>
							<select name="ihc_double_email_expire_time">
								<?php 
									$arr = array(
															'-1' => 'Never',
															'900' => '15 Minutes',
															'3600' => '1 Hour',
															'43200' => '12 Hours',
															'86400' => '1 Day',
															);
									foreach ($arr as $k=>$v){
										?>
										<option value="<?php echo $k?>" <?php if ($k==$meta_arr['ihc_double_email_expire_time']) echo 'selected';?> >
											<?php echo $v;?>
										</option>
										<?php 
									}
								?>
							</select>			
						</div>
						
						<div class="iump-form-line">
							<label class="iump-labels-special"><?php _e('Success Redirect:', 'ihc');?></label>
							<select name="ihc_double_email_redirect_success">
								<option value="-1" <?php if($meta_arr['ihc_double_email_redirect_success']==-1)echo 'selected';?> >...</option>
								<?php 
									if ($pages){
										foreach ($pages as $k=>$v){
											?>
												<option value="<?php echo $k;?>" <?php if($meta_arr['ihc_double_email_redirect_success']==$k)echo 'selected';?> ><?php echo $v;?></option>
											<?php 
										}						
									}
								?>
							</select>
						</div>
						
						<div class="iump-form-line">
							<label class="iump-labels-special"><?php _e('Error Redirect:', 'ihc');?></label>
							<select name="ihc_double_email_redirect_error">
								<option value="-1" <?php if($meta_arr['ihc_double_email_redirect_error']==-1)echo 'selected';?> >...</option>
								<?php 
									if ($pages){
										foreach ($pages as $k=>$v){
											?>
												<option value="<?php echo $k;?>" <?php if($meta_arr['ihc_double_email_redirect_error']==$k)echo 'selected';?> ><?php echo $v;?></option>
											<?php 
										}						
									}
								?>
							</select>
						</div>											
						
						<div class="iump-form-line">
							<label class="iump-labels-special"><?php _e('Delete User if is not verified:', 'ihc');?></label>
							<select name="ihc_double_email_delete_user_not_verified">
								<?php 
									$arr = array(
															'-1' => 'Never',
															'1' => 'After 1 day',
															'7' => 'After 7 days',
															'14' => 'After 14 days',
															'30' => 'After 30 days',
															);
									foreach ($arr as $k=>$v){
										?>
										<option value="<?php echo $k?>" <?php if ($k==$meta_arr['ihc_double_email_delete_user_not_verified']) echo 'selected';?> >
											<?php echo $v;?>
										</option>
										<?php 
									}
								?>
							</select>
						</div>	
												
						<div class="ihc-wrapp-submit-bttn iump-submit-form">
							<input type="submit" value="<?php _e('Save Changes', 'ihc');?>" name="ihc_save" class="button button-primary button-large" />
						</div>	
					</div>
				</div>
			</form>			
			<?php 
			break;
	case 'access':
		if (!empty($_POST['ihc_save'])){
			update_option('ihc_dashboard_allowed_roles', $_POST['ihc_dashboard_allowed_roles']);	
		}
		$meta_value = get_option('ihc_dashboard_allowed_roles');
		$meta_values = (empty($meta_value)) ? array() : explode(',', $meta_value);
		?>
		<div class="iump-page-title">Ultimate Membership Pro - 
			<span class="second-text">
				<?php _e('WP Admin Dashboard Access', 'ihc');?>
			</span>
		</div>
		<form action="" method="post">
			<div class="ihc-stuffbox">
				<h3><?php _e('Roles allowed to enter into WordPress Admin Dashboard:', 'ihc');?></h3>
				<div class="inside">
					<div style="width: 49%; vertical-align: top; display: inline-block;">		
						<div class="iump-form-line" style="opacity: 0.7;">
							<span style="font-weight:bold; display:inline-block; width: 25%;"><?php _e('Administrator', 'ihc');?></span>
							<label class="iump_label_shiwtch" style="margin:10px 0 10px -10px;">
								<input type="checkbox" class="iump-switch" onClick="" checked disabled/>
								<div class="switch" style="display:inline-block;"></div>
							</label>			
						</div>
						<?php 
							$roles = get_editable_roles();
							if (!empty($roles['administrator'])){
								unset($roles['administrator']);
							}
							if (!empty($roles['pending_user'])){
								unset($roles['pending_user']);	
							}							
							$count = count($roles) + 1;
							$break = ceil($count/2);
							$i = 1;
							foreach ($roles as $role=>$arr){
								?>
									<div class="iump-form-line">
										<span style="font-weight:bold; display:inline-block; width: 25%;"><?php echo $arr['name'];?></span>
										<label class="iump_label_shiwtch" style="margin:10px 0 10px -10px;">
											<?php $checked = (in_array($role, $meta_values)) ? 'checked' : '';?>
											<input type="checkbox" class="iump-switch" onClick="ihc_make_inputh_string(this, '<?php echo $role;?>', '#ihc_dashboard_allowed_roles');" <?php echo $checked;?>/>
											<div class="switch" style="display:inline-block;"></div>
										</label>			
									</div>							
								<?php 	
								$i++;
								if ($count>7 && $i==$break){
									?>
										</div>
										<div style="width: 49%; vertical-align: top; display: inline-block;">	
									<?php 	
								}
							}
						?>
					</div>
					<input type="hidden" name="ihc_dashboard_allowed_roles" id="ihc_dashboard_allowed_roles" value="<?php echo $meta_value;?>" />
					<div class="ihc-wrapp-submit-bttn iump-submit-form">
						<input type="submit" value="<?php _e('Save Changes', 'ihc');?>" name="ihc_save" class="button button-primary button-large" />
					</div>			
				</div>	
			</div>
		</form>	
		<?php 
		break;
	case 'admin_workflow':
		ihc_save_update_metas('admin_workflow');//save update metas
		$meta_arr = ihc_return_meta_arr('admin_workflow');//getting metas
		echo ihc_check_default_pages_set();//set default pages message
		echo ihc_check_payment_gateways();
		echo ihc_is_curl_enable();
		?>
		<form action="" method="post">
			<div class="ihc-stuffbox">
				<h3><?php _e('Show Dashboard Notifications:', 'ihc');?></h3>
				<div class="inside">		
					<div class="iump-form-line">
						<div class="iump-form-line">
							<span style="font-weight:bold; display:inline-block; width: 25%;"><?php _e('New Users & Orders', 'ihc');?></span>
							<label class="iump_label_shiwtch" style="margin:10px 0 10px -10px;">
								<?php $checked = ($meta_arr['ihc_admin_workflow_dashboard_notifications']) ? 'checked' : '';?>
								<input type="checkbox" class="iump-switch" onClick="iump_check_and_h(this, '#ihc_admin_workflow_dashboard_notifications');" <?php echo $checked;?> />
								<div class="switch" style="display:inline-block;"></div>
							</label>
							<input type="hidden" name="ihc_admin_workflow_dashboard_notifications" value="<?php echo $meta_arr['ihc_admin_workflow_dashboard_notifications'];?>" id="ihc_admin_workflow_dashboard_notifications" /> 				
		
						</div>			
					</div>
					<div class="ihc-wrapp-submit-bttn iump-submit-form">
						<input type="submit" value="<?php _e('Save Changes', 'ihc');?>" name="ihc_save" class="button button-primary button-large" />
					</div>			
				</div>
			</div>
			
				<div class="ihc-stuffbox" style="display: none;">
					<h3> <?php _e("Debugging Payment Data:", 'ihc');?></h3>
					<div class="inside">
						
						<input type="checkbox" onClick="check_and_h(this, '#ihc_debug_payments_db');" <?php if ($meta_arr['ihc_debug_payments_db']) echo 'checked';?> />
						<input type="hidden" value="<?php echo $meta_arr['ihc_debug_payments_db'];?>" name="ihc_debug_payments_db" id="ihc_debug_payments_db" />
								
						<div style="margin-top: 15px;">
							<input type="submit" value="<?php _e('Save Changes', 'ihc');?>" name="ihc_save" class="button button-primary button-large" />
						</div>		
					</div>
				</div>				

				<div class="ihc-stuffbox">
					<h3><?php _e('Orders Settings:', 'ihc');?></h3>
					<div class="inside">	
					
						<div class="iump-form-line">
							<span class="iump-labels-special"><?php _e('Order Invoice Prefix Code:', 'ihc');?></span>
							<input type="text" name="ihc_order_prefix_code" value="<?php echo @$meta_arr['ihc_order_prefix_code'];?>" />
						</div>	
						
						<div style="margin-top: 15px;">
							<input type="submit" value="<?php _e('Save Changes', 'ihc');?>" name="ihc_save" class="button button-primary button-large" />
						</div>									
					</div>
				</div>		
								
		</form>
		<?php 		
		break;
	case 'public_workflow':
		ihc_save_update_metas('public_workflow');//save update metas
		$meta_arr = ihc_return_meta_arr('public_workflow');//getting metas
		echo ihc_check_default_pages_set();//set default pages message
		echo ihc_check_payment_gateways();
		echo ihc_is_curl_enable();
		?>
		<form action="" method="post">
				
				<div class="ihc-stuffbox">
					<h3><?php _e('Listing Pages/Posts', 'ihc');?></h3>
					<div class="inside">	
						<div class="iump-form-line">
							<span class="iump-labels-special"><?php _e('Show hidden Pages/Posts Titles in listing:', 'ihc');?></span>	
							
							<label class="iump_label_shiwtch" style="margin:10px 0 10px -10px;">
								<?php $checked = ($meta_arr['ihc_listing_show_hidden_post_pages']) ? 'checked' : '';?>
								<input type="checkbox" class="iump-switch" onClick="iump_check_and_h(this, '#ihc_listing_show_hidden_post_pages');" <?php echo $checked;?> />
								<div class="switch" style="display:inline-block;"></div>
							</label>
							<input type="hidden" name="ihc_listing_show_hidden_post_pages" value="<?php echo $meta_arr['ihc_listing_show_hidden_post_pages'];?>" id="ihc_listing_show_hidden_post_pages" /> 				
							
						</div>
						<div style="margin-top: 15px;">
							<input type="submit" value="<?php _e('Save Changes', 'ihc');?>" name="ihc_save" class="button button-primary button-large" />
						</div>							
					</div>
				</div>	
				
			
				<div class="ihc-stuffbox">
					<h3> <?php _e("Grace Period:", 'ihc');?></h3>
					<div class="inside">
						<select name="ihc_grace_period"><?php 
							for ($i=0;$i<32;$i++){
								$selected = ($meta_arr['ihc_grace_period']==$i) ? 'selected' : '';
								?>
									<option value="<?php echo $i;?>" <?php echo $selected;?>><?php echo $i . ' ' . __('Days', 'ihc');?></option>
								<?php 	
							}
						?></select>			
						<div style="margin-top: 15px;">
							<input type="submit" value="<?php _e('Save Changes', 'ihc');?>" name="ihc_save" class="button button-primary button-large" />
						</div>		
					</div>
				</div>								
				
				<div class="ihc-stuffbox">
					<h3> <?php _e("Avatar:", 'ihc');?></h3>
					<div class="inside">	
						
						<div class="iump-form-line">
							<span class="iump-labels-special"><?php _e('Use Gravatar Image', 'ihc');?></span>								
							<label class="iump_label_shiwtch" style="margin:10px 0 10px -10px;">
								<?php $checked = ($meta_arr['ihc_use_gravatar']) ? 'checked' : '';?>
								<input type="checkbox" class="iump-switch" onClick="iump_check_and_h(this, '#ihc_use_gravatar');" <?php echo $checked;?> />
								<div class="switch" style="display:inline-block;"></div>
							</label>
							<input type="hidden" name="ihc_use_gravatar" value="<?php echo $meta_arr['ihc_use_gravatar'];?>" id="ihc_use_gravatar" />
						</div>
						
						<?php $display = (function_exists('bp_core_fetch_avatar')) ? 'block' : 'none';?>
						<div class="iump-form-line" style="display: <?php echo $display;?>;">
							<span class="iump-labels-special"><?php _e('Use BuddyPress Image', 'ihc');?></span>								
							<label class="iump_label_shiwtch" style="margin:10px 0 10px -10px;">
								<?php $checked = ($meta_arr['ihc_use_buddypress_avatar']) ? 'checked' : '';?>
								<input type="checkbox" class="iump-switch" onClick="iump_check_and_h(this, '#ihc_use_buddypress_avatar');" <?php echo $checked;?> />
								<div class="switch" style="display:inline-block;"></div>
							</label>
							<input type="hidden" name="ihc_use_buddypress_avatar" value="<?php echo $meta_arr['ihc_use_buddypress_avatar'];?>" id="ihc_use_buddypress_avatar" />
						</div>						
						
						<div style="margin-top: 15px;">
							<input type="submit" value="<?php _e('Save Changes', 'ihc');?>" name="ihc_save" class="button button-primary button-large" />
						</div>	
												
					</div>
				</div>		
												
		</form>
		<?php 		
		break;		
}


