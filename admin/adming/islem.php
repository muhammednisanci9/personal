<?php
ob_start();
session_start();
include 'baglan.php';
include 'function.php';

if (isset($_POST['admingiris'])) {
    $admingirissor = $db->prepare("SELECT * FROM kullanici where 
        kullanici_mail=:kullanici_mail
        ");
    $admingirissor->execute([
        'kullanici_mail' => guvenlik($_POST['kullanici_mail'])
    ]);
    $admingiriscek = $admingirissor->fetch(PDO::FETCH_ASSOC);
    $adminmail = guvenlik($admingiriscek['kullanici_mail']);
    $adminsifre = guvenlik($admingiriscek['kullanici_sifre']);
    $admindurum = guvenlik($admingiriscek['kullanici_durum']);

    $gelenadminmail = guvenlik($_POST['kullanici_mail']);
    $gelenadminsifre = guvenlik($_POST['kullanici_sifre']);


    if($adminmail===$gelenadminmail and $adminsifre===$gelenadminsifre and $admindurum==='14'){
        echo $_SESSION['admin_mail']=$gelenadminmail;
        Header("Location:../adminpanel/index.php");
    }else{
        Header("Location:../adminpanel/giris.php");
    }
}




if(isset($_POST['iletisimgonder'])){
    $iletisimgondersor = $db->prepare("INSERT INTO iletisim SET 
        iletisim_adsoyad=:iletisim_adsoyad,
        iletisim_mail=:iletisim_mail, 
        iletisim_konu=:iletisim_konu, 
        iletisim_icerik=:iletisim_icerik
    ");
    $iletisimgondersor->execute([
        'iletisim_adsoyad' => guvenlik($_POST['iletisim_adsoyad']),
        'iletisim_mail' => guvenlik($_POST['iletisim_mail']),
        'iletisim_konu' => guvenlik($_POST['iletisim_konu']),
        'iletisim_icerik' => guvenlik($_POST['iletisim_icerik'])
    ]);
    if($iletisimgondersor){
        Header("Location:../../index.php?iletisim=basarili#iletisim");
    }else{
        Header("Location:../../index.php??iletisim=basarisiz#iletisim");
    }
}


if(isset($_POST['iletisimsil'])){
    $hakkimdalistsilsor = $db->prepare("DELETE FROM iletisim WHERE iletisim_id=:iletisim_id");
    $hakkimdalistsilsor->execute([
        'iletisim_id' => $_POST['iletisim_id']
    ]);
    if($hakkimdalistsilsor){
        Header("Location:../adminpanel/iletisim.php?silme=basarili");
    }else{
        Header("Location:../adminpanel/iletisim.php?silme=basarisiz");
    }
}





if(isset($_POST['becerisil'])){
    $becerisilsor = $db->prepare("DELETE FROM beceri WHERE beceri_id=:beceri_id");
    $becerisilsor->execute([
        'beceri_id' => $_POST['beceri_id']
    ]);
    if($becerisilsor){
        Header("Location:../adminpanel/beceri.php?silme=basarili");
    }else{
        Header("Location:../adminpanel/beceri.php?silme=basarisiz");
    }
}



if(isset($_POST['beceriduzenle'])){
    $beceriduzenlesor = $db->prepare("UPDATE beceri SET
        beceri_sira=:beceri_sira,
        beceri_resim=:beceri_resim,
        beceri_baslik=:beceri_baslik,
        beceri_yazi=:beceri_yazi
        WHERE beceri_id=:beceri_id
    ");
    $beceriduzenlesor->execute([
        'beceri_sira' => $_POST['beceri_sira'],
        'beceri_resim' => $_POST['beceri_resim'],
        'beceri_baslik' => $_POST['beceri_baslik'],
        'beceri_yazi' => $_POST['beceri_yazi'],
        'beceri_id' => $_POST['beceri_id']
    ]);
    if($beceriduzenlesor){
        Header("Location:../adminpanel/beceri.php?duzenleme=basarili");
    }else{
        Header("Location:../adminpanel/beceri.php?duzenleme=basarisiz");
    }
}



if(isset($_POST['beceriekle'])){
    $becerieklesor = $db->prepare("INSERT INTO beceri SET
        beceri_sira=:beceri_sira,
        beceri_resim=:beceri_resim,
        beceri_baslik=:beceri_baslik,
        beceri_yazi=:beceri_yazi
    ");
    $becerieklesor->execute([
        'beceri_sira' => $_POST['beceri_sira'],
        'beceri_resim' => $_POST['beceri_sira'],
        'beceri_baslik' => $_POST['beceri_baslik'],
        'beceri_yazi' => $_POST['beceri_yazi']
    ]);
    if($becerieklesor){
        Header("Location:../adminpanel/beceri.php?ekleme=basarili");
    }else{
        Header("Location:../adminpanel/beceri.php?ekleme=basarisiz");
    }
}




if(isset($_POST['hakkimdalistsil'])){
    $hakkimdalistsilsor = $db->prepare("DELETE FROM hakkimdalist WHERE hakkimdalist_id=:hakkimdalist_id");
    $hakkimdalistsilsor->execute([
        'hakkimdalist_id' => $_POST['hakkimdalist_id']
    ]);
    if($hakkimdalistsilsor){
        Header("Location:../adminpanel/hakkimdalist.php?silme=basarili");
    }else{
        Header("Location:../adminpanel/hakkimdalist.php?silme=basarisiz");
    }
}



if(isset($_POST['hakkimdalistduzenle'])){
    $hakkimdalistduzenlesor = $db->prepare("UPDATE hakkimdalist SET
        hakkimdalist_sira=:hakkimdalist_sira,
        hakkimdalist_baslik=:hakkimdalist_baslik,
        hakkimdalist_baslikcevap=:hakkimdalist_baslikcevap
        WHERE hakkimdalist_id=:hakkimdalist_id
    ");
    $hakkimdalistduzenlesor->execute([
        'hakkimdalist_sira' => $_POST['hakkimdalist_sira'],
        'hakkimdalist_baslik' => $_POST['hakkimdalist_baslik'],
        'hakkimdalist_baslikcevap' => $_POST['hakkimdalist_baslikcevap'],
        'hakkimdalist_id' => $_POST['hakkimdalist_id']
    ]);
    if($hakkimdalistduzenlesor){
        Header("Location:../adminpanel/hakkimdalist.php?duzenleme=basarili");
    }else{
        Header("Location:../adminpanel/hakkimdalist.php?duzenleme=basarisiz");
    }
}



if(isset($_POST['hakkimdalistekle'])){
    $hakkimdalisteklesor = $db->prepare("INSERT INTO hakkimdalist SET
        hakkimdalist_sira=:hakkimdalist_sira,
        hakkimdalist_baslik=:hakkimdalist_baslik,
        hakkimdalist_baslikcevap=:hakkimdalist_baslikcevap

    ");
    $hakkimdalisteklesor->execute([
        'hakkimdalist_sira' => $_POST['hakkimdalist_sira'],
        'hakkimdalist_baslik' => $_POST['hakkimdalist_baslik'],
        'hakkimdalist_baslikcevap' => $_POST['hakkimdalist_baslikcevap']
    ]);
    if($hakkimdalisteklesor){
        Header("Location:../adminpanel/hakkimdalist.php?ekleme=basarili");
    }else{
        Header("Location:../adminpanel/hakkimdalist.php?ekleme=basarisiz");
    }
}


if(isset($_POST['projeekle'])){

    $projediller = substr(implode("", $_POST['proje_dilid']),0,-1);
    $projeozellikler = substr(implode("", $_POST['proje_ozellikid']),0,-1);

    $projeekle = $db->prepare("INSERT INTO proje SET
        proje_baslik=:proje_baslik,
        proje_kategori=:proje_kategori,
        proje_resim=:proje_resim,
        proje_resimbg=:proje_resimbg,
        proje_renk=:proje_renk,
        proje_dilid=:proje_dilid,
        proje_ozellikid=:proje_ozellikid
    ");
    $projeekle->execute([
        'proje_baslik' => $_POST['proje_baslik'],
        'proje_kategori' => $_POST['proje_kategori'],
        'proje_resim' => $_POST['proje_resim'],
        'proje_resimbg' => $_POST['proje_resimbg'],
        'proje_renk' => $_POST['proje_renk'],
        'proje_dilid' => $projediller,
        'proje_ozellikid' => $projeozellikler
    ]);
    if($projeekle){
        Header("Location:../adminpanel/proje.php?ekleme=basarili");
    }else{
        Header("Location:../adminpanel/proje.php?ekleme=basarisiz");
    }
}


if(isset($_POST['projeduzenle'])){

    $projediller = substr(implode("", $_POST['proje_dilid']),0,-1);
    $projeozellikler = substr(implode("", $_POST['proje_ozellikid']),0,-1);



    $projelistduzenlesor = $db->prepare("UPDATE proje SET
        proje_baslik=:proje_baslik,
        proje_kategori=:proje_kategori,
        proje_resim=:proje_resim,
        proje_resimbg=:proje_resimbg,
        proje_renk=:proje_renk,
        proje_dilid=:proje_dilid,
        proje_ozellikid=:proje_ozellikid
        WHERE proje_id=:proje_id
    ");
    $projelistduzenlesor->execute([
        'proje_baslik' => $_POST['proje_baslik'],
        'proje_kategori' => $_POST['proje_kategori'],
        'proje_resim' => $_POST['proje_resim'],
        'proje_resimbg' => $_POST['proje_resimbg'],
        'proje_renk' => $_POST['proje_renk'],
        'proje_id' => $_POST['proje_id'],
        'proje_dilid' => $projediller,
        'proje_ozellikid' => $projeozellikler
    ]);
    if($projelistduzenlesor){
        Header("Location:../adminpanel/proje.php?duzenleme=basarili");
    }else{
        Header("Location:../adminpanel/proje.php?duzenleme=basarisiz");
    }
}


if(isset($_POST['projesil'])){
    $hakkimdalistsilsor = $db->prepare("DELETE FROM proje WHERE proje_id=:proje_id");
    $hakkimdalistsilsor->execute([
        'proje_id' => $_POST['proje_id']
    ]);
    if($hakkimdalistsilsor){
        Header("Location:../adminpanel/proje.php?silme=basarili");
    }else{
        Header("Location:../adminpanel/proje.php?silme=basarisiz");
    }
}

if(isset($_POST['ipengelle'])){
    $ipengellesor = $db->prepare("INSERT INTO engelip SET
        engelip_ip=:engelip_ip
    ");
    $ipengellesor->execute([
        'engelip_ip' => $_POST['engelip_ip']
    ]);
    if($ipengellesor){
        Header("Location:../adminpanel/index.php?engelleme=basarili");
    }else{
        Header("Location:../adminpanel/index.php?engelleme=basarisiz");
    }
}



if(isset($_POST['ipengelkaldir'])){
    $ipengelkaldirsor = $db->prepare("DELETE FROM engelip WHERE
        engelip_ip=:engelip_ip
    ");
    $ipengelkaldirsor->execute([
        'engelip_ip' => $_POST['engelip_ip']
    ]);
    if($ipengelkaldirsor){
        Header("Location:../adminpanel/index.php?engelkaldirma=basarili");
    }else{
        Header("Location:../adminpanel/index.php?engelkaldirma=basarisiz");
    }


}




if(isset($_POST['projeozellikekle'])){


    $projeozellikduzenle = $db->prepare("INSERT INTO projeozellik SET
        projeozellik_baslik=:projeozellik_baslik,
        projeozellik_yazi=:projeozellik_yazi,
        projeozellik_resim=:projeozellik_resim
    ");
    $projeozellikduzenle->execute([
        'projeozellik_baslik' => $_POST['projeozellik_baslik'],
        'projeozellik_yazi' => $_POST['projeozellik_yazi'],
        'projeozellik_resim' => $_POST['projeozellik_resim']
    ]);
    if($projeozellikduzenle){
        Header("Location:../adminpanel/projeozellik.php?ekleme=basarili");
    }else{
        Header("Location:../adminpanel/projeprojeozellik.php?ekleme=basarisiz");
    }
}




if(isset($_POST['projeozellikduzenle'])){


    $projeozellikduzenle = $db->prepare("UPDATE projeozellik SET
        projeozellik_baslik=:projeozellik_baslik,
        projeozellik_yazi=:projeozellik_yazi,
        projeozellik_resim=:projeozellik_resim
        WHERE projeozellik_id=:projeozellik_id
    ");
    $projeozellikduzenle->execute([
        'projeozellik_baslik' => $_POST['projeozellik_baslik'],
        'projeozellik_yazi' => $_POST['projeozellik_yazi'],
        'projeozellik_resim' => $_POST['projeozellik_resim'],
        'projeozellik_id' => $_POST['projeozellik_id']
    ]);
    if($projeozellikduzenle){
        Header("Location:../adminpanel/projeozellik.php?duzenleme=basarili");
    }else{
        Header("Location:../adminpanel/projeprojeozellik.php?duzenleme=basarisiz");
    }
}

if(isset($_POST['projeozelliksil'])){


    $projeozellikduzenle = $db->prepare("DELETE FROM projeozellik WHERE 
        projeozellik_id=:projeozellik_id
    ");
    $projeozellikduzenle->execute([
        'projeozellik_id' => $_POST['projeozellik_id']
    ]);
    if($projeozellikduzenle){
        Header("Location:../adminpanel/projeozellik.php?silme=basarili");
    }else{
        Header("Location:../adminpanel/projeprojeozellik.php?silme=basarisiz");
    }
}





?>