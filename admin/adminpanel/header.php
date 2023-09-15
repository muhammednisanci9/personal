        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="Logo"></a>
                    <a class="navbar-brand hidden" href="index.php"><img src="images/favicon.png" alt="Logo"></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">
                        


                        <div class="dropdown for-message">
                            <?php
                                 $iletisimheadsor = $db->prepare("SELECT * FROM iletisim ORDER BY iletisim_zaman DESC");
                                 $iletisimheadsor->execute();
                                 $iletisimheadsay = $iletisimheadsor->rowCount();
                            ?>
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="message" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-envelope"></i>
                                <span class="count bg-primary"><?php echo $iletisimheadsay ?></span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="message">
                            
                                <p class="red">Toplam <?php echo $iletisimheadsay ?> Mesaj</p>
                                <?php
                                   
                                    foreach($iletisimheadsor as $iletisimheadcek){
                                ?>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="images/avatar/1.jpg"></span>
                                    <div class="message media-body">
                                        <span class="name float-left"><?php echo $iletisimheadcek['iletisim_adsoyad'] ?></span>
                                        <span class="time float-right"><?php echo $iletisimheadcek['iletisim_zaman'] ?></span>
                                        <p><?php echo $iletisimheadcek['iletisim_icerik'] ?></p>
                                    </div>
                                </a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>

                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa- user"></i>Profilim</a>


                            <a class="nav-link" href="#"><i class="fa fa -cog"></i>Ayarlar</a>

                            <a class="nav-link" href="cikis.php"><i class="fa fa-power -off"></i>Çıkış</a>
                        </div>
                    </div>

                </div>
            </div>
        </header>