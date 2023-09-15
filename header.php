<?php include 'sidebar.php' ?>

<header id="headerbar">
		<div class="bar-container">
			<div class="bar-children">
				<div class="bar-child">
					<div class="bar-logo">
						<a href="#0">
							<img src="image/icon/menu.png" alt="menu icon" onclick="sidebaropen()">
						</a>
						<a href="index.php">
							<img src="image/logo/logo.png" alt="logo">
						</a>
					</div>
				</div>
				<div class="bar-child">
					<ol id="bar-items">
						<?php 
							$boxurl = explode("/",$_SERVER['REQUEST_URI']);
							$boxurlp = $boxurl['2'];
							
						?>
						<a href="index.php" <?php if($boxurlp=="" || $boxurlp=="index" || $boxurlp=="index.php"){ ?> style="box-shadow: inset 0 -2px 0px 0 #666;" <?php } ?>><li>Ana Sayfa</li></a>
						<a href="index#hizmetlerim"><li>Hizmetlerimiz</li></a>
						<a href="projeler.php"  <?php if($boxurlp=="projeler" || $boxurlp=="projeler.php"){ ?> style="box-shadow: inset 0 -2px 0px 0 #666;" <?php } ?>><li>Projelerim</li></a>
						<a href="index#iletisim"><li>İletişim</li></a>
					</ol>
				</div>
				<div class="bar-child">
					<ol id="bar-contact">
						<li onclick="iletisimopen()" ><img src="image/icon/call.png" alt="iletisim listesi icon"><span>İletişim</span></li>
						<div id="secret-contact">
							<div class="secret-view"></div>
							<ul>
								<a href="index#iletisim"><li id="secret-view-item">Siteden İletişim Kur</li></a>
								<a href="mailto:muhammednisanci2000@gmail.com"><li id="secret-view-item">Mail ile İletişim Kur</li></a>
								<a href="tel:05315452814"><li id="secret-view-item">Telefon ile İletişim Kur</li></a>
							</ul>
						</div>
						<!-- <li><img src="image/icon/mail.png">dogalteknik@gmail.com</li> -->
					</ol>
				</div>
			</div>
		</div>
	</header>
