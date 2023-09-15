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

?>


<!DOCTYPE html>
<html lang="tr">
<head>
	<title>Kişisel Web Site - Muhammed Nişancı</title>
	<?php include 'ortakhead.php' ?>
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<meta name="Description" content="Front-end ve back-end web yazılım geliştiricisiyim."/>
	<meta name="Keywords" content="web developer, web tasarımcı, muhammed nişancı, frelancer, full stack developer"/>
</head>
<body>
	<?php include 'header.php' ?>
	

	


	<section class="randevu">
		<div class="randevu-container">
			<div class="randevu-text">
				<h2>Muhammed Nişancı</h2>
				<h3>Web Tasarımcı</h3>
			</div>
		</div>	
	</section>




	<section class="calisma">
		<div class="calisma-container">
			<div class="calisma-title index-title">
				<h1>Proje Dilleri</h1>
				<h3>Diller</h3>
			</div>
			<div class="calisma-children">
				<?php  
					$dilsor = $db->prepare("SELECT * FROM projedil");
					$dilsor->execute();
					foreach($dilsor	as $dilcek){
				?>
				<div class="calisma-child">
					<div class="calisma-img">
						<img src="<?php echo $dilcek['projedil_resim'] ?>" alt="<?php echo $dilcek['projedil_ad'] ?>">
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</section>







	<section class="hizmet">
		<div class="hizmet-container">
			<div class="index-title">
				<h1>Hizmetlerim</h1>
				<h3>Bütün Hizmetlerim</h3>
			</div>
			<div class="hizmet-children">
				<div class="hizmet-child">
					<div class="hizmet-text">
						<?php  
							$becerisor = $db->prepare("SELECT * FROM beceri");
							$becerisor->execute();
							foreach($becerisor as $becericek){
						?>
						<div class="hizmet-item">
							<h4 data-aos="fade-up"><?php echo $becericek['beceri_baslik'] ?></h4>
							<p data-aos="fade-up">
								<?php echo $becericek['beceri_yazi'] ?>
							</p>
						</div>
						<?php } ?>
					<!-- 	<h4>Özel ya da Hazır Tasarım Kurumsal Web Site</h4>
						<p>Yaptığınız işi tanıtmak ve insanlarla hızlı bir şekilde iletişim kurmanın en kısa yollarından birisi kurumsal web site sahibi olmaktır. Sadece size özel ya da hazır tasarımları istekleriniz doğrultusunda düzeltip arkaplan kodlamasını yaparak sitenizi en kısa sürede yayınlıyorum. </p>
						<h4>Özel ya da Hazır Tasarım Blog Web Site</h4>
						<p>Gezdiğiniz yerleri, bilgi sahibi olduğunuzu herhangibir konuyu insanlara duyurmak için en güzel yol bir blog sitesi sahibi olmaktır. Sadece size özel ya da hazır tasarımları istekleriniz doğrultusunda düzeltip arkaplan kodlamasını yaparak sitenizi en kısa sürede yayınlıyorum.</p>
						<h4>Özel ya da Hazır Tasarım e-Ticaret Sitesi</h4>
						<p>Esnaf, öğrenci, meraklı hiç farketmez tek ihtiyacınız bir e-ticaret sitesi. e-Ticaret sitesi ile ürünleri online ortamda satmak için bir e-Ticaret siteniz olmalı. Sadece size özel ya da hazır tasarımları istekleriniz doğrultusunda düzeltip arkaplan kodlamasını yaparak sitenizi en kısa sürede yayınlıyorum.</p>
						<h4>Özel ya da Hazır Tasarım Tek Sayfalık Web Site</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in.</p> -->
					</div>
					<div class="hizmet-img">
						<img src="image/hizmet/h1.jpg" alt="İlk Hizmetim">
						<img src="image/hizmet/h2.jpg" alt="İkinci Hizmetim">
						<img src="image/hizmet/h3.jpg" alt="Üçüncü Hizmetim">
					</div>
				</div>
			</div>
		</div>
	</section>


		<section class="projeayrinti" id="hizmetlerim">
			<div class="projeayrinti-container">
				<div class="index-title">
					<h1>Proje Özellikleri</h1>
					<h3>Kullanılan Teknoloji</h3>
				</div>
				<div class="projeayrinti-children">

					<?php  
						
					$projeozelliksor = $db->prepare("SELECT * FROM projeozellik");
					$projeozelliksor->execute();
					foreach($projeozelliksor as $projeozellikcek){					

					?>
					<div class="projeayrinti-child" data-aos="fade-up">
						<div class="projeayrinti-img" style="border: 4px solid #fff;">
							<img src="<?php echo $projeozellikcek['projeozellik_resim'] ?>" alt="<?php echo $projeozellikcek['projeozellik_baslik'] ?>">
						</div>
						<div class="projeayrinti-text">
							<div class="projeayrinti-baslik">
								<h4><?php echo $projeozellikcek['projeozellik_baslik'] ?></h4>
							</div>
							<div class="projeayrinti-aciklama">
								<p><?php echo $projeozellikcek['projeozellik_yazi'] ?></p>
							</div>
						</div>
					</div>
					<?php } ?>
					
				</div>
			</div>
		</section>
<!-- 	<section class="referans">
		<div class="referans-container">
			<div class="referans-title index-title">
				<h1>Zade Yazılım Referansları</h1>
				<h3>Referanslar</h3>
			</div>
			<div class="referans-children">
				<div class="referans-child">
					
				</div>
			</div>
		</div>
	</section>

 -->

	<section class="hakkimizda">
		<div class="hakkimizda-container">
			<!-- <div class="hakkimizda-title index-title">
				<h1>Hakkımda</h1>
				<h3>Ben Kimim?</h3>
			</div> -->
			<div class="hakkimizda-children">
				<div class="hakkimizda-child">
					<div class="hakkimizda-img" data-aos="fade-up">
						<img src="image/logo/bn.jpg" alt="Muhammed NİŞANCI">
					</div>
				</div>
				<div class="hakkimizda-child" data-aos="fade-up">
					<div class="hakkimizda-title index-title">
						<h1>Hakkımda</h1>
						<h3>Ben Kimim?</h3>
					</div>
					<!-- <div class="hakkimizda-img">
						<img src="image/random/world.png">
					</div> -->
					<div class="hakkimizda-text">
						<!-- <h5 class="index-title-5">Zade Yazılım Hakkında</h5> -->
						<p>
							<?php
								$hakkimdabasliksor = $db->prepare("SELECT * FROM hakkimdabaslik");
								$hakkimdabasliksor->execute();
								$hakkimdabaslikcek = $hakkimdabasliksor->fetch(PDO::FETCH_ASSOC);
							?>
							<?php echo $hakkimdabaslikcek['hakkimdabaslik_yazi'] ?>
						</p>
						<ol class="hakkimizda-item">
							<?php
								$hakkimdasor = $db->prepare("SELECT * FROM hakkimdalist ORDER BY hakkimdalist_sira ASC");
								$hakkimdasor->execute();
								foreach($hakkimdasor as $hakkimdacek){
							?>
							<li><b><?php echo $hakkimdacek['hakkimdalist_baslik'] ?></b> <span><?php echo $hakkimdacek['hakkimdalist_baslikcevap'] ?></span></li>
							<?php } ?>
						</ol>
					</div>
				</div>
				<!-- <div class="hakkimizda-child">
					<div class="hakkimizda-img">
						<img src="image/icon/machinery.png">
						<img src="image/icon/machinery.png">
					</div>
					<div class="hakkimizda-img">
						<img src="image/icon/machinery.png">
						<img src="image/icon/machinery.png">
					</div>
				</div> -->
			</div>
		</div>
	</section>




	<section class="anaprojeler">
		<div class="anaprojeler-container">
			<div class="index-title" style="margin-bottom: 20px;">
				<h1>Projeler</h1>
				<h3>Projelerim</h3>
			</div>
			<div class="anaprojeler-children">
				<div class="anaprojeler-child">
					<?php 
						$anaprojesor = $db->prepare("SELECT * FROM proje LIMIT 6");
						$anaprojesor->execute();
						foreach($anaprojesor as $anaprojecek){
					?>
					<div class="anaprojeler-img" data-aos="fade-up">
						<a href="proje-<?=seo($anaprojecek['proje_baslik']."-".$anaprojecek['proje_id']) ?>" alt="<?php echo $anaprojecek['proje_baslik'] ?>">
						<img src="<?php echo $anaprojecek['proje_resim'] ?>" alt="<?php echo $anaprojecek['proje_baslik'] ?>">
						<div class="anaprojeler-text">
							<span><?php echo $anaprojecek['proje_baslik'] ?></span>
						</div>
						</a>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</section>






	<!-- <section class="soniletisim">
		<div class="soniletisim-container">
			<div class="soniletisim-children">
				<div class="soniletisim-child">
					<div class="soniletisim-img">
						<img src="image/icon/randevu.png">
					</div>
					<div class="soniletisim-text">
						<span>Randevu Al</span>
					</div>
				</div>
				<div class="soniletisim-child">
					<div class="soniletisim-img">
						<img src="image/icon/phone.png">
					</div>
					<div class="soniletisim-text">
						<span>414 4 444</span>
					</div>
				</div>
				<div class="soniletisim-child">
					<div class="soniletisim-img">
						<img src="image/icon/whatsapp.png">
					</div>
					<div class="soniletisim-text">
						<span>Whatsapptan Yaz</span>
					</div>
				</div>
			</div>
		</div>
	</section> -->



	<section class="iletisim">
		<div class="iletisim-container" id="iletisim">
			<div class="iletisim-title index-title">
				<h1>İletişim Kur</h1>
				<h3>İletişim</h3>
			</div>
			<?php 
				if(isset($_GET['iletisim'])=="basarili"){
			?>
			<div class="iletisim-get" style="background: #4FB99F;">
				<span>Mesajınız Başarıyla Gönderildi. </span>
				<span onclick="this.parentElement.style.display='none';">&times;</span>

			</div>
		<?php }elseif(isset($_GET['iletisim'])=="basarisiz"){ ?>
			<div class="iletisim-get" style="background: #f44336;">
				<span>Mesajınız Gönderilemedi. </span>
				<span onclick="this.parentElement.style.display='none';">&times;</span>
				
			</div>
			<?php } ?>
			<div class="iletisim-children">
				
				<div class="iletisim-child">
					<ol>
						<li><img src="image/icon/mailf.png" alt="mail"> muhammednisanci2000@gmail.com</li>
						<li><img src="image/icon/phonef.png" alt="Telefon No"> +90(531)545-28-14</li>
						<li><img src="image/icon/locationf.png" alt="İkametgah"> Kartal / İstanbul</li>
						<li><img src="image/icon/internet.png" alt="Web Site"> muhammednisanci.com</li>
					</ol>					
				</div>


				
				<div class="iletisim-child">
					<form method="POST" action="admin/adming/islem.php">
						<div>
							<input type="text" name="iletisim_adsoyad" required="">
							<label>Ad Soyad</label>
						</div>
						<div>
							<input type="text" name="iletisim_tel" required="">
							<label>Tel No</label>
						</div>
						<div>
							<input type="text" name="iletisim_mail"required="">
							<label>Mail</label>
						</div>
						<div>
							<input type="text" name="iletisim_konu" required="">
							<label>Konu</label>
						</div>
						<div>
							<textarea name="iletisim_icerik" required=""></textarea>
							<label>Mesaj</label>
						</div>
						<button name="iletisimgonder">Gönder</button>
					</form>
				</div>
				
			</div>
		</div>
	</section>











<!-- 	<section class="randomKategori">
		<div class="randomKategori-container">
			<div class="randomKategori-img">
				<img src="image/random/kategori.jpg" alt="">
			</div>
			<div class="randomKategori-children">
				<div class="randomKategori-child">
				<marquee>
					<h5>Özel Yazılım Kişisel Web Site</h5>
					<h5>Özel Yazılım Kurumsal Web Site</h5>
					<h5>Özel Yazılım Blog Web Site</h5>
					<h5>Özel Yazılım Tanıtıcı Web Site</h5>
					<h5>Özel Yazılım e-Ticaret Web Site</h5>
					<h5>Hazır Yazılım Kişisel Web Site</h5>
					<h5>Hazır Yazılım Kurumsal Web Site</h5>
					<h5>Hazır Yazılım Blog Web Site</h5>
					<h5>Hazır Yazılım Tanıtıcı Web Site</h5>
					<h5>Hazır Yazılım e-Ticaret Web Site</h5>
					<h5>Özel Yazılım Kişisel Web Site</h5>
				</marquee>
				</div>
			</div>
		</div>
	</section> -->



	<?php include 'footer.php' ?>
</body>
</html>