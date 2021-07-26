<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File:      top-xs-sm.php
* @Package:   wDesign
* @Action:    Modern Theme for the GetSimple 3.x
*
*****************************************************/
?><div class="container visible-sm visible-xs top-xs">
  <div class="row">
    <div class="col-sm-4 visible-sm">
      <p>&nbsp;</p>
    </div>
  	<div class="col-xs-6 col-sm-4">
			<div class="btn-group pull-right" role="group">
	    	<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Kategorie<i class="fa fa-angle-down"></i></button>
	    	<ul class="dropdown-menu">
<?php
foreach ($kategorie as $kat => $dane) {
  echo '<li><a href="'.get_site_url(false).'?addTags='.$kat.'">'.$dane[0].' <i class="fa fa-angle-right"></i></a></li>';
}
?>
	      </ul>
	    </div>
  	</div>
    <div class="col-xs-6 col-sm-4 widget-search">
        <form class="search" method="get" action="<?php get_site_url(); ?>szukaj">
          <input class="search-words" name="words" type="search" placeholder="Czego szukasz..." />
          <button class="search-btn" name="search" type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>
  </div>

  <div class="row visible-xs visible-sm">
    <div class="col-xs-12">
      <div class="top-linki text-center">
		<a class="btn-system btn-mini" href="http://lo1.sandomierz.pl/planlekcji">Plan lekcji</a>
        <a class="btn-system btn-mini" href="http://lo1.sandomierz.pl/e-dziennik">E-dziennik</a>
		<a class="btn-system btn-mini" href="http://lo1.sandomierz.pl/cgarch">Archiwum</a>
      </div>
    </div>
  </div>

  </div>
</div>
