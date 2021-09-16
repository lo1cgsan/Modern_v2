<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File:      certyfikaty.php
* @Package:   wDesign
* @Action:    Modern Theme for the GetSimple 3.x
*
*****************************************************/
?>
        <div class="certyfikaty-carousel owl-carousel owl-theme">
<?php
$dane = get_dane('certyfikaty.xml');
foreach ($dane as $i => $img) {
  $imgname = pathinfo($img['img'], PATHINFO_FILENAME);
  if (file_exists(GSDATAUPLOADPATH.'dyplomy/'.$imgname.'.jpg'))
    $imgbig = $imgname.'.jpg';
  else
    $imgbig = $imgname.'.png';
  $imgpath = get_site_url(false).'data/uploads/dyplomy/'.$imgbig;
  echo '<div class="cert-item">';
  echo '<a href="'.$imgpath.'"><img src="'.$img['img'].'" alt="'.$img['title'].'" /></a>';
  echo '</div>';
}
?>
        </div> <!-- end of certyfikaty -->
