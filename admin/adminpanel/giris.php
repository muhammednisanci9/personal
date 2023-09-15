<!DOCTYPE html>
<html>
<head>
	<title>Muhammed Nişancı | Admin Panel Giriş</title>

	<style type="text/css">
		.giris-container{
			width: 100%;
			height: 100%;
			position: relative;
			display: flex;
			align-items: center;
			justify-content: center;
		}
		.giris-children form{
			width: 100%;
			height: 100%;
			position: relative;
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
		}
		.giris-children form input,button{
			padding:5px 10px;
			margin-bottom: 10px;
		}
	</style>
</head>
<body>

	<section class="giris">
		<div class="giris-container">
			<div class="giris-children">
				<form method="POST" action="../adming/islem.php">
					<input type="text" name="kullanici_mail" placeholder="Kullanıcı Adı">
					<input type="password" name="kullanici_sifre" placeholder="Şifre">
					<button name="admingiris">Gönder</button>
				</form>
			</div>
		</div>
	</section>



</body>
</html>