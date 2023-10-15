<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File:      kategorie.php
* @Package:   wDesign
* @Action:    Modern Theme for the GetSimple 3.x
*
*****************************************************/
?>
    <div class="widget kategorie">
		<div class="dropdown" role="group">
    	<button id="rozwijalny" type="button" class="btn btn-default dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Kategorie</button>
    	<div class="dropdown-menu" aria-labelledby="rozwijalny">
<?php
foreach ($kategorie as $kat => $dane) {
  echo '<a class="dropdown-item" href="'.get_site_url(false).return_page_slug().'?addTags='.$kat.'">'.$dane[0].' <i class="fa fa-angle-right"></i></a>';
}
?>
    	</div><!-- end/dropdown-menu -->
    </div><!-- end/dropdown -->
   </div><!-- end/widget -->