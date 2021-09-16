<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File:      slider.php
* @Package:   wDesign
* @Action:    Modern Theme for the GetSimple 3.x
*
*****************************************************/
?>

  <div id="main-slide" class="carousel slide d-none d-md-block" data-bs-ride="carousel">
    <ol class="carousel-indicators">
      <li data-bs-target="#main-slide" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slajd 1"></li>
      <li data-bs-target="#main-slide" data-bs-slide-to="1" aria-label="Slajd 2"></li>
      <li data-bs-target="#main-slide" data-bs-slide-to="2" aria-label="Slajd 3"></li>
    </ol>

    <div class="carousel-inner">

<?php
$dane = get_dane('slajder.xml');
foreach ($dane as $i => $img) {
  echo '<div class="carousel-item';
  if ($i==0) echo ' active';
  echo '"><img class="img-carousel" src="'.$img['img'].'" alt="'.$img['title'].'">';
  echo '<div class="slider-content text-center">';
  echo '<h2 class="animated4"><span><strong class="exo">Collegium Gostomianum</strong></span></h2>';
  echo '<h3 class="animated6" style="color: #fff;">'.$img['title'].'</h3>';
  echo '<p class="animated4"><a href="'.get_site_url(false).$img['link'].'" class="slider btn btn-system btn-large">Zobacz</a></p>';
  echo '</div><!-- /slider-content --></div><!-- /carousel-item -->';
}
?>

    <button class="carousel-control-prev left" data-bs-target="#main-slide" data-bs-slide="prev" aria-label="Poprzedni">
      <span><i class="fa fa-angle-left" aria-hidden="true"></i></span>
    </button>
    <button class="carousel-control-next right" data-bs-target="#main-slide" data-bs-slide="next" aria-label="Następny">
      <span><i class="fa fa-angle-right"></i></span>
    </button>
  </div>
</div>