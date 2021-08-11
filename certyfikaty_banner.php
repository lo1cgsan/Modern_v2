<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File:      certyfikaty.php
* @Package:   wDesign
* @Action:    Modern Theme for the GetSimple 3.x
*
*****************************************************/
?>
      <div class="widget banner">
          <div class="certyfikaty-carousel owl-carousel owl-theme">
<?php
$dane = get_dane('certyfikaty.xml');
foreach ($dane as $i => $img) {
  echo '<div class="item">';
  echo '<a href="'.$img['img'].'"><img class="img-responsive img-cert-banner" src="'.$img['img'].'" alt="'.$img['title'].'" /></a>';
  echo '</div>';
}
?>
        </div>
      </div><!-- end/widget -->
