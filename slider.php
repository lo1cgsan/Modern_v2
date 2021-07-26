<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File:      slider.php
* @Package:   wDesign
* @Action:    Modern Theme for the GetSimple 3.x
*
*****************************************************/
?>

  <div id="main-slide" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#main-slide" data-slide-to="0" class="active"></li>
      <li data-target="#main-slide" data-slide-to="1"></li>
      <li data-target="#main-slide" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner">

<?php
$dane = get_dane('slajder.xml');
foreach ($dane as $i => $img) {
  echo '<div class="carousel-item item';
  if ($i==0) echo ' active';
  echo '"><img class="img-responsive img-carousel" src="'.$img['img'].'" alt="'.$img['title'].'">';
  echo '<div class="slider-content text-center">';
  echo '<h2 class="animated4"><span><strong class="exo">Collegium Gostomianum</strong></span></h2>';
  echo '<h3 class="animated6" style="color: #fff;">'.$img['title'].'</h3>';
  echo '<p class="animated4"><a href="'.get_site_url(false).$img['link'].'" class="slider btn btn-system btn-large">Zobacz</a></p>';
  echo '</div><!-- /slider-content --></div><!-- /item -->';
}
?>

    <a class="left carousel-control" href="#main-slide" data-slide="prev">
      <span><i class="fa fa-angle-left"></i></span>
    </a>
    <a class="right carousel-control" href="#main-slide" data-slide="next">
      <span><i class="fa fa-angle-right"></i></span>
    </a>
  </div>
</div>