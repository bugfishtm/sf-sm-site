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
	if(!is_array(@$object)) { @http_response_code(404); Header("Location: ../"); exit(); }
	
	/***********************************************************************************************************
		Initialize the versioning array (mandatory)
	***********************************************************************************************************/	
		$x = array();

	/***********************************************************************************************************
		Module Setup
	***********************************************************************************************************/	

		/*******************************************************************************************************
			Unique Module Identifier
			 - This is a unique id for your module
			 - If you want your module in the public store contact the developers to get your unique module id.
			 - Request unique module id for official publication at the suitefish staff.
			 - If you do not have a registered unique module id start your rname with "xxx"
			 - Use maximum of 15 signs
			 - No special chars, only a-Z
			 - No numeric chars
			 - Underscore (_) prefix is dedicated to suitefish official releases
			 - This variable is mandatory
		*******************************************************************************************************/	
		$x["rname"] 			= "_site";

		/*******************************************************************************************************
			Available Languages 
			 - Short Codes of available languages in PHP Array
			 - This variable is mandatory
		*******************************************************************************************************/	
		$x["lang"]				= array("en", "de", "fr", "it", "es", "zh", "ja", "in", "kr", "pt", "ru", "tr");		

		/*******************************************************************************************************
			Build Number
			 - Do only use integer values here
			 - Will extend the version number
			 - Relevant for database updates/changes
			 - Do not use special chars, not even dots
			 - This variable is mandatory
		*******************************************************************************************************/	
		$x["build"] 			= "100";

		/*******************************************************************************************************
			Module Version
			 - Always add the build number at the end, seperated by a dot (.)
			 - Define the main Version number if the module.
			 - This variable is mandatory
		*******************************************************************************************************/
		$x["version"] 			= "1.10.".$x["build"];	

		/*******************************************************************************************************
			Module Name 
			 - Define the Title of the Module displayed in different frontpage areas.
			 - Only text, no html codes
			 - This variable is mandatory
		*******************************************************************************************************/
		$x["name"] 				= "Template: Website Module";
		
		/*******************************************************************************************************
			Module Description 
			 - Define the Description of the Module displayed in different frontpage areas.
			 - Only text and simple html codes (like br, li, table)
			 - Do not use style, script or other kind of complex tags
			 - This variable is mandatory
		*******************************************************************************************************/
		$x["description"] 		= "This is a integrated website module example! This kind of website modules use the suitefish-cms as a platform to allow multi-site hosting with one instance!";
		
		/*******************************************************************************************************
			Module Type
			 - There are different Types of Modules inside Suitefish CMS
			 - The set ID 3 is dedicated to image modules and will than be recognized as one.
			 - Other possible values: 1 - Site | 2 - Extension | 3 - Image | 4 - Windows | 5 - Docker | 6 - Theme
			 - This variable is mandatory
		*******************************************************************************************************/
		$x["type"] 				= 1;
		
		/*******************************************************************************************************
			Custom Update Server URL for this Module, if not the official Update Server
			 - If defined, an alternate Update Server will be used for updating this module.
			 - Set update server like https://update_server
			 - If false, default Suitefish Update Server will be used.
		*******************************************************************************************************/
		$x["custom_update_server"] 		= false;
		
		/*******************************************************************************************************
			Minimal Suietfish Version to run this module
			 - Define the minimal version of CMS required to run this module.
			 - This variable is mandatory
		*******************************************************************************************************/
		$x["cms_version_min"] 	= "7.10.100";
		
		/*******************************************************************************************************
			Module Dependencies
			 - If this module requires another module to be active and running, make array("MODNAME", "MODNAME")
			 - Otherwhise set to false
		*******************************************************************************************************/	
		$x["dependencies"]		= false;

		/*******************************************************************************************************
			Modules Parent Module
			 - Only for developers developing own site modules, who wanna copy or use or module functionality
				and assign modules to their own project, add your dependant project id here.
			 - If you change this, you will not be able to use this module in the official suitefish 
				administrator environment.
		*******************************************************************************************************/
		$x["parent_rname"] 		= false;

	/***********************************************************************************************************
		Additional Data
	***********************************************************************************************************/		

		/*******************************************************************************************************
			Module License
			 - gplv3, gplv2, mit, bsd, bsd2, ...
			 - can be false
		*******************************************************************************************************/
		$x["license"] 			= "gplv3";
		
		/*******************************************************************************************************
			Module Author Name
			 - can be false
		*******************************************************************************************************/
		$x["author"] 			= "Suitefish";
		
		/*******************************************************************************************************
			Module Author Mail
			 - can be false
		*******************************************************************************************************/
		$x["mail"] 				= false;
		
		/*******************************************************************************************************
			Module Author Website
			 - can be false
		*******************************************************************************************************/
		$x["website"] 			= false;
		
		/*******************************************************************************************************
			Module Documentation Website
			 - can be false
		*******************************************************************************************************/
		$x["documentation"] 	= "https://bugfishtm.github.io/suitefish-cms/";	
		
		/*******************************************************************************************************
			Module Github Website
			 - can be false
		*******************************************************************************************************/
		$x["github"] 			= "https://github.com/bugfishtm/suitefish-cms";	
		
		/*******************************************************************************************************
			Module Video URL
			 - a video url about the module if exists
			 - can be false
		*******************************************************************************************************/
		$x["video"] 		= false;	
		
	/***********************************************************************************************************
		Dedicated Website Module Settings
	***********************************************************************************************************/
	
		/*******************************************************************************************************
			Valid for docker Instances
			 - True if this module can be used in the official suitefish docker instance
			 - False if not docker compatible in the official suitefish docker instance
		*******************************************************************************************************/
		$x["docker_valid"] 		= true;
		
		/*******************************************************************************************************
			Require Background Root Worker
			 - Does this Module require an active Background worker?
			 - If true then the background worker is mandatory, a notice will appear upon module installation.
		*******************************************************************************************************/
		$x["require_worker"] 	= false;
		
		/*******************************************************************************************************
			Require Cronjob
			 - Does this Module require an active cronjob?
			 - If true then the cronjob is mandatory, a notice will appear upon module installation.
		*******************************************************************************************************/
		$x["require_cron"] 		= false;

		/*******************************************************************************************************
			Single Instance Module?
			 - If true, than this modules rname can only be deployed a single time on that cms instance.
			 - Recommended for Server Software where duplications of the module activated may lead to issues.
			 - Modules RNAME will be forced to be the folder name
		*******************************************************************************************************/
		$x["single_instance"] 	= false;