<?php include '../adming/islem.php';

$beceriId=$_GET['beceri_id'];

$beceriduzenlesor = $db->prepare("SELECT * FROM beceri WHERE beceri_id=:beceri_id");
$beceriduzenlesor->execute([
    'beceri_id' => $beceriId
]);
$becericek = $beceriduzenlesor->fetch(PDO::FETCH_ASSOC);

?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Beceri Düzenle</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>
    <!-- Sidebar Başlangıç -->
    <?php include 'sidebar.php' ?>
    <!-- Sidebar Bitiş -->



    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

    <!-- Header Başlangıç-->
    <?php include 'header.php' ?>
    <!-- Header Bitiş -->

        <div class="breadcrumbs"></div>

        <div class="content">
            <div class="animated fadeIn">


                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header"><strong>Beceri Düzenle</strong></div>
                            <div class="card-body card-block">
                                <form action="../adming/islem.php" method="POST">
                                <input type="hidden" name="beceri_id" value="<?php echo $beceriId ?>">
                                    <div class="form-group"><label for="company" class=" form-control-label">Sıra</label><input type="text" id="company" value="<?php echo $becericek['beceri_sira'] ?>" name="beceri_sira" class="form-control"></div>
                                    <div class="form-group"><label for="vat" class=" form-control-label">İcon</label><input type="text" id="vat" value="<?php echo $becericek['beceri_resim'] ?>" name="beceri_resim" class="form-control"></div>
                                    <div class="form-group"><label for="street" class=" form-control-label">Baslık</label><input type="text" id="street" value="<?php echo $becericek['beceri_baslik'] ?>" name="beceri_baslik" class="form-control"></div>
                                    <div class="form-group"><label for="country" class=" form-control-label">İçerik</label><input type="text" id="country" value="<?php echo $becericek['beceri_yazi'] ?>" name="beceri_yazi" class="form-control"></div>
                                    <div class="form-group"><button class="btn btn-success float-right" name="beceriduzenle">Düzenle</button></div>
                                </form>
                            </div>
                        </div>
                    </div>
            </div>
        </div><!-- .animated -->
    </div><!-- .content -->

    <div class="clearfix"></div>

    <?php include 'footer.php' ?>

</div><!-- /#right-panel -->

<!-- Right Panel -->

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
<script src="assets/js/main.js"></script>


</body>
</html>
