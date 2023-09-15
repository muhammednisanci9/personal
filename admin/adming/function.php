<?php
    function guvenlik($veri){
        $guvenlikBir = trim($veri);
        $guvenlikIki = htmlspecialchars($guvenlikBir);
        $guvenlikUc = strip_tags($guvenlikIki, ENT_QUOTES);
        $guvenlikDort = addslashes($guvenlikUc);
        $guvenlikSonuc = $guvenlikDort;
        return($guvenlikSonuc);
    }



?>