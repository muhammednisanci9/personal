<footer>
		<section class="footer">
			<div class="footer-container">
				<div class="footer-children">
					<div class="footer-child">
						<h2>Proje Özellikleri</h2>
						<ol>
							<?php  
								$projeozelliksor = $db->prepare("SELECT * FROM projeozellik LIMIT 6");
								$projeozelliksor->execute();
								foreach($projeozelliksor as $projeozellikcek){
							?>
							<li><?php echo $projeozellikcek['projeozellik_baslik'] ?></li>
							<?php } ?>
						</ol>
					</div>


					<div class="footer-child">
						<h2>Projelerim</h2>
						<ol>
							<?php 
								$anaprojesor = $db->prepare("SELECT * FROM proje LIMIT 6");
								$anaprojesor->execute();
								foreach($anaprojesor as $anaprojecek){
							?>
							<li><a href="proje-<?=seo($anaprojecek['proje_baslik']."-".$anaprojecek['proje_id']) ?>"><p><?php echo $anaprojecek['proje_baslik'] ?></p></a></li>
							<?php } ?>
						</ol>
					</div>


					<div class="footer-child">
						<h2>İletişim</h2>
						<ol>
							<li><img src="image/icon/locationf.png" alt="konum icon"><span>Home Office</span></li>
							<li><img src="image/icon/mailf.png" alt="mail icon"><span>muhammednisanci2000@gmail.com</span></li>
							<li><a href="tel:05315452814"><img src="image/icon/phonef.png" alt="telefon numarası icon"><span>0(531)545-28-14</span></a></li>
						</ol>
					</div>


					<div class="footer-ivir">
						<span>@ 2020 Muhammed Nişancı - Tüm Hakları Saklıdır.</span>
					</div>
				</div>
				<!-- <div class="footer-tanitim">
					<p>Bu site <b> Zade Yazılım </b>tarafından hazırlanmıştır.</p>
				</div> -->
			</div>
		</section>
</footer>


<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>



<script type="text/javascript" src="script.js"></script>