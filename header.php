<?php 
	if(!defined('PLX_ROOT')) exit;
	
/**
 * Fonction permettant d'encadrer la première image d'un paragraphe par un bloc div afin de la mettre en avant et d'appliquer des règles
 * css particulières (un float par exemple)
 * @param $content string le contenu du paragraphe
 *
 * @author Cyril MAGUIRE
 */
function vignettage($content) {
    $plxMotor = plxMotor::getInstance();
    switch ($plxMotor->mode) {
        case 'home':
        case 'tags':
        case 'categorie':
        	$count = 0;
            $return = preg_replace('!<p>(<img(.*)?src="(.*)\.(jpg|jpeg|png|gif)" alt="(.*(?:^data-spxtynimce="true")?)" (width="([0-9]*)" height="([0-9]*)")?(.*)?\/>)!i', '<div class="vignette"><img src="$3.$4" alt="" /></div><div class="wrap-art"><p>', $content,-1,$count);
            if ($count>0) {
            	$return = str_replace('</article>', '</div><!--Fin wrap-art --></article>',$return);
            }
            break;
        case 'article':
        case 'preview':
        	$count = 0;
            $return = preg_replace('!<p>(<img(.*)?(src="(.*)\.(jpg|jpeg|png|gif)" alt="(.*)") (width="([0-9]*)" height="([0-9]*)")?(.*)?\/>)!i', '<div class="vignette"><img $3 /></div><div class="wrap-art"><p>', $content,-1,$count);
            if ($count>0) {
            	$return = str_replace('</article>', '</div><!--Fin wrap-art --></article>',$return);
            }
            break;
        
        default:
            # code...
            break;
    }
    if (isset($return)) {
    	return $return;
    } else {
    	return $content;
    }
    
}


