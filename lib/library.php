<?php

	function s2member_account_widget_display($args) {
	   	extract($args);
	   	echo $before_widget;
	   	// echo $before_title . "Welcome " . S2MEMBER_CURRENT_USER_DISPLAY_NAME . $after_title;
	   	echo "<h4 class='widgettitle'>" . "My account summary" . "</h4>";
	   	echo "<div id='bm-login-widget'>";
	   	echo "<div id='bm_summary_name'>". S2MEMBER_CURRENT_USER_LOGIN . "</div>";
		echo "<div id='bm_summary_email'>". S2MEMBER_CURRENT_USER_EMAIL . "</div>";
		echo "<div id='bm_summary_registration_date'>Registration date : ". date("D j M Y", S2MEMBER_CURRENT_USER_REGISTRATION_TIME) . "</div>";
		echo "<div id='bm_summary_registration_date'>Your membership : ".  S2MEMBER_CURRENT_USER_ACCESS_LABEL . "</div><br/>";
		echo "<div id='bm_summary_registration_date'><a href=". S2MEMBER_LOGOUT_PAGE_URL.">Logout</a></div>";

		//echo "<div id='bm_summary_payment_date'>payment date :". date("D j M Y, g:i:s", S2MEMBER_CURRENT_USER_PAID_REGISTRATION_TIME) . "</div>";
		// echo "<div id=''>days passed since registration :". S2MEMBER_CURRENT_USER_REGISTRATION_DAYS . "</div><br/>";
		// echo "<div id=''>days passed since payment :". S2MEMBER_CURRENT_USER_PAID_REGISTRATION_DAYS . "</div><br/>";
	   	
	   	echo "</div>";
	   	//print_r(json_decode(S2MEMBER_CURRENT_USER_FIELDS, true));
	   	echo $after_widget;

	}

	wp_register_sidebar_widget(
	    'account_box_widget',        
	    'Member Account Box',
	    's2member_account_widget_display',  
	    array(                  
	        'description' => 'Display information about your account in your sidebar'
	    )
	);

	function s2member_account_shortcode($atts){
		return '<strong>About the Author</strong><br /><img src="'.get_option('author_box_image').'" style="max-width:150px" /><br /><strong>'.get_option('author_box_name').'</strong><p>'.get_option('author_box_bio').'</p>';
	}
	add_shortcode( 'authorbox', 's2member_account_shortcode' );


?>