<?php  
	include 'ortakphp.php';
?>
<?php 
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
<!DOCTYPE html>
<html lang="tr">
<head>
	<title>Muhammed Nişancı - Projeler</title>
	<meta name="Description" content="Front-end ve back-end projelerimi burada bulabilirisiniz."/>
	<meta name="Keywords" content="web developer, web tasarımcı, muhammed nişancı, frelancer, projeler"/>
	<?php include 'ortakhead.php' ?>
</head>
<body>
	<?php include 'header.php'; ?>

	<section class="sliderN">
		<div class="sliderN-container">
			<div class="sliderN-children">
				<div class="sliderN-child">
					<div class="sliderN-img">
						<img src="image/random/rbg5.jpg" alt="projeler banner">
					</div>
					
					<!-- <div class="slider-baslik-text">
						<h1>AŞAĞIDA YER ALMAK BİR <a href="">TIK</a> UZAĞINIZDA</h1>
					</div> -->
				</div>
			</div>
		</div>

		<div class="slidermockup">
			<div class="slidermockup-container">
				<div class="slidermockup-child">
					<div class="slidermockup-img">
						<!-- <div class="slidermockup-nimg">
							<img src="image/logo/bnn.png"  style="margin-bottom: -65px">
						</div> -->
					</div>
				</div>
			</div>
		</div> 


	</section>


	<main>
		<section class="neler">
			<div class="neler-container">
				<div class="neler-category">
					<ol>
						<li>Hepsi</li>
						<li>Kurumsal</li>
						<li>E-ticaret</li>
						<li>Blog</li>
						<li>Kişisel</li>
					</ol>
				</div>
				<div class="neler-children">

					<?php  
						$projesor = $db->prepare("SELECT * FROM proje ORDER BY proje_id ASC");
						$projesor->execute();
						foreach($projesor as $projecek){
					?>
					<div class="neler-child" style="background: #<?php echo $projecek['proje_renk'] ?>">
						<a href="proje-<?=seo($projecek['proje_baslik']."-".$projecek['proje_id']) ?>">
							<div class="neler-url">
								<span><?php echo $projecek['proje_baslik'] ?></span>
							</div>
							<div class="neler-img">
								<img src="image/site/genel/tab.png" alt="proje icon">
								<img src="<?php echo $projecek['proje_resim'] ?>" alt="<?php echo $projecek['proje_baslik'] ?>">
							</div>
						</a>
					</div>
					<?php } ?>
				</div>
			</div>
		</section>
	</main>


	<?php include 'footer.php'; ?>
</body>
</html>