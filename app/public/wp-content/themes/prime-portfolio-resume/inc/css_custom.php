<?php

$prime_portfolio_resume_custom_css = "";

/*-------------------- Container Width-------------------*/

$prime_portfolio_resume_theme_width = get_theme_mod( 'prime_portfolio_resume_theme_width','full-width');

if($prime_portfolio_resume_theme_width == 'full-width'){
$prime_portfolio_resume_custom_css .='body{';
	$prime_portfolio_resume_custom_css .='max-width: 100% !important;';
$prime_portfolio_resume_custom_css .='}';
}else if($prime_portfolio_resume_theme_width == 'container'){
$prime_portfolio_resume_custom_css .='body{';
	$prime_portfolio_resume_custom_css .='width: 80% !important; padding-right: 15px; padding-left: 15px;  margin-right: auto !important; margin-left: auto !important;';
$prime_portfolio_resume_custom_css .='}';
}else if($prime_portfolio_resume_theme_width == 'container-fluid'){
$prime_portfolio_resume_custom_css .='body{';
	$prime_portfolio_resume_custom_css .='width: 95% !important;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
$prime_portfolio_resume_custom_css .='}';
}

/*-------------------- Single Post Alignment-------------------*/

$prime_portfolio_resume_single_post_align = get_theme_mod( 'prime_portfolio_resume_single_post_align','left-align');

if($prime_portfolio_resume_single_post_align == 'left-align'){
$prime_portfolio_resume_custom_css .='body:not(.hide-post-meta) .post{';
	$prime_portfolio_resume_custom_css .='text-align: left';
$prime_portfolio_resume_custom_css .='}';
}else if($prime_portfolio_resume_single_post_align == 'right-align'){
$prime_portfolio_resume_custom_css .='body:not(.hide-post-meta) .post{';
	$prime_portfolio_resume_custom_css .='text-align: right';
$prime_portfolio_resume_custom_css .='}';
}else if($prime_portfolio_resume_single_post_align == 'center-align'){
$prime_portfolio_resume_custom_css .='body:not(.hide-post-meta) .post{';
	$prime_portfolio_resume_custom_css .='text-align: center';
$prime_portfolio_resume_custom_css .='}';
}


/*-------------------- Scroll Top Alignment-------------------*/

$prime_portfolio_resume_scroll_top_alignment = get_theme_mod( 'prime_portfolio_resume_scroll_top_alignment','right-align');

if($prime_portfolio_resume_scroll_top_alignment == 'right-align'){
$prime_portfolio_resume_custom_css .='#button{';
	$prime_portfolio_resume_custom_css .='right: 5%;';
$prime_portfolio_resume_custom_css .='}';
}else if($prime_portfolio_resume_scroll_top_alignment == 'center-align'){
$prime_portfolio_resume_custom_css .='#button{';
	$prime_portfolio_resume_custom_css .='right:0; left:0; margin: 0 auto;';
$prime_portfolio_resume_custom_css .='}';
}else if($prime_portfolio_resume_scroll_top_alignment == 'left-align'){
$prime_portfolio_resume_custom_css .='#button{';
	$prime_portfolio_resume_custom_css .='left: 5%;';
$prime_portfolio_resume_custom_css .='}';
}

/*-------------------- Archive Page Pagination Alignment-------------------*/

$prime_portfolio_resume_archive_pagination_alignment = get_theme_mod( 'prime_portfolio_resume_archive_pagination_alignment','left-align');

if($prime_portfolio_resume_archive_pagination_alignment == 'right-align'){
$prime_portfolio_resume_custom_css .='.pagination{';
	$prime_portfolio_resume_custom_css .='justify-content: end;';
$prime_portfolio_resume_custom_css .='}';
}else if($prime_portfolio_resume_archive_pagination_alignment == 'center-align'){
$prime_portfolio_resume_custom_css .='.pagination{';
	$prime_portfolio_resume_custom_css .='justify-content: center;';
$prime_portfolio_resume_custom_css .='}';
}else if($prime_portfolio_resume_archive_pagination_alignment == 'left-align'){
$prime_portfolio_resume_custom_css .='.pagination{';
	$prime_portfolio_resume_custom_css .='justify-content: start;';
$prime_portfolio_resume_custom_css .='}';
}

/*-------------------- Scroll Top Responsive-------------------*/

$prime_portfolio_resume_resp_scroll_top = get_theme_mod( 'prime_portfolio_resume_resp_scroll_top',true);
if($prime_portfolio_resume_resp_scroll_top == true && get_theme_mod( 'prime_portfolio_resume_footer_scroll_to_top',true) != true){
	$prime_portfolio_resume_custom_css .='#button.show{';
		$prime_portfolio_resume_custom_css .='visibility:hidden !important;';
	$prime_portfolio_resume_custom_css .='} ';
}
if($prime_portfolio_resume_resp_scroll_top == true){
	$prime_portfolio_resume_custom_css .='@media screen and (max-width:575px) {';
	$prime_portfolio_resume_custom_css .='#button.show{';
		$prime_portfolio_resume_custom_css .='visibility:visible !important;';
	$prime_portfolio_resume_custom_css .='} }';
}else if($prime_portfolio_resume_resp_scroll_top == false){
	$prime_portfolio_resume_custom_css .='@media screen and (max-width:575px){';
	$prime_portfolio_resume_custom_css .='#button.show{';
		$prime_portfolio_resume_custom_css .='visibility:hidden !important;';
	$prime_portfolio_resume_custom_css .='} }';
}

/*-------------------- Preloader Responsive-------------------*/

	$prime_portfolio_resume_resp_loader = get_theme_mod('prime_portfolio_resume_resp_loader',false);
	if($prime_portfolio_resume_resp_loader == true && get_theme_mod('prime_portfolio_resume_preloader_setting',false) == false){
		$prime_portfolio_resume_custom_css .='@media screen and (min-width:575px){
			.preloader{';
			$prime_portfolio_resume_custom_css .='display:none !important;';
		$prime_portfolio_resume_custom_css .='} }';
	}

	if($prime_portfolio_resume_resp_loader == false){
		$prime_portfolio_resume_custom_css .='@media screen and (max-width:575px){
			.preloader{';
			$prime_portfolio_resume_custom_css .='display:none !important;';
		$prime_portfolio_resume_custom_css .='} }';
	}