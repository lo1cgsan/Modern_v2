<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 		functions.php
* @Package:		wDesign
* @Action:		LO1CG theme for the GetSimple 3.0
*
*****************************************************/
function get_aforyzm() {
	$data='data/other/aforyzmy.dat';
	if(!file_exists($data)) echo 'Cogito ergo sum!';
	else {
  		$lines = file($data);
		$line = explode('|',$lines[rand(0, count($lines) - 1)]);
		echo '"'.$line[0].'"&nbsp;&#8211;&nbsp;<i>'.$line[1].'</i>';
	}
}

function show_lastUpdate() {
	//define('LUPDATE_FILE', GSDATAOTHERPATH.'lastupdate.xml');
	if (!file_exists(LUPDATE_FILE)) {
		echo '<p>Brak listy zmian!</p>';
		return;
	}
	$xmldata = getXML(LUPDATE_FILE);
	//$ile = count($xmldata->children());
	//echo 'Wpisów: '.count($xmldata->children());
	echo '<ul>';
	foreach ($xmldata as $page) {
		$tb[]=array((string)$page->lastUpdate,(string)$page->url,(string)$page->title);
	}
	//print_r($tb);echo '<hr />';
	arsort($tb);//posortuj rosnąco
	//print_r($tb);
	foreach ($tb as $l => $t) {
		echo '<li><a href="';
		get_site_url();
		echo '?id='.$t[1].'">'.$t[2].'</a><br />['.$t[0].']</li>';
	}
	echo '</ul>';
}

/* add Google Analitycs*/
function get_GA() {
	if($_SERVER['SERVER_NAME']==='www.lo1.sandomierz.pl' || $_SERVER['SERVER_NAME']==='lo1.sandomierz.pl') {
	?>
<!-- Google Analytics plugin -->
<!-- begin tracking code -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-68972846-1', 'auto');
  ga('send', 'pageview');

</script>
<!-- end Google Analytics tracking code -->

	<?php
	}
}

$miesiace = array(
	'01' => array('sty', 'styczeń', 'stycznia'),
	'02' => array('lut', 'luty', 'lutego'),
	'03' => array('mar', 'marzec', 'marca'),
	'04' => array('kwi', 'kwiecień', 'kwietnia'),
	'05' => array('maj', 'maj', 'maja'),
	'06' => array('cze', 'czerwiec', 'czerwca'),
	'07' => array('lip', 'lipiec', 'lipca'),
	'08' => array('sie', 'sierpień', 'sierpnia'),
	'09' => array('wrz', 'wrzesień', 'września'),
	'10' => array('paź', 'październik', 'paźdiernika'),
	'11' => array('lis', 'listopad', 'listopada'),
	'12' => array('gru', 'grudzień', 'grudnia')
);

$kategorie = array(
  'szkola' => array('Szkoła', 'fa-building'),
  'uczniowie' => array('Uczniowie', 'fa-graduation-cap'),
  'nauczyciele' => array('Nauczyciele', 'fa-building'),
  'ekologia' => array('Ekologia', 'fa-tree'),
  'sport' => array('Sport', 'fa-futbol-o'),
  'kultura' => array('Kultura', 'fa-institution'),
  'nauka' => array('Nauka', 'fa-book'),
  'historia' => array('Historia', 'fa-history'),
  'pomagamy' => array('Pomagamy', 'fa-heart'),
  'sukces' => array('Sukcesy', 'fa-trophy'),
  'informatyka' => array('Informatyka', 'fa-laptop'),
  'informacja' => array('Informacja', 'fa-info')
);

function getMenu($slug) {
	$menu = return_i18n_menu_data($slug, $minlevel=0, $maxlevel=0, $show=I18N_SHOW_NORMAL);
	$menu_str='';
	foreach($menu as $strona) {
		if ($strona['url'] == 'index') $strona['url'] = get_site_url(false);
	  $menu_str .= '<li class="nav-link '.$strona['url'].'"><a href="'.$strona['url'].'" title="'.$strona['title'].'"';
	  if ($strona['current'] || $strona['currentpath']) $menu_str .= ' class="active"';
	  $menu_str .= '>'.$strona['menu'].'</a></li>
	  ';
	}
	return $menu_str;
}

function getSubmenu2($minlevel=2, $maxlevel=2) {
	$submenu = return_i18n_menu_data(return_page_slug(), $minlevel, $maxlevel, $show=I18N_SHOW_PAGES);
	$menu_str='<div class="btn-group flex-wrap" role="group" aria-label="Absolwenci alfabetycznie i rocznikami">';
	if (!empty($submenu)) {
		foreach($submenu as $strona) {
			$menu_str .= '<a class="btn-system btn-medium border-btn" href="'.$strona['url'].'" title="'.$strona['title'].'">'.$strona['menu'].'</a>
			';
		}
	}
	$menu_str .= '</div>';
	return $menu_str;
}

// Funkcja zwraca pełną ścieżkę do obrazka
// $imgpath musi zawierać nazwę podkatalogu w uploads i nazwę obrazka
function get_img_path($imgpath, $echo = true) {
	$path = '';
	if (file_exists(GSDATAUPLOADPATH.'/'.$imgpath))
		$path = get_site_url(false).'data/uploads/'.$imgpath;
	if ($echo) echo $path;
	else return $path;
}

function get_dane($xmlname) {
	$plik = GSDATAPATH.I18N_GALLERY_DIR.$xmlname;
	if (file_exists($plik)) {
		$data = getXML($plik);
		$dane = array();
		foreach ($data as $key => $value) {
			if ($key != 'item' && $key != 'items') ;
			else {
				$imgname = (string) $value->filename;
				$dane2=array(
					'img'=>get_img_path((string) $imgname, false),
					'link'=>(string) $value->tags,
					'title'=> htmlspecialchars((string) $value->title),
					'opis'=> htmlspecialchars((string) $value->description)
				);
				$dane[] = $dane2;
			}
		}
		return $dane;
	}
}

?>
