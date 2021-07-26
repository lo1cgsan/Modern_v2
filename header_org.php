<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File:      header.php
* @Package:   wDesign
* @Action:    Modern Theme for the GetSimple 3.x
*
*****************************************************/
?><!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="pl"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="pl" class="no-js"> <![endif]-->
<html lang="pl">

<head>

  <!-- tytuł -->
  <title><?php get_page_clean_title(); ?> &lt; <?php get_site_name(); ?></title>

  <!-- charset -->
  <meta charset="utf-8">

  <!-- skalowanie -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- opis i autor -->
  <meta name="description" content="Strona domowa I LO Collegium Gostomianum w Sandomierzu.">
  <meta name="Keywords" content="Collegium Gostomianum, Liceum Ogólnokształcące, Sandomierz, lo1, 1lo, Patkowski" />

  <meta name="Robots" content="all" />

  <!-- Bootstrap CSS  -->
  <link rel="stylesheet" href="<?php get_theme_url(); ?>/asset/css/bootstrap.min.css" type="text/css" media="screen">
  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="<?php get_theme_url(); ?>/css/font-awesome.min.css" type="text/css" media="screen">
  <!-- stick navbar -->
  <link rel="stylesheet" type="text/css" href="<?php get_theme_url(); ?>/css/slicknav.css" media="screen">
  <!-- styl strony bez kolorów  -->
  <link rel="stylesheet" type="text/css" href="<?php get_theme_url(); ?>/css/style.css" media="screen">
  <!-- responsywnosc  -->
  <link rel="stylesheet" type="text/css" href="<?php get_theme_url(); ?>/css/responsive.css" media="screen">
  <!--animacje/transitions  -->
  <link rel="stylesheet" type="text/css" href="<?php get_theme_url(); ?>/css/animate.css" media="screen">
  <link rel="stylesheet" type="text/css" href="<?php get_theme_url(); ?>/css/red.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="<?php get_theme_url(); ?>/css/lo1cg.css" media="screen" />

  <!-- potrzebne & funkcjonalność na starszych wersjach  -->
  <script type="text/javascript" src="<?php get_theme_url(); ?>/js/jquery-3.2.1.slim.min.js"></script>
  <!-- <script type="text/javascript" src="<?php get_theme_url(); ?>/js/jquery.migrate.js"></script> -->
  <!-- <script type="text/javascript" src="<?php get_theme_url(); ?>/js/modernizrr.js"></script> -->
  <script type="text/javascript" src="<?php get_theme_url(); ?>/asset/js/bootstrap.min.js"></script>
  <!-- slider & scrolling -->
  <!-- <script type="text/javascript" src="<?php get_theme_url(); ?>/js/owl.carousel.min.js"></script> -->
  <script type="text/javascript" src="<?php get_theme_url(); ?>/js/jquery.nicescroll.min.js"></script>
  <!-- <script type="text/javascript" src="<?php get_theme_url(); ?>/js/jquery.slicknav.js"></script> -->

  <link rel="icon" type="image/png" href="<?php get_theme_url(); ?>/images/favicon.png">
<!--
  <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
  <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
  <script>
  window.addEventListener("load", function(){
  window.cookieconsent.initialise({
    "palette": {
      "popup": {
        "background": "#aa0000",
        "text": "#ffdddd"
      },
      "button": {
        "background": "#ff0000"
      }
    },
    "content": {
      "message": "Używamy plików cookie (ciasteczek), aby strony działały lepiej. Nie zbieramy żadnych danych pozwalających identyfikować użytkownika.",
      "dismiss": "Rozumiem",
      "link": "Więcej informacji »»»",
      "href": "http://wszystkoociasteczkach.pl"
    }
  })});
  </script>
 -->
  <!--[if IE 8]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
  <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

  <?php get_header(); ?>
  <?php get_GA(); ?>
</head>

<body id="<?php get_page_slug(); ?>">
    <noscript>
        Do pełnej funkcjonalności strony potrzebujesz włączonej obsługi skryptów.
        Tu znajdziesz <a href="https://www.enable-javascript.com/pl/" target="_blank">
        instrukcje, które pozwolą Ci włączyć skrypty w Twojej przeglądarce</a>.
    </noscript>
<!--[if lte IE 8]>
  <div>
    <p>Używasz przeglądarki Internet Explorer 6 lub 7, które ze względu na podatność na ataki złośliwego oprogramowania zostały wycofane.<br />
    Zainstaluj IE w wersji 8 lub wyższej <a rel="nofollow" href="http://windows.microsoft.com/ie9">9</a>, albo wypróbuj lepsze programy:
    <a rel="nofollow" href="http://www.firefox.pl/">Mozilla Firefox</a>,
    <a rel="nofollow" href="http://www.google.com/chrome/">Google Chrome</a>.
    </p>
  </div>
<![endif]-->
