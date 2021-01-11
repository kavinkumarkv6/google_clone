<?php
	error_reporting(E_ALL);
	include "dbconfig.php";
	
	$crud 	=	new Operation();
	
	$result_keys    = array();

	$error_msg 		= "";
	if( isset( $_POST['google_search'] ) )
	{
		$keyword 		=	$_POST['search_keyword'];
		$keyword_res	=	$crud->search_data_for_keyword( $keyword );

		if( $keyword_res["appresponse"] == "success" )
		{
			$result_keys 	=	 $keyword_res["resultData"];
		}
		else 
		{
			$error_msg		= 	$keyword_res["errorMessage"];
		}
	} 
?>
<!DOCTYPE html>
<html lang="en-IN">
<head>
	<meta content="origin"  name="referrer">
	<meta charset="UTF-8">
	<link rel="shortcut icon" type="image/x-icon" href="images/fav-icon/googleg_standard_color_128dp.png" sizes="16x16"/>
	<meta name="viewport" 	content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" 	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<link rel="stylesheet" 	type="text/css" href="css/common_styles.css">
  	<link rel="stylesheet" 	href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title><?php echo $keyword; ?>-Google Search</title>
</head>
<body>
	<header>
		<div class="top-outer">
			<div>
				<div class="over_all_div"></div>
			</div>
			<div class="heding_start">
				<div>
					<div>
						<div class="log_properties">
							<div class="log_flot">
								<div class="log_outer">
									<div class="gappcss">
										<div class="pad_gpad">
											<div class="pad_posi">
												<a class="h_o_d_4_1_1_1" href="https://www.google.co.in/intl/en/about/products?tab=wh" title="Google apps" aria-expanded="false" role="button" tabindex="0"></a>			
											</div>
										</div>
									</div>
									<a class="result_sign" id="gb_70" href="https://accounts.google.com/ServiceLogin?hl=en&amp;passive=true&amp;continue=https://www.google.com/&amp;ec=GAZAAQ" target="_top">Sign in</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="common_resulthead">
					<div></div>
				</div>
				<form class="search_form" action="#" method="post">
					<div>
						<div class="ser_with_lo">
							<div class="logo_div_css">
								<a href="https://www.google.com/webhp?hl=en&amp;sa=X&amp;ved=0ahUKEwi5vZXo9JPuAhVD4zgGHR27Dv4QPAgI" title="Go to Google Home" id="logo" data-hveid="8">
									<img src="images/googlelogo_color_92x30dp.png">
								</a>
							</div>
							<div class="search_result_second">
								<div class="search_withMike">
									<div class="resstart_div"></div>
									<div class="search_box_div_res">
										<div class="search_box_chid_1"></div>
										<input type="text" value="<?php echo $keyword; ?>" name="search_keyword" class="search_keyword_class">
									</div>
									<div class="cancel_with_mike">
										<div class="cancel_div">
											<span class="canicon">
												<svg focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path></svg>
											</span>
											<span class="supporticon"></span>
										</div>
										<div class="mike_div">
											<img src="images/374536.svg" class="microphone_design">
										</div>
									</div>
								</div>
								<button type="submit" name="google_search" class="res_searchsubmit_btn" aria-label="Google Search">
									<div class="btn_inside_div">
										<span class="g_search_div_op">
											<i class="fa fa-search"></i>
										</span>
									</div>
								</button>
							</div>
						</div>
					</div>
				</form>
			</div>
			<div></div>
		</div>	
	</header>
	<main>
				<div class="result_main_out">
					<div class="result_main_out_1">
						<div></div>
						<div class="result_main_out_2">
							<div class="result_main_out_3">
								<div class="result_main_out_4">
									<div></div>
									<div>
										<div class="result_main_out_5">
											<?php 
												if( $error_msg != "" )
												{
													echo "<h3>".$error_msg."</h3>";
												} 
												else 
												{
													for( $i=0;$i<count( $result_keys );$i++ )
													{
											?>
														<div class="search_con">
															<div class="inner_c">
																<div class="inner_c_1">
																	<a href="<?php echo $result_keys[$i]['ggsl_search_link']; ?>">
																		<br>
																		<h3 class="heading_cs">
																			<span>
																				<?php echo $result_keys[$i]['ggsl_search_title']; ?>
																			</span>
																		</h3>
																		<div class="link_div">
																			<cite class="link_use">
																				<?php echo $result_keys[$i]['ggsl_search_link']; ?>
																				<span class="site_class">
																					<span><?php echo $result_keys[$i]['ggsl_search_title']; ?></span>
																				</span>
																			</cite>
																		</div>
																	</a>
																</div>
																<div class="descri_det">
																	<div>
																		<span class="des_span">
																			<span><?php echo date("l d Y" ); ?></span>
																			<?php  echo $result_keys[$i]['ggsl_search_description'];?>
																		</span>
																	</div>
																</div>
															</div>
														</div>	
											<?php
													}
												}												
											?>
											


										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>


			
	</main>
	<footer >
		<div class="footer">
			<div class="first_footer">
				<div class="footer_css">
					<span class="f-size">india</span>	
				</div>				
			</div>
			<div class="first_footer">
				<div class="footer_css">
					<span class="first_content">
						<a class="Fx4vi_1" href="https://www.google.com/intl/en_in/ads/?subid=ww-ww-et-g-awa-a-g_hpafoot1_1!o2&amp;utm_source=google.com&amp;utm_medium=referral&amp;utm_campaign=google_hpafooter&amp;fg=1" ping="/url?sa=t&amp;rct=j&amp;source=webhp&amp;url=https://www.google.com/intl/en_in/ads/%3Fsubid%3Dww-ww-et-g-awa-a-g_hpafoot1_1!o2%26utm_source%3Dgoogle.com%26utm_medium%3Dreferral%26utm_campaign%3Dgoogle_hpafooter%26fg%3D1&amp;ved=0ahUKEwjlo4bGoJHuAhVcwTgGHZoZDeUQkdQCCB4">Advertising</a>
						<a class="Fx4vi" href="https://www.google.com/services/?subid=ww-ww-et-g-awa-a-g_hpbfoot1_1!o2&amp;utm_source=google.com&amp;utm_medium=referral&amp;utm_campaign=google_hpbfooter&amp;fg=1" ping="/url?sa=t&amp;rct=j&amp;source=webhp&amp;url=https://www.google.com/services/%3Fsubid%3Dww-ww-et-g-awa-a-g_hpbfoot1_1!o2%26utm_source%3Dgoogle.com%26utm_medium%3Dreferral%26utm_campaign%3Dgoogle_hpbfooter%26fg%3D1&amp;ved=0ahUKEwjlo4bGoJHuAhVcwTgGHZoZDeUQktQCCB8">Business</a>
						<a class="Fx4vi" href="https://about.google/?utm_source=google-IN&amp;utm_medium=referral&amp;utm_campaign=hp-footer&amp;fg=1" ping="/url?sa=t&amp;rct=j&amp;source=webhp&amp;url=https://about.google/%3Futm_source%3Dgoogle-IN%26utm_medium%3Dreferral%26utm_campaign%3Dhp-footer%26fg%3D1&amp;ved=0ahUKEwjlo4bGoJHuAhVcwTgGHZoZDeUQkNQCCCA">About</a>
						<a class="Fx4vi" href="https://google.com/search/howsearchworks/?fg=1">  How Search works </a>
					</span>
					<span class="second_content">
						<a class="Fx4vi" href="https://policies.google.com/privacy?hl=en-IN&amp;fg=1" ping="/url?sa=t&amp;rct=j&amp;source=webhp&amp;url=https://policies.google.com/privacy%3Fhl%3Den-IN%26fg%3D1&amp;ved=0ahUKEwiLhK-esJHuAhUUwzgGHa0bDSEQ8awCCBo">Privacy</a>
						<a class="Fx4vi" href="https://policies.google.com/terms?hl=en-IN&amp;fg=1" ping="/url?sa=t&amp;rct=j&amp;source=webhp&amp;url=https://policies.google.com/terms%3Fhl%3Den-IN%26fg%3D1&amp;ved=0ahUKEwiLhK-esJHuAhUUwzgGHa0bDSEQ8qwCCBs">Terms</a>
						<span jscontroller="GPhFgf" style="display:inline-block;position:relative">
							<a class="Fx4vi" href="https://www.google.com/preferences?hl=en" id="fsettl" aria-controls="fsett" aria-expanded="false" aria-haspopup="true" role="button" jsaction="noGWuc" ping="/url?sa=t&amp;rct=j&amp;source=webhp&amp;url=https://www.google.com/preferences%3Fhl%3Den&amp;ved=0ahUKEwiLhK-esJHuAhUUwzgGHa0bDSEQzq0CCBw">Settings</a>
							<span id="fsett" aria-labelledby="fsettl" role="menu" style="display:none">
								<a href="https://www.google.com/preferences?hl=en-IN&amp;fg=1" role="menuitem">Search settings</a>
								<a href="/advanced_search?hl=en-IN&amp;fg=1" role="menuitem">Advanced search</a>
								<a href="/history/privacyadvisor/search/unauth?utm_source=googlemenu&amp;fg=1" role="menuitem">Your data in Search</a>
								<a href="/history/optout?hl=en-IN&amp;fg=1" role="menuitem">Search history</a>
								<a href="https://support.google.com/websearch/?p=ws_results_help&amp;hl=en-IN&amp;fg=1" role="menuitem">Search help</a>
								<a href="#" data-bucket="websearch" role="menuitem" id="dk2qOd" target="_blank" jsaction="gf.sf" data-ved="0ahUKEwiLhK-esJHuAhUUwzgGHa0bDSEQLggd">Send feedback</a>
							</span>
						</span>
					</span>
				</div>	
			</div>
		</div>
	</footer>
</body>
</html>