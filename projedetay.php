<?php  
	include 'ortakphp.php';

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


	$projedetaysor = $db->prepare("SELECT * FROM proje WHERE proje_id=:proje_id");
	$projedetaysor->execute([
		'proje_id' => $_GET['proje_id']
	]);
	$projedetaycek = $projedetaysor->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="tr">
<head>
	<title>Proje - <?php echo $projedetaycek['proje_baslik'] ?></title>
	<meta name="Description" content="<?php  echo $projedetaycek['proje_description'] ?>"/>
	<meta name="Keywords" content="<?php  echo $projedetaycek['proje_keywords'] ?>"/>
	<?php include 'ortakhead.php'; ?>
</head>
<body>
	<?php include 'header.php'; ?>


	<section class="sliderR">
		<div class="sliderR-container">
			<div class="sliderR-children">
				<div class="sliderR-child">
					<div class="sliderR-img">
						<img src="<?php echo $projedetaycek['proje_resimbg'] ?>" alt="proje detay mockup">
					</div>
				</div>
			</div>
		</div>

		<div class="slidermockup">
			
			<div class="slidermockup-container">
				<!-- <div class="slidermockup-url">
					<h4>www.gozlukzade.com</h4>
				</div> -->
				<div class="slidermockup-child">
					<div class="slidermockup-img">
						<div class="slidermockup-mimg">
							<img src="image/random/laptop.png" alt="proje detay laptop mockup">
						</div>
						<div class="slidermockup-simg">
							<img src="<?php echo $projedetaycek['proje_resim'] ?>" alt="<?php echo $projedetaycek['proje_baslik'] ?>">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<main>
		<section class="siteKullanici">
			<div class="siteKullanici-child">
				<div class="siteKullanici-icon">
					<img src="image/icon/cite.png" alt="çift tırnak icon">
				</div>
				<p>
					Şuan içinde bulunduğunuz proje ve sitede bulunan diğer projelerin birçoğu kendimi geliştirmek için yapmış olduğum web siteler. Bazı projeler bionluk üzerinden iletişime geçen müşteriler için yapmış olduğum web siteleridir. Bu nedenle bazılarının canlı halina aşağıda ki "Siteye Git" butonuyla ulaşabilirsiniz. 
				</p>
				<div class="siteKullanici-yazar">
					<span>Muhammed NİŞANCI</span>
				</div>
				<!-- <div class="siteKullanici-iconR">
					<img src="image/icon/cite.png">
				</div> -->
			</div>


			<div class="siteUrl">
				<a href="<?php echo $projedetaycek['proje_link'] ?>">Siteye Git</a>
			</div>
		</section>


		<section class="calisma">
			<div class="calisma-container">
				<div class="index-title" style="margin-bottom: 25px">
					<h1 style="color: #f0efef">Projede Kullanılan Diller</h1>
					<h3>Kullanılan Diller</h3>
				</div>
				<div class="calisma-children">
						<?php  


							$proje_dil = explode(",",$projedetaycek['proje_dilid']);
							
							foreach($proje_dil as $proje_dil2){

							$projedilsor = $db->prepare("SELECT * FROM projedil WHERE projedil_id=:projedil_id");
							$projedilsor->execute([
								'projedil_id' => $proje_dil2
							]);
							$projedilcek = $projedilsor->fetch(PDO::FETCH_ASSOC);

						?>
					<div class="calisma-child">
						<div class="calisma-img">
							<img src="<?php echo $projedilcek['projedil_resim'] ?>" alt="<?php echo $projedilcek['projedil_ad'] ?>">
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
		</section>


	    <section class="projeayrinti">
			<div class="projeayrinti-container">
				<div class="index-title">
					<h1 style="color: #f0efef">Projede Kullanılan Teknoloji</h1>
					<h3>Proje Özellikleri</h3>
				</div>
				<div class="projeayrinti-children">

					<?php  
						$projeozellik_ids = explode(",", $projedetaycek['proje_ozellikid']);

						foreach($projeozellik_ids as $projeozellik_idscek){

						$projeozelliksor = $db->prepare("SELECT * FROM projeozellik WHERE projeozellik_id=:projeozellik_id");
						$projeozelliksor->execute([
							'projeozellik_id' => $projeozellik_idscek
						]);
						$projeozelliksoncek = $projeozelliksor->fetch(PDO::FETCH_ASSOC);

					?>
					<div class="projeayrinti-child">
						<div class="projeayrinti-img">
							<img src="<?php echo $projeozelliksoncek['projeozellik_resim'] ?>" alt="<?php echo $projeozelliksoncek['projeozellik_baslik'] ?>">
						</div>
						<div class="projeayrinti-text">
							<div class="projeayrinti-baslik">
								<h4><?php echo $projeozelliksoncek['projeozellik_baslik'] ?></h4>
							</div>
							<div class="projeayrinti-aciklama">
								<p><?php echo $projeozelliksoncek['projeozellik_yazi'] ?></p>
							</div>
						</div>
					</div>
					<?php } ?>
					
				</div>
			</div>
		</section> 









	</main>




	<?php include 'footer.php'; ?>
</body>
</html>