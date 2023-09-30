<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File:      poularne.php
* @Package:   wDesign
* @Action:    Modern Theme for the GetSimple 3.x
*
*****************************************************/
// $lo1_path = get_site_url($echo=false);
$lo1_path = "http://lo1.sandomierz.pl";
$popularne = array(
  array("Plan lekcji", "$lo1_path/plany/ostatni/index.html", "agenda-1.png"),
  array("E-dziennik", "$lo1_path/e-dziennik", "technology.png"),
  array("Google Workspace", "$lo1_path/gsuite", "google.png"),
  array("Archiwum", "$lo1_path/cgarch", "monuments.png")
);
?>    <div class="widget widget-popular-posts d-none d-md-block">
        <h4>Na skróty<span class="head-line"></span></h4>
        <ul>
<?php
  foreach ($popularne as $wpis) {
    $ikona = '<a href="'.$wpis[1].'"><img src="'.get_theme_url(false).'/icons/'.$wpis[2].'" alt="" /></a>';
    $link = '<a href="'.$wpis[1].'">'.$wpis[0].'</a>';
?>
          <li>
            <div class="widget-thumb">
<?php echo $ikona; ?>
            </div>
            <div class="widget-content">
              <h5>
<?php echo $link; ?>
              </h5>
              </div>
            <div class="clearfix"></div>
          </li>
<?php
  }
?>
        </ul>
      </div>
