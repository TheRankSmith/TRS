<?php
/*  
 * section SOCIAL/ACCOUNT10
 */	
 	
	$is_used = is_string( get_theme_mod('tesseract_social_account10_name') );
	
	$sectionName = ( $is_used ) ? get_theme_mod('tesseract_social_account10_name') . ' Account ' . __('Settings', 'tesseract') : __('Social Account 10 Settings', 'tesseract');
	$sectionPriority = ( $is_used ) ? 10 : 20;
	$networkName = ( $is_used ) ? get_theme_mod('tesseract_social_account10_name') : __( 'Social Network Name', 'tesseract' );
	$accountUrl = ( $is_used ) ? get_theme_mod('tesseract_social_account10_name') . ' Account ' . __( 'URL', 'tesseract' ) : __( 'Social Network URL', 'tesseract' );
		
   	$wp_customize->add_section( 'tesseract_social_account10' , array(
    	'title'      => $sectionName,
    	'priority'   => $sectionPriority,
		'panel' 	 => 'tesseract_social'
	) );							

		$wp_customize->add_setting( 'tesseract_social_account10_name', array(
				'transport'         => 'postMessage',
				'sanitize_callback' => 'esc_html'
		) );
				
			$wp_customize->add_control(
				new WP_Customize_Control(
					$wp_customize,
					'tesseract_social_account10_name_control',
					array(
						'label'          => $networkName,
						'section'        => 'tesseract_social_account10',
						'settings'       => 'tesseract_social_account10_name',
						'type'           => 'text',
						'priority' 		 => 2					
					)
				)
			);
	
		$wp_customize->add_setting( 'tesseract_social_account10_url', array(
				'transport'         => 'postMessage',
				'sanitize_callback' => 'esc_url'
		) );
						
			$wp_customize->add_control(
				new WP_Customize_Control(
					$wp_customize,
					'tesseract_social_account10_url_control',
					array(
						'label'          => $accountUrl,
						'section'        => 'tesseract_social_account10',
						'settings'       => 'tesseract_social_account10_url',
						'type'           => 'text',
						'priority' 		 => 2					
					)
				)
			);

		$wp_customize->add_setting( 'tesseract_social_account10_image', array(
				'transport'         => 'postMessage',
				'sanitize_callback' => 'esc_url'
		) );

			$wp_customize->add_control(
				   new WP_Customize_Image_Control(
					   $wp_customize,
					   'tesseract_social_account10_image_control',
					   array(
						   'label'      => __( 'Upload an icon', 'tesseract' ),
						   'section'    => 'tesseract_social_account10',
						   'settings'   => 'tesseract_social_account10_image',
						   'priority' 		 => 3				    
					   )
				   )
			   );