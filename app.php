<?php

	// Version
	define('VERSION', '2.10.3');

	// debugging
	define('DEBUG', true);

	if(DEBUG){
		error_reporting(E_ALL);
		ini_set('display_errors', '1');
	}
	
	// allowed filetypes (NOTE: gif, png, jpg, and svg are enabled by default)
	define('ALLOWED_FILETYPES', 'ico, css, js, pdf, doc, docx, zip');
	
	// advanced configurations
	define('IMAGE_AUTO_RESIZE', true);
	define('IMAGE_MAX_WIDTH', 1024);
	define('IMAGE_MAX_HEIGHT', 768);
	
	// thumb width and height
	define('THUMB_MAX_WIDTH', 200);
	define('THUMB_MAX_HEIGHT', 200);
	
	// advanced SMTP settings (see https://github.com/Synchro/PHPMailer)
	define('IS_SMTP', false);
	define('SMTP_HOST', 'smtp.mailserver.com');
	define('SMTP_AUTH', true);
	define('SMTP_USERNAME', '');
	define('SMTP_PASSWORD', '');
	define('SMTP_SECURE', 'tls');
	
	// set default as UTC
	date_default_timezone_set('UTC');
	
    // include optional local setup
    if(file_exists(__DIR__.'/setup.local.php')){
    	include 'setup.local.php';
    }
    else{
    	include 'setup.php';
    }
    
	// font library
	define('FONT', 'https://fonts.googleapis.com/css?family=Roboto:400,700|Roboto+Condensed:400,700|Inconsolata');
	
	// bootsrap css libraries
	define('BOOTSTRAP_CSS', '//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css');
	define('BOOTSTRAP_AMELIA_CSS', '//netdna.bootstrapcdn.com/bootswatch/3.1.1/amelia/bootstrap.min.css');
	define('BOOTSTRAP_CERULEAN_CSS', '//netdna.bootstrapcdn.com/bootswatch/3.1.1/cerulean/bootstrap.min.css');
	define('BOOTSTRAP_COSMO_CSS', '//netdna.bootstrapcdn.com/bootswatch/3.1.1/cosmo/bootstrap.min.css');
	define('BOOTSTRAP_CYBORG_CSS', '//netdna.bootstrapcdn.com/bootswatch/3.1.1/cyborg/bootstrap.min.css');
	define('BOOTSTRAP_FLATLY_CSS', '//netdna.bootstrapcdn.com/bootswatch/3.1.1/flatly/bootstrap.min.css');
	define('BOOTSTRAP_JOURNAL_CSS', '//netdna.bootstrapcdn.com/bootswatch/3.1.1/journal/bootstrap.min.css');
	define('BOOTSTRAP_LUMEN_CSS', '//netdna.bootstrapcdn.com/bootswatch/3.1.1/lumen/bootstrap.min.css');
	define('BOOTSTRAP_READABLE_CSS', '//netdna.bootstrapcdn.com/bootswatch/3.1.1/readable/bootstrap.min.css');
	define('BOOTSTRAP_SIMPLEX_CSS', '//netdna.bootstrapcdn.com/bootswatch/3.1.1/simplex/bootstrap.min.css');
	define('BOOTSTRAP_SLATE_CSS', '//netdna.bootstrapcdn.com/bootswatch/3.1.1/slate/bootstrap.min.css');
	define('BOOTSTRAP_SPACELAB_CSS', '//netdna.bootstrapcdn.com/bootswatch/3.1.1/spacelab/bootstrap.min.css');
	define('BOOTSTRAP_SUPERHERO_CSS', '//netdna.bootstrapcdn.com/bootswatch/3.1.1/superhero/bootstrap.min.css');
	define('BOOTSTRAP_UNITED_CSS', '//netdna.bootstrapcdn.com/bootswatch/3.1.1/united/bootstrap.min.css');
	define('BOOTSTRAP_YETI_CSS', '//netdna.bootstrapcdn.com/bootswatch/3.1.1/yeti/bootstrap.min.css');
	define('BOOTSTRAP_DARKLY_CSS', '//netdna.bootstrapcdn.com/bootswatch/3.1.1/darkly/bootstrap.min.css');
	
	// fancybox
	define('FANCYBOX_CSS', '//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.css');
	
	// js libraries
	define('BOOTSTRAP_JS', '//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js');
	define('FONTAWESOME_CSS', '//netdna.bootstrapcdn.com/font-awesome/4.0.2/css/font-awesome.css');
	define('JQUERY_JS', '//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js');
	define('JQUERYUI_JS', '//code.jquery.com/ui/1.10.3/jquery-ui.js');
	define('JQUERYUI_CSS', '//code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css');
	define('KNOCKOUT_JS', '//ajax.aspnetcdn.com/ajax/knockout/knockout-2.2.1.js');
	define('MOMENT_JS', '//cdnjs.cloudflare.com/ajax/libs/moment.js/2.5.1/moment-with-langs.min.js');
    define('TIMEZONEDETECT_JS', '//cdnjs.cloudflare.com/ajax/libs/jstimezonedetect/1.0.4/jstz.min.js');
	define('STRIPE_JS', 'https://js.stripe.com/v2/');
	define('MODERNIZR_JS', '//cdnjs.cloudflare.com/ajax/libs/modernizr/2.7.1/modernizr.min.js');
	define('FANCYBOX_JS', '//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.js');
    
    // include data-access objects
	require_once 'dao/DB.php';
	require_once 'dao/User.php';
	require_once 'dao/Site.php';
	require_once 'dao/PageType.php';
	require_once 'dao/MenuType.php';
	require_once 'dao/Page.php';
	require_once 'dao/MenuItem.php';
	require_once 'dao/Category.php';
	require_once 'dao/SearchIndex.php';
	require_once 'dao/Transaction.php';
	
	// include external libs
    require_once 'libs/phpmailer/PHPMailerAutoload.php';
    require_once 'libs/stripe-1.13.3/lib/Stripe.php';
	require_once 'libs/simple_html_dom.php';
	require_once "libs/lessc.inc.php";
	require_once 'libs/PasswordHash.php';
	require_once 'libs/class-php-ico.php';
	
	// include libs
	require_once 'libs/Utilities.php';
	require_once 'libs/Validator.php';
	require_once 'libs/Image.php';
	require_once 'libs/AuthUser.php';
	require_once 'libs/Publish.php';
	
?>