function coupe_chaine($chapo, $content, $max) { 
	if ($chapo != null) {
		$chaine_entrer = $chapo;
	} else {
		$chaine_entrer = $content;
	}

	$chaine = filter_var($chaine_entrer, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
	if(strlen($chaine) >= $max) {
		$chaine = substr($chaine, 0, $max); 
		$espace = strrpos($chaine, " "); 
		$chaine = substr($chaine, 0, $espace)."...";
	} 
	return $chaine; 
}

function meta_name() {
	global $plxShow;

	switch($plxShow->mode()) {
		case 'home': 
			$var_return = $plxShow->subTitle();
		break;
		case 'article':
			$chapo = strip_tags($plxShow->plxMotor->plxRecord_arts->f('chapo'));
			$var_return = coupe_chaine($chapo,$plxShow->subTitle(), 100);
		break;
		case 'static': 
			$var_return = $plxShow->subTitle();
		break;
        	case 'categorie': 
			$var_return = $plxShow->subTitle();
		break;
        	default: 
			$var_return = $plxShow->subTitle();
		break;
	}
	return $var_return;
}

?>
      
<!DOCTYPE html>

<!--[if IE 7 ]><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php $plxShow->defaultLang() ?>" lang="<?php $plxShow->defaultLang() ?>" class="ie ie7"> <![endif]-->
<!--[if IE 8 ]><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php $plxShow->defaultLang() ?>" lang="<?php $plxShow->defaultLang() ?>" class="ie ie8"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php $plxShow->defaultLang() ?>" lang="<?php $plxShow->defaultLang() ?>" class="ie ie9"> <!--<![endif]-->

<html  lang="<?php $plxShow->defaultLang() ?>"> 

<head>

    <meta content="text/html; charset=utf-8" http-equiv="content-type"/>
   <!--  <meta name="description" content="<?php echo meta_name();?>"/>  -->
          <?php $plxShow->meta('description') ?>
	<?php $plxShow->meta('keywords') ?>
	<?php $plxShow->meta('author') ?>

    <!-- Mobile Specific Metas
    +++++++++++++++++++++++++++ -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--[if IE ]><meta http-equiv="X-UA-Compatible" content="IE=Edge"><![endif]-->
    <link rel="shortcut icon" href="<?php $plxShow->template(); ?>/img/favicon.ico">

    <link rel="apple-touch-icon" href="<?php $plxShow->template(); ?>/img/apple_icons_57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php $plxShow->template(); ?>/img/apple_icons_72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php $plxShow->template(); ?>/img/apple_icons_114x114.png">

    <title><?php $plxShow->pageTitle(); ?></title>

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800,400italic,600italic,700italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="<?php $plxShow->template(); ?>/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php $plxShow->template(); ?>/css/bootstrap-responsive.css">    
    <link rel="stylesheet" type="text/css" href="<?php $plxShow->template(); ?>/css/plugins.css">
    <link rel="stylesheet" type="text/css" href="<?php $plxShow->template(); ?>/css/theme.css">
    <link rel="stylesheet" type="text/css" href="<?php $plxShow->template(); ?>/css/responsive.css">
    <link rel="stylesheet" type="text/css" href="<?php $plxShow->template(); ?>/css/theme_settings.css">
    <link rel="stylesheet" type="text/css" href="<?php $plxShow->template(); ?>/css/rs-settings.css">
    <link rel="stylesheet" type="text/css" href="<?php $plxShow->template(); ?>/css/color_theme.css" id="theme_color">
    <?php $plxShow->templateCss() ?>
    
    <!--[if IE 8 ]><script>
        var e = ("article,aside,figcaption,figure,footer,header,hgroup,nav,section,time").split(',');
        for (var i = 0; i < e.length; i++) {
            document.createElement(e[i]);
        }		
    </script><![endif]-->
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	
	<link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('ARTICLES_RSS_FEEDS') ?>" href="<?php $plxShow->urlRewrite('feed.php?rss') ?>" />
	<link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('COMMENTS_RSS_FEEDS') ?>" href="<?php $plxShow->urlRewrite('feed.php?rss/commentaires') ?>" />
	


</head>

<body role="document" id="top" class="static<?php echo $plxShow->staticId(); ?> cat<?php echo $plxShow->catId(); ?>">
<header>
    	<div class="top_line">
        	<div class="container">
                <div class="call_us"><span class="ico">p</span>Contacter nous:&nbsp; secretaire@jceneuillylevallois.org</div>
                <div class="socials">
                    <ul class="socials_list">
                        <li><a href="https://www.facebook.com/page.neuillylevallois" class="ico_social-facebook"></a></li>
                        <li><a href="https://twitter.com/JCEHautsdeSeine" class="ico_social-twitter"></a></li>
                        <!-- .top_line 
                        <li><a href="#" class="ico_social-youtube"></a></li>
                        <li><a href="#" class="ico_social-gplus"></a></li>
                        <li><a href="#" class="ico_social-dribbble"></a></li>
                        <li><a href="#" class="ico_social-delicious"></a></li>
                        <li><a href="#" class="ico_social-tumblr"></a></li>
                         -->
                    </ul>
                </div>
                <div class="clear"></div>
            </div>
        </div><!-- .top_line -->
        <div class="header_wrapper container">
        	<a href="<?php $plxShow->racine(); ?>" class="logo"><img src="<?php $plxShow->template(); ?>/img/logo.png" alt="JCI <?php $plxShow->mainTitle(''); ?>"  width="115" height="30" class="logo_def"><img src="<?php $plxShow->template(); ?>/img/retina/logo.png" alt="JCI <?php $plxShow->mainTitle(''); ?>" width="115" height="30" class="logo_retina"></a>
            <!-- <h2><?php $plxShow->mainTitle('link'); ?></h2>
			<h3><?php $plxShow->subTitle(); ?></h3> -->
			<nav>
                <ul class="menu">
					<?php $plxShow->catList($plxShow->getLang('HOME'),'<li id="#cat_id" class="#cat_status"><a href="#cat_url" title="#cat_name">#cat_name</a></li>'); ?>
					<?php $plxShow->staticList('','<li id="#static_id"><a href="#static_url" class="#static_status" title="#static_name">#static_name</a></li>'); ?>
                </ul><!-- .menu -->
                <div class="clear"></div>
            </nav>        
        </div>


    </header>