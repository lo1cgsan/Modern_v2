<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File:      searchform.php
* @Package:   wDesign
* @Action:    Modern Theme for the GetSimple 3.x
*
*****************************************************/
?>
      <div class="widget widget-search">
        <form class="search" method="get" action="<?php get_site_url(); ?>szukaj">
          <input class="search-words" name="words" type="search" placeholder="Czego szukasz..." />
          <button class="search-btn" name="search" type="submit" aria-label="Wyszukaj"><i class="fa fa-search" aria-hidden="true"></i></button>
        </form>
      </div>