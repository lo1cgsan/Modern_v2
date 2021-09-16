<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File:      template.php
* @Package:   wDesign
* @Action:    Modern Theme v2 for the GetSimple 3.x
*
*****************************************************/
?><?php include("header.php"); ?>

<?php include("menu.php"); ?>

<main role="main">
<?php include("banner.php"); ?>

<?php include("top-xs-sm.php"); ?>

<div id="content">
  <div class="container ">
    <div class="row">
    <div class="col-md-9 tresc">

<?php
  get_page_content();

/*
nazwa pliku strony musi być w formacie typu: uczniowie-201718
*/
$rokszk = substr(get_page_slug(FALSE), -6);
$dir = GSDATAUPLOADPATH.$rokszk.'/klasy';

function csv2html($nr, $plik){
	global $dir, $rokszk;
    $row = 0;
    if (($handle = fopen($plik, "r")) !== FALSE) {
        if ($nr % 2 == 0)
            echo '
<div class="row">
';
        echo '
    <div class="col-sm-6">';
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            //$num = count($data);
            //echo $num;
            if ($row == 0){
				$path = pathinfo($plik);
				$klasa = $path['filename'];
                //$klasa = substr($plik, -6, 2);
                $rocznik = substr($rokszk, 0, 4)."/".substr($rokszk, 4);
                $zdjecie = $klasa.'_'.$rokszk.'.jpg';
                if (!file_exists($dir.'/'.$zdjecie))
                    $zdjecie = 'klasa.jpg';
                echo '
                <p id="k'.$klasa.'">
					<a href="http://lo1.sandomierz.pl/data/uploads/'.$rokszk.'/klasy/'.$zdjecie.'">
					<img alt="Klasa '.$klasa.' – fotografia '.$rocznik.'" src="http://lo1.sandomierz.pl/data/uploads/'.$rokszk.'/klasy/'.$zdjecie.'" class="img-thumbnail pull-right" style="width: 160px;" /></a>
                            <strong>Klasa '.$klasa.'<br />Wych. '.$data[0]." ".$data[1].'</strong>
                      </p><ol>';
            }else
                echo '<li>'.$data[0]." ".$data[1].'</li>';
            $row++;
        }
        echo '</ol>
        </div>';

        if ($nr % 2 == 1)
        echo '
</div>
';

        fclose($handle);
    }
}

//$pliki = array_slice(scandir($dir), 2);
$pliki = glob($dir.'/*.csv');
//ob_start();
foreach ($pliki as $nr => $plik) {
    csv2html($nr, $plik);
}
//$html = ob_get_contents();
//file_put_contents('uczniowie.html', $html);

?>

    </div><!-- /tresc -->
    <!-- start/sidebar -->
    <div class="col-md-3 sidebar right-sidebar">

<?php include("searchform.php"); ?>

<?php include("kategorie.php"); ?>

<?php include("popularne.php") ?>

    </div><!-- end/sidebar -->

  </div><!-- end/row -->
</div><!-- end/container -->
</div><!-- end/content -->
</main>

<?php include("footer.php"); ?>

</body>
</html>
