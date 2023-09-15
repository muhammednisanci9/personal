<?php header('Content-type: Application/xml; charset="utf8"', true); ?>

<?php  
    $site = $_SERVER['HTTP_HOST'];
    $gun = date("Y-m-d");
    $tarih = $gun;

?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"> 
  <url>
    <loc>http://muhammednisanci.com/index</loc>
    <lastmod><?php echo $tarih ?></lastmod>
  </url>
  <url>
    <loc>http://muhammednisanci.com/projeler</loc>
    <lastmod><?php echo $tarih ?></lastmod>
  </url>

  <?php  
    include 'admin/adming/islem.php';

      function seo($link){
      $link = trim($link);
      $karakterDegis = array("ı","İ","ğ","Ğ","ü","Ü","ş","Ş","ö","Ö","ç","Ç");
      $karakterDegisti = array("i","i","g","g","u","u","s","s","o","o","c","c");
      $link = str_replace($karakterDegis, $karakterDegisti, $link);
      $link = mb_strtolower($link, "UTF-8");
      $link = preg_replace("/[^a-z0-9]/", "-", $link);
      $link = preg_replace("/-+/", "-", $link);
      $link = trim($link, "-");
      return $link;
    }


    
  ?>


  <?php 
  	$projesor = $db->prepare("SELECT * FROM proje");
  	$projesor->execute();
  	foreach($projesor as $projecek){
  ?>
  <url>
    <loc>http://muhammednisanci.com/proje-<?=seo($projecek['proje_baslik']."-".$projecek['proje_id']) ?></loc>
    <lastmod><?php echo substr($projecek['proje_zaman'], 0,-9) ?></lastmod>
  </url>
  <?php } ?>
</urlset>