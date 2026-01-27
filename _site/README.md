

# 📦 Website Module Example

## 📙 Introduction

This is a integrated website module example! This kind of website modules use the suitefish-cms as a platform to allow multi-site hosting with one instance! For possibilities on triggers and more take a look at trigger and view files at the official administrator module.

You may download the example module here: [Download](https://raw.githubusercontent.com/bugfishtm/suitefish-cms/refs/heads/main/_packages/_site-1.10.100.zip)

## 🛠️ Installation

1. Login to your suitefish instance and browse our official store on your page. If you find the module you are looking for just download the package. Then navigate to the Site Package Area and enable the downloaded site module.

2. Navigate to the Site Module Package Area inside the suitefish instance. Go to the upload section and upload the modules .zip file.  Then navigate to the Site Module Package Area and enable the downloaded site module.

## 📁 Folder Structure 


| Folder/File | Description | Optional |
|----------|--------|----------|
| `./_action/` | Folder for Action Files. | Optional |
| `./_action/_examples` | Examples for Action Files | Optional |  
| `./_admin/` | Folder for Administrator Site Injections. | Optional |
| `./_admin/mod_nav_full.php` | Full own Administration Navigation Section Injection. | Optional |
| `./_admin/mod_nav_pfm.php` | Profile Menu Navigation Injection. | Optional |
| `./_admin/mod_nav_user.php` | User Navigation Injections. | Optional |
| `./_admin/mod_permission.php` | Permissions Injections. | Optional |
| `./_admin/mod_setting.php` | Special Settings Page in Settings Area for this module. | Optional |
| `./_admin/mod_site.php` | Site content Loader File for this module. | Optional |
| `./_admin/mod_topbar.php` | Topbar Injections. | Optional |
| `./_api/` | Folder for API Files. | Optional |
| `./_api/_examples` | Examples for API Files | Optional |  
| `./_assets/` | Assets of the website Module. | Optional |
| `./_changes/`  | Folder for Changelogs | Optional |
| `./_changes/index.php`  | Prevent Directory Listing | Optional | 
| `./_changes/1.10.100.php`  | Changelog for version 1.10.100 | Optional | 
| `./_config/` | Folder for Configuration Files. | Optional |
| `./_config/_examples` | Examples for Configuration Files | Optional |  
| `./_cron/` | Folder for Cronjob Files. | Optional |
| `./_cron/_examples` | Examples for Cronjob Files | Optional |  
| `./_css/` | Folder for CSS Files. | Optional |
| `./_css/_examples` | Examples for CSS Files | Optional |  
| `./_html/` | Folder for HTML Files. | Optional |
| `./_inject/` | Folder for Injection Files. | Optional |
| `./_inject/_examples` | Examples for Injection Files | Optional |  
| `./_js/` | Folder for Javascript Files. | Optional |
| `./_js/_examples` | Examples for Javascript Files | Optional |  
| `./_lang` | Store your language files in this folder | Optional | 
| `./_lang/de.php` | Translation File for German | Optional | 
| `./_lang/en.php` | Translation File for English | Optional | 
| `./_lang/es.php` | Translation File for Spanish | Optional | 
| `./_lang/fr.php` | Translation File for French | Optional | 
| `./_lang/in.php` | Translation File for Hindu | Optional | 
| `./_lang/it.php` | Translation File for Italian | Optional | 
| `./_lang/ja.php` | Translation File for Japanese | Optional | 
| `./_lang/kr.php` | Translation File for Korean | Optional | 
| `./_lang/pt.php` | Translation File for Portuguese | Optional | 
| `./_lang/ru.php` | Translation File for Russian | Optional | 
| `./_lang/tr.php` | Translation File for Turkish | Optional | 
| `./_lang/zh.php` | Translation File for Chinese | Optional | 
| `./_lib/` | Folder for Libraries. | Optional |
| `./_lib/_examples` | Examples for Lbraries Examples | Optional |  
| `./_licenses/` | Folder for External Licenses. | Optional |
| `./_licenses/_examples` | Examples for External Licenses | Optional |  
| `./_mysql/` | Folder for Auto-Installed MySQL Scripts. | Optional |
| `./_mysql/_examples` | Examples for MySQL Scripts | Optional |  
| `./_runtime/` | Folder for Runtime Scripts, to be executed by the background worker every few seconds. | Optional |
| `./_runtime/_examples` | Examples for Runtime Functionalities | Optional |  
| `./_theme/` | Folder for Theme Files. | Optional |
| `./_trigger/` | Folder for Trigger Scripts. | Optional |
| `./_trigger/_examples` | Examples for Trigger Scripts | Optional |  
| `./_update/` | Folder for Update Scripts. | Optional |
| `./_update/_examples` | Examples for Update Scripts | Optional |  
| `./_user/` | Folder for default cms user site override scripts. | Optional |
| `./_user/_examples` | Examples for User Override Scripts | Optional |  
| `./_vendor/` | Folder for third party libraries. | Optional |
| `./_vendor/_examples` | Examples for Vendor Script Folders | Optional |  
| `./_worker/` | Folder for Worker Scripts, to be executed by the background worker on request. | Optional |
| `./_worker/_examples` | Examples for Worker Functionalities | Optional |  
| `./preview.jpg` | Preview image for the store and other areas the module is visble at | Mandatory | 
| `./LICENSE.md` | License information about the module | Mandatory | 
| `./site.php` | Default Loadup File for this Site Module | Mandatory | 
| `./README.md` | Readme file with general information about the module | Mandatory | 
| `./version.php` | Versioning and meta file of the module | Mandatory | 
| `./index.php`  | Prevent Directory Listing | Optional | 


## 📐 Developer Insights

This section provides important information for developers about module development, including essential coding guidelines to be followed prior to submitting or deploying modules.

### 📋 Code Guidelines

Please follow these coding guidelines when developing modules:

- The module's **Rname** identifier must be unique.
- If you plan to publicly release your module, request a unique Rname from the Suitefish staff. Otherwise, prefix your module's Rname with **"int"** to designate it as an internal, non-public module, avoiding duplication.
- Public image modules should have an Rname starting with **"sm"**.
- Ensure the Rname does not exceed 20 characters.
- Avoid using special characters in the Rname, as they may cause critical errors.

### 🧪 Injection Variables

Inside included extension files you have access to special variables in the object array containing language and extension information.

You can access this array keys at: `$object["hive_mode_config"]` for example. 

| **Key**               | **Description**                                                                                         |
|-----------------------|---------------------------------------------------------------------------------------------------------|
| `info`                | Full version.php x array of current extension. |
| `path`                | Full Path to the extensions directory. |
| `name`                | Name of the Extension.|
| `prefix`              | Prefix for MySQL and Redis. |
| `cookie`              | Prefix for cookies and sessions. |
| `prefix_variables`    | Prefix for variables and permissions.        |
| `lang`                | Language object with loaded extension language file. |

### 📚 Language Files

Below you see an example of an english language file (en.php). The first lines prevent public view of the language file. The variables for translations are for the store to make name and description multi-langual. Languages for the injected sites in the administrator module will be stores in the site modules _admin/_lang folder.

``` 
<?php if(isset($this)) { if(!is_object($this)) { Header("Location: ../"); exit(); } } else { Header("Location: ../"); exit(); } ?>

store_version_name=Template: Site Module
store_version_description=Example of an site module for developers.
``` 

In the _lang folder of the site module you can save language files for the frontpage if the site module is activated.

``` 
<?php if(isset($this)) { if(!is_object($this)) { Header("Location: ../"); exit(); } } else { Header("Location: ../"); exit(); } ?>

language_key=Translation
``` 

### 📝 Changelog File

Changelog of changes between this and last version of this module. Store the changelog in simple html format in the $x variable in files fitting the version number at `_changes`.

``` 
$x = "<b>Release 1.10.100</b><br /> - Initial Release";
```

### 🏷️ Version File

This file (version.php) contains detailed information about the module, all variables are mandatory and should be set on a module.

| Variable               | Description                                                                                          | Example / Notes                                                                                  |
|------------------------|------------------------------------------------------------------------------------------------------|------------------------------------------------------------------------------------------------|
| Module Variables and Informations            | - | - |
| `$x["rname"]`            | Unique module identifier.                                                                             | "_extension"; max 15 chars, no special chars or numbers; start with "xxx" if not registered.       |
|                         | Contact suitefish staff to register for official public store ID.                             | Underscore prefix reserved for Suitefish official releases.                                    |
| `$x["lang"]`             | Supported languages expressed as short codes in a PHP array.                                        | `array("en", "de", "fr", "it", "es", "zh", "ja", "in", "kr", "pt", "ru", "tr")`                | 
| `$x["build"]`            | Build number (integer only).                                                                         | `"100"`; used for version extensions and database updates.                                      | 
| `$x["version"]`          | Full module version, including main and build numbers.                                              | `"1.10.100"` (example uses build number appended).                                             | 
| `$x["name"]`             | Module name displayed on front-end areas. Plain text only, no HTML allowed.                         | `"Template: Extension Module"`                                                                      | 
| `$x["description"]`      | Module description shown on front-end areas. Allows simple HTML tags (`br`, `li`, `table`).           | `"Suitefish CMS extension template for developers..."`                                         |
|                         | No scripts, styles, or complex tags allowed.                                                        | Mandatory field.                                                                                |
| `$x["type"]`             | Module type identifier (1=Site, 2=Extension, 3=Image, 4=Windows, 5=Docker, 6=Theme).                | `1` (for site modules)                                                                         | 
| `$x["custom_update_server"]`  | Custom Update Server URL for this Module, if not the official Update Server. | https://update_server | 
| `$x["cms_version_min"]`  | Minimum Suitefish CMS version required for this module.                                             | `"7.10.100"`               |
| `$x["dependencies"]`  | Module dependencies for module or false.                                             | Enter module name dependencies in simple array format. |     
| `$x["parent_rname"]`  | Only for developers developing own site modules, who wanna copy or use or module functionality | Module name of parent module, false for suitefish default module.|   
| Module Author Specific Settings            | - | - |
| `$x["license"]`          | Module license identifier (e.g., `gplv3`, `mit`, `bsd`).                                             | Can be set to `false` if none.                                                                 |
| `$x["author"]`           | Name of module author.                                                                               | `"Suitefish"`; can be `false`.                                                                 |
| `$x["mail"]`             | Email address of the module author.                                                                 | `false` if not provided.                                                                        |
| `$x["website"]`          | Website URL of the module or author.                                                                | `false` if not provided.                                                                        |
| `$x["documentation"]`    | URL to module documentation.                                                                         | `"https://bugfishtm.github.io/suitefish-cms/"`                                                 |
| `$x["github"]`           | GitHub repository URL for the module.                                                               | `"https://github.com/bugfishtm/suitefish-cms"`                                                 |
| `$x["video"]`            | Video URL related to the module (optional).                                                        | `false` if none. |
| Module Type Specific Settings            | - | - |
| `$x["docker_valid"]`            | True if this extension can be used inside a docker container. |
| `$x["require_worker"]`            | True if this extension requires the background worker to run properly.                                                        | `false` if none. |
| `$x["require_cron"]`            | True if this extension requires the cronjob to run properly.                                                        | `false` if none. |
| `$x["single_instance"]`            | True if only allow one installation of this site module, not more.                                                        | `false` if none. |

## 📄 Documentation 

If you are a developer you can find examples of modules in the _developers folder at the suitefish-cms github repository if you want to create an own module! For more information about the Suitefish CMS: https://github.com/bugfishtm/suitefish-cms. 

🐟 Bugfish