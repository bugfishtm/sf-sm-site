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
		You can set up current site module POST configuration here.
	***********************************************************************************************************/

	/***********************************************************************************************************
		Defer Default User Sites
	***********************************************************************************************************/
		if(!defined("_HIVE_DEFERSITE_MAILCHANGE_")) { 	define("_HIVE_DEFERSITE_MAILCHANGE_", 		false); }
		if(!defined("_HIVE_DEFERSITE_PASSCHANGE_")) { 	define("_HIVE_DEFERSITE_PASSCHANGE_", 		false); }
		if(!defined("_HIVE_DEFERSITE_RECOVER_")) { 		define("_HIVE_DEFERSITE_RECOVER_", 			false); }
		if(!defined("_HIVE_DEFERSITE_LOGIN_")) { 		define("_HIVE_DEFERSITE_LOGIN_", 			false); }
		if(!defined("_HIVE_DEFERSITE_LOGOUT_")) { 		define("_HIVE_DEFERSITE_LOGOUT_", 			false); }
		if(!defined("_HIVE_DEFERSITE_REGISTER_")) { 	define("_HIVE_DEFERSITE_REGISTER_", 		false); }
		if(!defined("_HIVE_DEFERSITE_LANGCHANGE_")) { 	define("_HIVE_DEFERSITE_LANGCHANGE_", 		false); }
		if(!defined("_HIVE_DEFERSITE_MODESWITCH_")) { 	define("_HIVE_DEFERSITE_MODESWITCH_", 		false); }
		if(!defined("_HIVE_DEFERSITE_2FA_")) { 			define("_HIVE_DEFERSITE_2FA_", 				false); }
		if(!defined("_HIVE_DEFERSITE_ACTIVATE_")) { 	define("_HIVE_DEFERSITE_ACTIVATE_", 		false); }
		
	/***********************************************************************************************************
		Enable/Disable Default User Sites
	***********************************************************************************************************/
		if(!defined("_HIVE_ENABLESITE_MAILCHANGE_")) { 	define("_HIVE_ENABLESITE_MAILCHANGE_", 		false); }
		if(!defined("_HIVE_ENABLESITE_PASSCHANGE_")) { 	define("_HIVE_ENABLESITE_PASSCHANGE_", 		true); }
		if(!defined("_HIVE_ENABLESITE_RECOVER_")) { 	define("_HIVE_ENABLESITE_RECOVER_", 		false); }
		if(!defined("_HIVE_ENABLESITE_LOGIN_")) { 		define("_HIVE_ENABLESITE_LOGIN_", 			true); }
		if(!defined("_HIVE_ENABLESITE_LOGOUT_")) { 		define("_HIVE_ENABLESITE_LOGOUT_", 			true); }
		if(!defined("_HIVE_ENABLESITE_REGISTER_")) { 	define("_HIVE_ENABLESITE_REGISTER_", 		false); }
		if(!defined("_HIVE_ENABLESITE_LANGCHANGE_")) { 	define("_HIVE_ENABLESITE_LANGCHANGE_", 		true); }
		if(!defined("_HIVE_ENABLESITE_MODESWITCH_")) { 	define("_HIVE_ENABLESITE_MODESWITCH_", 		true); }
		if(!defined("_HIVE_ENABLESITE_2FA_")) { 		define("_HIVE_ENABLESITE_2FA_", 			true); }
		if(!defined("_HIVE_ENABLESITE_ACTIVATE_")) { 	define("_HIVE_ENABLESITE_ACTIVATE_", 		false); }		
		
	/***********************************************************************************************************
		Javascript.php/Stylesheet.php Cache Header Settings (and maybe used for additional files)
	***********************************************************************************************************/		
		if(!defined("_HIVE_SCRIPT_CACHE_T_")) { 		define("_HIVE_SCRIPT_CACHE_T_", 			"no-store, no-cache, must-revalidate, max-age=0"); }
		if(!defined("_HIVE_SCRIPT_CACHE_F_")) {		 	define("_HIVE_SCRIPT_CACHE_F_", 			"post-check=0, pre-check=0"); }
		if(!defined("_HIVE_SCRIPT_CACHE_P_")) { 		define("_HIVE_SCRIPT_CACHE_P_", 			"no-cache"); }
		
	/***********************************************************************************************************
		Index.php Exeuction Constants for Hitcounter and Benchmark Logging
	***********************************************************************************************************/	
		if(!defined("_HIVE_BENCHMARK_EXECUTE_")) { 		define("_HIVE_BENCHMARK_EXECUTE_", 			false); }		
		if(!defined("_HIVE_HITCOUNTER_EXECUTE_")) { 	define("_HIVE_HITCOUNTER_EXECUTE_", 		false); }		
		
	/***********************************************************************************************************
		Create an Initial Robots File
	***********************************************************************************************************/		
		if(!defined("_HIVE_ROBOTS_CREATE_")) { 			define("_HIVE_ROBOTS_CREATE_", 				false); }