<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File:      header.php
* @Package:   wDesign
* @Action:    Modern Theme v2 for the GetSimple 3.x
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
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- opis i autor -->
  <meta name="description" content="Strona domowa I LO Collegium Gostomianum w Sandomierzu.">
  <meta name="Keywords" content="Collegium Gostomianum, Liceum Ogólnokształcące, Sandomierz, lo1, 1lo, Patkowski" />

  <meta name="Robots" content="all" />

  <!-- CSS: Bootstrap, Font Awesome, OWL Carousel, Animate  -->
  <link rel="stylesheet" href="<?php get_theme_url(); ?>/assets/css/bootstrap.min.css" type="text/css" media="screen">
  <link rel="stylesheet" href="<?php get_theme_url(); ?>/assets/font-awesome/css/font-awesome.min.css" type="text/css" media="screen">
  <link rel="stylesheet" type="text/css" href="<?php get_theme_url(); ?>/assets/css/owl.carousel.min.css" media="screen">
  <link rel="stylesheet" type="text/css" href="<?php get_theme_url(); ?>/assets/css/owl.theme.default.min.css" media="screen">
  <link rel="stylesheet" type="text/css" href="<?php get_theme_url(); ?>/assets/css/animate.css" media="screen">

  <!-- CSS: podstawowe, responsywność, temat czerwony  -->
  <link rel="stylesheet" type="text/css" href="<?php get_theme_url(); ?>/css/style.css" media="screen">
  <link rel="stylesheet" type="text/css" href="<?php get_theme_url(); ?>/css/responsive.css" media="screen">
  <link rel="stylesheet" type="text/css" href="<?php get_theme_url(); ?>/css/red.css" media="screen" />

  <link rel="icon" type="image/png" href="<?php get_theme_url(); ?>/images/favicon.png">
  <script type="text/javascript" src="<?php get_theme_url(); ?>/assets/js/jquery-3.7.1.min.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php get_theme_url(); ?>/assets/css/cookieconsent.min.css" />
  <script src="<?php get_theme_url(); ?>/assets/js/cookieconsent.min.js"></script>
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
      "href": "https://wszystkoociasteczkach.pl"
    }
  })});
  </script>

  <!--[if IE 8]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
  <!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

  <?php get_header(); ?>
  <?php //get_GA(); ?>
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
    Zainstaluj IE w wersji 8 lub wyższej, albo wypróbuj lepsze programy:
    <a rel="nofollow" href="https://www.mozilla.org/pl/">Mozilla Firefox</a>,
    <a rel="nofollow" href="https://brave.com/pl/">Brave Browser</a>.
    </p>
  </div>
<![endif]-->
