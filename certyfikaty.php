<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File:      certyfikaty.php
* @Package:   wDesign
* @Action:    Modern Theme for the GetSimple 3.x
*
*****************************************************/
?>
      <div class="widget">
        <div style="padding-top: 10px;">
          <h4>Certyfikaty <span class="head-line"></span></h4>
            <div class="certyfikaty-carousel custom-carousel touch-carousel" data-appeared-items="3">
<?php
$dane = get_dane('certyfikaty.xml');
foreach ($dane as $i => $img) {
  echo '<div class="cert-item item">';
  echo '<a href="'.$img['img'].'"><img class="img-responsive img-cert" src="'.$img['img'].'" alt="'.$img['title'].'" /></a>';
  echo '</div>';
}
?>
          </div>
        </div>
      </div><!-- end/widget -->