<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File:      top-xs-sm.php
* @Package:   wDesign
* @Action:    Modern Theme for the GetSimple 3.x
*
*****************************************************/
?><div class="container d-md-none top-xs">
  <div class="row">
  	<div class="col-6">
      <?php
        if (str_contains(get_site_url(false), 'cgarch/')) {
          if (str_contains(return_page_slug(),'news'))
            include('kategorie_arch.php');
        } else {
          include("kategorie.php");
        }
      ?>
  	</div>
    <div class="col-6">
      <?php include("searchform.php"); ?>
    </div>
  </div>

  <div class="row d-md-none">
    <div class="col-xs-12">
      <div class="text-center mt-3">
<?php
  $dane = get_dane('top-xs-sm.xml');
  if (!empty($dane)) {
    foreach ($dane as $i) {
      echo('<a class="btn-system btn-mini" href="'.get_site_url(false).$i['link'].'">'.$i['title'].'</a>');
    }
  }
?>
      </div>
    </div>
  </div>

  </div>
</div>
