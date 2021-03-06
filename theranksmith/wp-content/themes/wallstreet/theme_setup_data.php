<?php
function theme_data_setup()
{
	$slider_image = WEBRITI_TEMPLATE_DIR_URI . "/images/slider.jpg";
	$service_image = WEBRITI_TEMPLATE_DIR_URI . "/images/service.jpg";
	$portfolio_image = WEBRITI_TEMPLATE_DIR_URI . "/images/portfolio.jpg";
	
	return $theme_options=array(
			//Logo and Fevicon header					
			'upload_image_logo'=>'',
			'height'=>'50',
			'width'=>'250',
			'text_title'=>'on',
			'upload_image_favicon'=>'',
			'webrit_custom_css'=>'',
			
			//Featured Image Setting
			'home_banner_enabled'=>'on',
			'slider_title_one' => __('Clean & Fresh Theme','wallstreet'),
			'slider_title_two' => __('Welcome To Wallstreet','wallstreet'),
			'slider_description' => __('The state-of-the-art HTML5 powered flexible layout with lightspeed fast CSS3 transition effects. Works perfect in any modern mobile...','wallstreet'),
			'slider_image' => $slider_image,
			
			// service
			'service_section_enabled' => true,
			
			'service_image_one' => $service_image, 
			'service_title_one'=> __('Product Designing','wallstreet'),
			'service_description_one' => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit dignissim dapib tumst dign eger porta nisl.','wallstreet'),
			
			'service_image_two' => $service_image, 
			'service_title_two'=> __('WordPress Themes','wallstreet'),
			'service_description_two' => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit dignissim dapib tumst dign eger porta nisl.','wallstreet'),
			
			'service_image_three' => $service_image, 
			'service_title_three'=> __('Responsive Designs','wallstreet'),
			'service_description_three' => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit dignissim dapib tumst dign eger porta nisl.','wallstreet'),
			
			//portfolio
			'portfolio_section_enabled' => true,
			
			'portfolio_title_one' => __('Wall Street Style','wallstreet'),
			'portfolio_description_one' => __('A wonderful serenity has taken possession of my entire soul, like these sweet mornings.','wallstreet'),
			'portfolio_image_one' => $portfolio_image,
			
			'portfolio_title_two' => __('Wall Street Style','wallstreet'),
			'portfolio_description_two' => __('A wonderful serenity has taken possession of my entire soul, like these sweet mornings.','wallstreet'),
			'portfolio_image_two' => $portfolio_image,
			
			'portfolio_title_three' => __('Wall Street Style','wallstreet'),
			'portfolio_description_three' => __('A wonderful serenity has taken possession of my entire soul, like these sweet mornings.','wallstreet'),
			'portfolio_image_three' => $portfolio_image,
			
			'portfolio_title_four' => __('Wall Street Style','wallstreet'),
			'portfolio_description_four' => __('A wonderful serenity has taken possession of my entire soul, like these sweet mornings.','wallstreet'),
			'portfolio_image_four' => $portfolio_image,
			
			//Home blog
			'blog_section_enabled' => 'on',
			
			// Head Titles
			'contact_header_settings' => true,
			'contact_phone_number' => '1-800-123-789',
			'contact_email' => 'info@webriti.com',
			'service_title' => __('Our Services','wallstreet'),
			'service_description' => __('We Offer Great Services to our Clients','wallstreet'),
			'portfolio_title' => __('Featured Portfolio Project','wallstreet'),
			'portfolio_description' => __('Most Popular of Our Works.','wallstreet'),
			'home_blog_heading'=> __('Our Latest Blog Post','wallstreet'),
			'home_blog_description' => __('We Work With New Customers And Grow Their Businesses','wallstreet'),
			
			/** Social media links **/
			'header_social_media_enabled'=>'on',			
			'footer_social_media_enabled'=>'on',			
			'social_media_twitter_link' =>"#",			
			'social_media_facebook_link' =>"#",
			'social_media_googleplus_link' =>"#",
			'social_media_linkedin_link' =>"#",		
			'social_media_youtube_link' =>"#",
			
			/** footer customization **/
			'footer_copyright' =>sprintf (__('Copyright @ 2014 - WALL STREET. Designed by,wallstreet <a href="%1$s" target="_blank">Webriti</a>','wallstreet'),'http://www.webriti.com'),
		
		);
}
?>