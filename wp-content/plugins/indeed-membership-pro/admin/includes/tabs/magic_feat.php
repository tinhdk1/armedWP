<?php
$data['feature_types'] = array(
								'taxes' => array(
													'label' => __('Taxes', 'ihc'), 
													'description' => __('Add Additional taxes charges based or not on User location using the special Country field', 'ihc'),
													'icon' => 'fa-taxes-ihc',
													'extra_class' => '',
													'link' => (IHCACTIVATEDMODE) ? admin_url('admin.php?page=ihc_manage&tab=taxes') : '',
													'enabled' => ihc_is_magic_feat_active('taxes'),
								),
								'opt_in' => array(
													'label' => __('Opt-in Settings', 'ihc'),	
													'description' => __('Store your Subscribers email addresses into one of well known Email Marketing Platform', 'ihc'),
													'icon' => 'fa-opt_in-ihc',
													'extra_class' => '',
													'link' => admin_url('admin.php?page=ihc_manage&tab=opt_in'),
													'enabled' => TRUE,
								),	
								'woo_payment' => array(
													'label' => __('WooCommerce Payment Integration', 'ihc'),
													'link' => (IHCACTIVATEDMODE) ? admin_url('admin.php?page=ihc_manage&tab=woo_payment') : '',
													'icon' => 'fa-woo-ihc',
													'extra_class' => 'iump-woo-payment-special-color',
													'description' => '',
													'enabled' => ihc_is_magic_feat_active('woo_payment'),	
								),
								'redirect_links' => array(
													'label' => __('Redirect Links', 'ihc'),	
													'description' => __('Set custom Links from inside or outside of your Website that can be used for Redirects inside the system', 'ihc'),
													'icon' => 'fa-links-ihc',
													'extra_class' => '',
													'link' => (IHCACTIVATEDMODE) ? admin_url('admin.php?page=ihc_manage&tab=redirect_links') : '',
													'enabled' => TRUE,
								),		
								'bp_account_page' => array(
													'label' => __('BuddyPress Account Page Integration', 'ihc'),
													'link' => (IHCACTIVATEDMODE) ? admin_url('admin.php?page=ihc_manage&tab=bp_account_page') : '',
													'icon' => 'fa-bp-ihc',
													'extra_class' => '',
													'description' => '',
													'enabled' => ihc_is_magic_feat_active('bp_account_page'),
								),			
								'woo_account_page' => array(
													'label' => __('WooCommerce Account Page Integration', 'ihc'),
													'link' => (IHCACTIVATEDMODE) ? admin_url('admin.php?page=ihc_manage&tab=woo_account_page') : '',
													'icon' => 'fa-woo-ihc',
													'extra_class' => '',
													'description' => '',
													'enabled' => ihc_is_magic_feat_active('woo_account_page'),	
								),	
								'membership_card' => array(
													'label' => __('Membership Card', 'ihc'),
													'link' => (IHCACTIVATEDMODE) ? admin_url('admin.php?page=ihc_manage&tab=membership_card') : '',
													'icon' => 'fa-membership_card-ihc',
													'extra_class' => '',
													'description' => __('Printable Membership cards for assigned active Levels', 'ihc'),
													'enabled' => ihc_is_magic_feat_active('membership_card'),	
								),		
								'cheat_off' => array(
													'label' => __('Cheat Off', 'ihc'),
													'link' => (IHCACTIVATEDMODE) ? admin_url('admin.php?page=ihc_manage&tab=cheat_off') : '',
													'icon' => 'fa-cheat_off-ihc',
													'extra_class' => '',
													'description' => __('Avoid sharing their login credentials by your customers and keep only one user logged one time', 'ihc'),
													'enabled' => ihc_is_magic_feat_active('cheat_off'),	
								),
								'invitation_code' => array(
													'label' => __('Invitation Code', 'ihc'),
													'link' => (IHCACTIVATEDMODE) ? admin_url('admin.php?page=ihc_manage&tab=invitation_code') : '',
													'icon' => 'fa-invitation_code-ihc',
													'extra_class' => '',
													'description' => __('Restrict Register process only for invited users who have a valid Invitation Code.', 'ihc'),
													'enabled' => ihc_is_magic_feat_active('invitation_code'),	
								),	
								'download_monitor_integration' => array(
													'label' => __('Download Monitor Integration', 'ihc'),
													'link' => (IHCACTIVATEDMODE) ? admin_url('admin.php?page=ihc_manage&tab=download_monitor_integration') : '',
													'icon' => 'fa-download_monitor_integration-ihc',
													'extra_class' => '',
													'description' => __('Set Download counts Limit based on Subscription/Levels', 'ihc'),
													'enabled' => ihc_is_magic_feat_active('download_monitor_integration'),	
								),		
								'register_lite' => array(
													'label' => __('Register Lite', 'ihc'),
													'link' => admin_url('admin.php?page=ihc_manage&tab=register_lite'),
													'icon' => 'fa-register_lite-ihc',
													'extra_class' => '',
													'description' => __('Let Your Users register with only their E-mail Address.', 'ihc'),
													'enabled' => ihc_is_magic_feat_active('register_lite'),	
								),		
								'individual_page' => array(
													'label' => __('Individual Page', 'ihc'),
													'link' => (IHCACTIVATEDMODE) ? admin_url('admin.php?page=ihc_manage&tab=individual_page') : '',
													'icon' => 'fa-individual_page-ihc',
													'extra_class' => '',
													'description' => __('Each User will have an individual page.', 'ihc'),
													'enabled' => ihc_is_magic_feat_active('individual_page'),	
								),					
								'woo_product_custom_prices' => array(
													'label' => __('WooCommerce Products Discount', 'ihc'),
													'link' => (IHCACTIVATEDMODE) ? admin_url('admin.php?page=ihc_manage&tab=woo_product_custom_prices') : '',
													'icon' => 'fa-woo-ihc',
													'extra_class' => 'iump-woo-discounts-special-color',
													'description' => '',
													'enabled' => ihc_is_magic_feat_active('woo_product_custom_prices'),	
								),		
								'level_restrict_payment' => array(
													'label' => __('Levels vs Payments', 'ihc'),
													'link' => (IHCACTIVATEDMODE) ? admin_url('admin.php?page=ihc_manage&tab=level_restrict_payment') : '',
													'icon' => 'fa-level_restrict_payment-ihc',
													'extra_class' => '',
													'description' => __('Restrict for each Level to be paid only with specific Payment Gateways', 'ihc'),
													'enabled' => ihc_is_magic_feat_active('level_restrict_payment'),	
								),
								'level_subscription_plan_settings' => array(
													'label' => __('Levels Plus', 'ihc'),
													'link' => (IHCACTIVATEDMODE) ? admin_url('admin.php?page=ihc_manage&tab=level_subscription_plan_settings') : '',
													'icon' => 'fa-level_subscription_paln_settings-ihc',
													'extra_class' => '',
													'description' => __('Decide what Levels should be available, based on User current Level assigned.', 'ihc'),
													'enabled' => ihc_is_magic_feat_active('level_subscription_plan_settings'),									
								),
								'gifts' => array(
													'label' => __('Membership Gifts', 'ihc'),
													'link' => (IHCACTIVATEDMODE) ? admin_url('admin.php?page=ihc_manage&tab=gifts') : '',
													'icon' => 'fa-gifts-ihc',
													'extra_class' => '',
													'description' => __('Provide to your Customers a way to buy Gifts with current Levels.', 'ihc'),
													'enabled' => ihc_is_magic_feat_active('gifts'),										
								),
								'login_level_redirect' => array(
													'label' => __('Login Redirects+', 'ihc'),
													'link' => (IHCACTIVATEDMODE) ? admin_url('admin.php?page=ihc_manage&tab=login_level_redirect') : '',
													'icon' => 'fa-sign-in-ihc',
													'extra_class' => '',
													'description' => __('Set custom Redirect after Login based on User Level(s) assigned', 'ihc'),
													'enabled' => ihc_is_magic_feat_active('login_level_redirect'),									
								),
								'wp_social_login' => array(
													'label' => __('Wp Social Login Integration', 'ihc'),
													'link' => (IHCACTIVATEDMODE) ? admin_url('admin.php?page=ihc_manage&tab=wp_social_login') : '',
													'icon' => 'fa-wp_social_login-ihc',
													'extra_class' => '',
													'description' => __('Integrated for a Lite Register/Login with Social Accounts.', 'ihc'),
													'enabled' => ihc_is_magic_feat_active('wp_social_login'),														
								),
								'list_access_posts' => array(
													'label' => __('List Access Posts', 'ihc'),
													'link' => (IHCACTIVATEDMODE) ? admin_url('admin.php?page=ihc_manage&tab=list_access_posts') : '',
													'icon' => 'fa-list_access_posts-ihc',
													'extra_class' => '',
													'description' => __('Display all Posts that user can see base on his Subscriptions.', 'ihc'),
													'enabled' => ihc_is_magic_feat_active('list_access_posts'),														
								),								
								'invoices' => array(
													'label' => __('Order Invoices', 'ihc'),
													'link' => (IHCACTIVATEDMODE) ? admin_url('admin.php?page=ihc_manage&tab=invoices') : '',
													'icon' => 'fa-invoices-ihc',
													'extra_class' => '',
													'description' => __('Provides printable Invoices for each Order into Account Page or system Dashboard', 'ihc'),
													'enabled' => ihc_is_magic_feat_active('invoices'),										
								),	
								'custom_currencies' => array(
													'label' => __('Custom Currencies', 'ihc'),	
													'description' => __('Add new currencies beside the predefined list based on custom Symbols', 'ihc'),
													'icon' => 'fa-currencies-ihc',
													'extra_class' => '',
													'link' => admin_url('admin.php?page=ihc_manage&tab=custom_currencies'),
													'enabled' => TRUE,
								),
								'badges' => array(
													'label' => __('Membership Badges', 'ihc'),
													'link' => (IHCACTIVATEDMODE) ? admin_url('admin.php?page=ihc_manage&tab=badges') : '',
													'icon' => 'fa-badges-ihc',
													'extra_class' => '',
													'description' => __('Add custom badge for each Level for a better approach', 'ihc'),
													'enabled' => ihc_is_magic_feat_active('badges'),	
								),
								'login_security' => array(
													'label' => __('Security Login', 'ihc'),
													'link' => (IHCACTIVATEDMODE) ? admin_url('admin.php?page=ihc_manage&tab=login_security') : '',
													'icon' => 'fa-login_security-ihc',
													'extra_class' => '',
													'description' => __('Fight against bruteforce attack by blocking login for the IP after it reaches maximum retries allowed', 'ihc'),
													'enabled' => ihc_is_magic_feat_active('login_security'),									
								),
								'workflow_restrictions' => array(
													'label' => __('WP Workflow Restrictions', 'ihc'),
													'link' => (IHCACTIVATEDMODE) ? admin_url('admin.php?page=ihc_manage&tab=workflow_restrictions') : '',
													'icon' => 'fa-workflow_restrictions-ihc',
													'extra_class' => '',
													'description' => __('Limit Post Views, WP Post Submissions, WP Comments based on Levels', 'ihc'),
													'enabled' => ihc_is_magic_feat_active('workflow_restrictions'),														
								),	
								'subscription_delay' => array(
													'label' => __('Subscription Delay', 'ihc'),
													'link' => (IHCACTIVATEDMODE) ? admin_url('admin.php?page=ihc_manage&tab=subscription_delay') : '',
													'icon' => 'fa-subscription_delay-ihc',
													'extra_class' => '',
													'description' => __('Set a delay for each level start time.', 'ihc'),
													'enabled' => ihc_is_magic_feat_active('subscription_delay'),											
								),
								
								'level_dynamic_price' => array(
													'label' => __('Level Dynamic Price', 'ihc'),
													'link' => (IHCACTIVATEDMODE) ? admin_url('admin.php?page=ihc_manage&tab=level_dynamic_price') : '',
													'icon' => 'fa-level_dynamic_price-ihc',
													'extra_class' => '',
													'description' => __('Let the client decide what amount should pay for levels.', 'ihc'),
													'enabled' => ihc_is_magic_feat_active('level_dynamic_price'),										
								),
								
								'user_reports' => array(
													'label' => __('User Reports', 'ihc'),
													'link' => (IHCACTIVATEDMODE) ? admin_url('admin.php?page=ihc_manage&tab=user_reports') : '',
													'icon' => 'fa-user_reports-ihc',
													'extra_class' => '',
													'description' => __('Follow most important Users actions.', 'ihc'),
													'enabled' => ihc_is_magic_feat_active('user_reports'),										
								),
								
								'pushover' => array(
													'label' => __('Pushover Notifications', 'ihc'),
													'link' => (IHCACTIVATEDMODE) ? admin_url('admin.php?page=ihc_manage&tab=pushover') : '',
													'icon' => 'fa-pushover-ihc',
													'extra_class' => '',
													'description' => __('Send User Notification on mobile with Pushover.', 'ihc'),
													'enabled' => ihc_is_magic_feat_active('pushover'),										
								),	
								
								'account_page_menu' => array(
													'label' => __('Account Custom Tabs', 'ihc'),
													'link' => (IHCACTIVATEDMODE) ? admin_url('admin.php?page=ihc_manage&tab=account_page_menu') : '',
													'icon' => 'fa-account_page_menu-ihc',
													'extra_class' => '',
													'description' => __('Create and reorder Account Page Menu items', 'ihc'),
													'enabled' => ihc_is_magic_feat_active('account_page_menu'),										
								),		
								
								'mycred' => array(
													'label' => __('MyCred Points', 'ihc'),
													'link' => (IHCACTIVATEDMODE) ? admin_url('admin.php?page=ihc_manage&tab=mycred') : '',
													'icon' => 'fa-mycred-ihc',
													'extra_class' => '',
													'description' => 'Reward with myCred points when a subscription is purchased',
													'enabled' => ihc_is_magic_feat_active('mycred'),										
								),		
								
								'api' => array(
													'label' => __('API Gate', 'ihc'),
													'link' => (IHCACTIVATEDMODE) ? admin_url('admin.php?page=ihc_manage&tab=api') : '',
													'icon' => 'fa-api-ihc',
													'extra_class' => '',
													'description' => 'Manage UMP details via API Module',
													'enabled' => ihc_is_magic_feat_active('api'),										
								),			
								
								'drip_content_notifications' => array(
													'label' => __('Drip Content Notifications', 'ihc'),
													'link' => (IHCACTIVATEDMODE) ? admin_url('admin.php?page=ihc_manage&tab=drip_content_notifications') : '',
													'icon' => 'fa-drip_content_notifications-ihc',
													'extra_class' => 'iump-dripcontentnotifications-special-color',
													'description' => 'Alert Members when a new Post was released by Drip Content',
													'enabled' => ihc_is_magic_feat_active('drip_content_notifications'),										
								),				
								
								'user_sites' => array(
													'label' => __('MultiSite Subscriptions', 'ihc'),
													'link' => (IHCACTIVATEDMODE) ? admin_url('admin.php?page=ihc_manage&tab=user_sites') : '',
													'icon' => 'fa-user_sites-ihc',
													'extra_class' => '',
													'description' => 'Provides SingleSites based on purchased Subscriptions',
													'enabled' => ihc_is_magic_feat_active('user_sites'),										
								),		
								
								'import_users' => array(
													'label' => __('Import Users&Levels', 'ihc'),
													'link' => (IHCACTIVATEDMODE) ? admin_url('admin.php?page=ihc_manage&tab=import_users') : '',
													'icon' => 'fa-import_users-ihc',
													'extra_class' => '',
													'description' => 'Import and Update main Users details and Levels',
													'enabled' => TRUE,										
								),						
								 
);
foreach ($data['feature_types'] as $k=>$v):?>
	<div class="ihc-magic-box-wrap <?php echo ($v['enabled']) ? '' : 'ihc-disabled-box';?>">
		<a href="<?php echo $v['link'];?>">
			<div class="ihc-magic-feature <?php echo $k;?> <?php echo $v['extra_class'];?>">
				<div class="ihc-magic-box-icon"><i class="fa-ihc <?php echo $v['icon'];?>"></i></div>
				<div class="ihc-magic-box-title"><?php echo $v['label'];?></div>
				<div class="ihc-magic-box-desc"><?php echo $v['description'];?></div> 
			</div>
		</a>	
	</div>
<?php endforeach;?>