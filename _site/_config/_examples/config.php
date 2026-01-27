<?php
	#	 ░▒▓███████▓▒░▒▓█▓▒░░▒▓█▓▒░▒▓█▓▒░▒▓████████▓▒░▒▓████████▓▒░▒▓████████▓▒░▒▓█▓▒░░▒▓███████▓▒░▒▓█▓▒░░▒▓█▓▒░ 
	#	░▒▓█▓▒░      ░▒▓█▓▒░░▒▓█▓▒░▒▓█▓▒░  ░▒▓█▓▒░   ░▒▓█▓▒░      ░▒▓█▓▒░      ░▒▓█▓▒░▒▓█▓▒░      ░▒▓█▓▒░░▒▓█▓▒░ 
	#	░▒▓█▓▒░      ░▒▓█▓▒░░▒▓█▓▒░▒▓█▓▒░  ░▒▓█▓▒░   ░▒▓█▓▒░      ░▒▓█▓▒░      ░▒▓█▓▒░▒▓█▓▒░      ░▒▓█▓▒░░▒▓█▓▒░ 
	#	 ░▒▓██████▓▒░░▒▓█▓▒░░▒▓█▓▒░▒▓█▓▒░  ░▒▓█▓▒░   ░▒▓██████▓▒░ ░▒▓██████▓▒░ ░▒▓█▓▒░░▒▓██████▓▒░░▒▓████████▓▒░ 
	#		   ░▒▓█▓▒░▒▓█▓▒░░▒▓█▓▒░▒▓█▓▒░  ░▒▓█▓▒░   ░▒▓█▓▒░      ░▒▓█▓▒░      ░▒▓█▓▒░      ░▒▓█▓▒░▒▓█▓▒░░▒▓█▓▒░ 
	#		   ░▒▓█▓▒░▒▓█▓▒░░▒▓█▓▒░▒▓█▓▒░  ░▒▓█▓▒░   ░▒▓█▓▒░      ░▒▓█▓▒░      ░▒▓█▓▒░      ░▒▓█▓▒░▒▓█▓▒░░▒▓█▓▒░ 
	#	░▒▓███████▓▒░ ░▒▓██████▓▒░░▒▓█▓▒░  ░▒▓█▓▒░   ░▒▓████████▓▒░▒▓█▓▒░      ░▒▓█▓▒░▒▓███████▓▒░░▒▓█▓▒░░▒▓█▓▒░ 
		
	#	Copyright (C) 2025 Jan Maurice Dahlmanns [Bugfish]

	#	This program is free software: you can redistribute it and/or modify
	#	it under the terms of the GNU General Public License as published by
	#	the Free Software Foundation, either version 3 of the License, or
	#	(at your option) any later version.

	#	This program is distributed in the hope that it will be useful,
	#	but WITHOUT ANY WARRANTY; without even the implied warranty of
	#	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	#	GNU General Public License for more details.

	#	You should have received a copy of the GNU General Public License
	#	along with this program.  If not, see <https://www.gnu.org/licenses/>.
		
	/***********************************************************************************************************
		Disable Hardlinking
	***********************************************************************************************************/
	if(!is_array(@$object)) { @http_response_code(@404); @Header("Location: ../"); exit(); }
	
	/***********************************************************************************************************
		You can set up current site module configuration here.
	***********************************************************************************************************/

	/***********************************************************************************************************
		Color Settings
		_HIVE_COLOR_ will be automatically set to the actual color by the backend.
	***********************************************************************************************************/
		if(!defined("_HIVE_THEME_COLOR_DEFAULT_")) { 	define("_HIVE_THEME_COLOR_DEFAULT_", 		"#FFFF00"); }

	/***********************************************************************************************************
		Theme Settings
		_HIVE_THEME_ will be automatically set to the actual theme by the backend.
	***********************************************************************************************************/	
		if(!defined("_HIVE_THEME_DEFAULT_")) { 			define("_HIVE_THEME_DEFAULT_", 				"theme3"); }	
		if(!defined("_HIVE_THEME_ARRAY_")) { 			define("_HIVE_THEME_ARRAY_", 				array("theme1", "theme2", "theme3")); }	
		
	/***********************************************************************************************************
		Language Settings
		_HIVE_LANG_ will be automatically set to the actual language by the backend.
	***********************************************************************************************************/
		if(!defined("_HIVE_LANG_ARRAY_")) { 			define("_HIVE_LANG_ARRAY_", 				array("en", "de")); }	
		if(!defined("_HIVE_LANG_DEFAULT_")) { 			define("_HIVE_LANG_DEFAULT_", 				"en"); }
		
	/***********************************************************************************************************
		Activate MySQL Debug Mode
		Will show errors and sql queries to the public, so be cautios.
	***********************************************************************************************************/
		if(!defined("_HIVE_MYSQL_DEBUG_")) { 			define("_HIVE_MYSQL_DEBUG_", 				false); }	
		
	/***********************************************************************************************************
		E-Mail Settings (Header and Footer)
	***********************************************************************************************************/
		if(!defined("_SMTP_MAILS_HEADER_")) { 			define("_SMTP_MAILS_HEADER_", 				'<!doctype html><html><head><meta name="viewport" content="width=device-width, initial-scale=1.0"/><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /><style>body { background-color: #121212; font-family: sans-serif; -webkit-font-smoothing: antialiased; font-size: 14px; line-height: 1.4; margin: 0; padding: 0; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; } .content { background: #FFFFFF; box-sizing: border-box; display: block; margin: 0 auto; max-width: 580px; padding: 10px; border-radius: 5px; margin-top: 15px;  }  .footer { clear: both; margin-top: 10px; text-align: center; width: 100%; color: #000000; font-size: 12px; text-align: center;  }  h1, h2, h3, h4 { color: #000000; font-family: sans-serif; font-weight: 400; line-height: 1.4; margin: 0; margin-bottom: 30px; }  h1 { font-size: 35px; font-weight: 300; text-align: center; text-transform: capitalize; }  a { color: blue; text-decoration: none; } hr { border: 0; border-bottom: 1px solid #242424; margin: 20px 0; }  @media only screen and (max-width: 620px) { div.content { margin-top: 2vw !important; margin-left: 2vw !important; margin-right: 2vw !important;}} a:hover { color: black; } .alert { padding: 15px; margin: 5px; border-radius: 5px; } .alert-danger { background: #FFCDD2; } .alert-success { background: #A5D6A7; } .alert-warning { background: #FFF9C4; }</style></head><body><div class="content">'); }	
		if(!defined("_SMTP_MAILS_FOOTER_")) { 			define("_SMTP_MAILS_FOOTER_", 				'</div></body></html>'); }	
		
	/***********************************************************************************************************
		E-Mail Settings
	***********************************************************************************************************/
		if(!defined("_SMTP_MAILS_IN_HTML_")) { 			define("_SMTP_MAILS_IN_HTML_", 				true); }	
		if(!defined("_SMTP_DEBUG_")) { 					define("_SMTP_DEBUG_", 						0); }	
		if(!defined("_SMTP_INSECURE_")) { 				define("_SMTP_INSECURE_", 					false); }	
		if(!defined("_SMTP_SENDER_MAIL_")) { 			define("_SMTP_SENDER_MAIL_", 				false); }	
		if(!defined("_SMTP_SENDER_NAME_")) { 			define("_SMTP_SENDER_NAME_", 				false); }	
		if(!defined("_SMTP_PASS_")) { 					define("_SMTP_PASS_", 						false); }	
		if(!defined("_SMTP_USER_")) { 					define("_SMTP_USER_", 						false); }	
		if(!defined("_SMTP_AUTH_")) { 					define("_SMTP_AUTH_", 						false); }	
		if(!defined("_SMTP_PORT_")) { 					define("_SMTP_PORT_", 						false); }	
		if(!defined("_SMTP_HOST_")) { 					define("_SMTP_HOST_", 						false); }	

	/***********************************************************************************************************
		Active the referer logging?
	***********************************************************************************************************/
		if(!defined("_HIVE_REFERER_")) { 				define("_HIVE_REFERER_", 					false); }	

	/***********************************************************************************************************
		Max failures of an IP before blacklisting
	***********************************************************************************************************/
		if(!defined("_HIVE_IP_LIMIT_")) { 				define("_HIVE_IP_LIMIT_", 					100000); }					

	/***********************************************************************************************************
		Redis Settings
	***********************************************************************************************************/	
		if(!defined("_REDIS_")) { 						define("_REDIS_", 							false); }	
		if(!defined("_REDIS_HOST_")) { 					define("_REDIS_HOST_", 						"localhost"); }	
		if(!defined("_REDIS_PORT_")) { 					define("_REDIS_PORT_", 						6379); }	
		if(!defined("_REDIS_PREFIX_")) { 				define("_REDIS_PREFIX_", 					_HIVE_SITE_PREFIX_); }			

	/***********************************************************************************************************
		Captcha Settings
	***********************************************************************************************************/
		if(!defined("_CAPTCHA_CODE_")) { 				define("_CAPTCHA_CODE_", 					mt_rand(1000, 9999)); }	
		if(!defined("_CAPTCHA_LINES_")) { 				define("_CAPTCHA_LINES_", 					mt_rand(5, 12)); }	
		if(!defined("_CAPTCHA_SQUARES_")) { 			define("_CAPTCHA_SQUARES_", 				mt_rand(5, 12)); }	
		if(!defined("_CAPTCHA_HEIGHT_")) { 				define("_CAPTCHA_HEIGHT_", 					"70"); }					
		if(!defined("_CAPTCHA_WIDTH_")) { 				define("_CAPTCHA_WIDTH_", 					"200"); }					
		if(!defined("_CAPTCHA_COLORS_")) { 				define("_CAPTCHA_COLORS_", 					false); }					
		if(!defined("_CAPTCHA_FONT_PATH_")) { 			define("_CAPTCHA_FONT_PATH_", 				"../_font/captcha.ttf"); }					

	/***********************************************************************************************************
		User Settings
	***********************************************************************************************************/					
		if(!defined("_USER_MAX_SESSION_")) { 			define("_USER_MAX_SESSION_", 				7); }
		if(!defined("_USER_TOKEN_TIME_")) { 			define("_USER_TOKEN_TIME_", 				600); }
		if(!defined("_USER_AUTOBLOCK_")) { 				define("_USER_AUTOBLOCK_", 					99000); }
		if(!defined("_USER_WAIT_COUNTER_")) { 			define("_USER_WAIT_COUNTER_", 				120); }
		if(!defined("_USER_LOG_SESSIONS_")) { 			define("_USER_LOG_SESSIONS_", 				true); }
		if(!defined("_USER_LOG_IP_")) { 				define("_USER_LOG_IP_", 					false); }
		if(!defined("_USER_REC_DROP_")) { 				define("_USER_REC_DROP_", 					true); }
		if(!defined("_USER_MULTI_LOGIN_")) { 			define("_USER_MULTI_LOGIN_", 				true); }
		if(!defined("_USER_PF_SIGNS_")) { 				define("_USER_PF_SIGNS_", 					7); }
		if(!defined("_USER_PF_CAPSIGNS_")) { 			define("_USER_PF_CAPSIGNS_", 				1); }
		if(!defined("_USER_PF_SMSIGNS_")) { 			define("_USER_PF_SMSIGNS_", 				1); }
		if(!defined("_USER_PF_SPSIGNS_")) { 			define("_USER_PF_SPSIGNS_", 				0); }
		if(!defined("_USER_PF_NUMSIGNS_")) { 			define("_USER_PF_NUMSIGNS_", 				1); }
		if(!defined("_USER_INITIAL_USERNAME_")) { 		define("_USER_INITIAL_USERNAME_", 			"admin@admin.local"); }
		if(!defined("_USER_INITIAL_USERPASS_")) { 		define("_USER_INITIAL_USERPASS_", 			"changeme"); }				

	/***********************************************************************************************************
		Website Title
	***********************************************************************************************************/	
		if(!defined("_HIVE_TITLE_")) { 					define("_HIVE_TITLE_", 						"CMS"); }				

	/***********************************************************************************************************
		Website Title Spacer (for browser tabs and meta titles)
	***********************************************************************************************************/	
		if(!defined("_HIVE_TITLE_SPACER_")) { 			define("_HIVE_TITLE_SPACER_", 				" - "); }			
			
	/***********************************************************************************************************
		Use seo friendly urls?
		Fetch current location information with auto set constant: _HIVE_URL_CUR_
	***********************************************************************************************************/	
		if(!defined("_HIVE_URL_SEO_")) { 				define("_HIVE_URL_SEO_", 					false); }			
			
	/***********************************************************************************************************
		Get Location URL Keys
		Fetch current location information with auto set constant: _HIVE_URL_CUR_
	***********************************************************************************************************/
		if(!defined("_HIVE_URL_GET_")) { 				define("_HIVE_URL_GET_", 					array("hl1", "hl2", "hl4", "hl5", "hl6")); }				
			
	/***********************************************************************************************************
		Time in seconds until CSRF Keys expire
	***********************************************************************************************************/	
		if(!defined("_HIVE_CSRF_TIME_")) { 				define("_HIVE_CSRF_TIME_", 					2400); }							
			
	/***********************************************************************************************************
		Enable curl logging?
	***********************************************************************************************************/	
		if(!defined("_HIVE_CURL_LOGGING_")) { 			define("_HIVE_CURL_LOGGING_", 				false); }						
			
	/***********************************************************************************************************
		Cronjob Settings
	***********************************************************************************************************/	
		if(!defined("_CRON_ONLY_CLI_")) { 				define("_CRON_ONLY_CLI_", 					true); }						
			
	/***********************************************************************************************************
		TinyMCE Settings
	***********************************************************************************************************/	
		if(!defined("_TINYMCE_PLUGINS_")) { 			define("_TINYMCE_PLUGINS_", 				"preview importcss searchreplace autolink directionality visualblocks visualchars fullscreen image link media codesample table charmap pagebreak nonbreaking anchor advlist lists wordcount help charmap quickbars emoticons code"); }		
		if(!defined("_TINYMCE_MENU_BAR_")) { 			define("_TINYMCE_MENU_BAR_", 				"file edit view insert format table help"); }		
		if(!defined("_TINYMCE_TOOL_BAR_")) { 			define("_TINYMCE_TOOL_BAR_", 				"undo redo | bold italic underline strikethrough | blocks fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent | numlist bullist | image media link"); }					
			
	/***********************************************************************************************************
		Enable the javascript action to fetch javascript error messages?
	***********************************************************************************************************/			
		if(!defined("_HIVE_JS_ACTION_ACTIVE_")) { 		define("_HIVE_JS_ACTION_ACTIVE_", 			false); }	
		
	/***********************************************************************************************************
		URL Settings
		CAUTION: It is not advised to declare this constant, as it is setup by the initialization process.
		For experimental reasons its left in this file, but do not use it in productive environments.
	***********************************************************************************************************/			
		//if(!defined("_HIVE_URL_")) { 					define("_CRON_ENABLE_LOG_", 				$object["url"]); }